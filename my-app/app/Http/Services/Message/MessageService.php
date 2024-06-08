<?php


namespace App\Http\Services\Message;

use App\Models\Message;
use Illuminate\Support\Facades\Session;

class MessageService
{
    public function get()
    {
        return Message::orderByDesc('id')->paginate(10);
    }
    public function insert($request)
    {
        try {
            $data = $request->input();
            $data['budget'] = json_encode($request->input('budget'));
    
            Message::create($data);
    
            Session::flash('success', 'Gửi phản hồi thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Gửi phản hồi không thành công');
        }
    }

    public function delete($request)
    {
        $video = Message::where('id', $request->input('id'))->first();
        if ($video) {
            $video->delete();
            return true;
        }

        return false;
    }
}
