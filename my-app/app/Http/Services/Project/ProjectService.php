<?php


namespace App\Http\Services\Project;

use App\Models\Category;
use App\Models\Image_Projects;
use App\Models\Project;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class ProjectService
{
    public function getById($id)
    {
        return Project::with('imgPro')->where('id', $id)->first();
    }


    public function getAll()
    {
        return Project::orderbyDesc('id')->paginate(20); // tạo mối liên kết với funtion menu tạo trong model Product để liên kết 2 bảng product va menu
    }

    public function getProjectAll()
    {
        return Project::where('active', 1)
            ->orderByDesc('id')
            ->take(36)
            ->get();
    }


    public function getProjectItem()
    {
        return Project::where('active', 1)
            ->orderByDesc('id')
            ->take(8)
            ->get();
    }

  







    public function create($request)
    {
        try {
          

            // Tạo mới sản phẩm
            $project = Project::create([
                'name' => (string) $request->input('name'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'category_id' => (string) $request->input('category_id'),
                'active' => (int) $request->input('active'),
            ]);

            // Kiểm tra và lưu ảnh
            if ($request->hasFile("images")) {
                $files = $request->file('images');

                foreach ($files as $file) {
                    if ($file && $file->isValid()) {
                        $imageName = time() . '_' . $file->getClientOriginalName();
                        $request['project_id'] = $project->id;
                        $request['name'] = $imageName;
                        $file->move(public_path('images'), $imageName);
                        Image_Projects::create([
                            'name' => $imageName,
                            'project_id' => $project->id
                        ]);
                    }
                }
            }

            Session::flash('success', 'Tạo sản phẩm mới thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            Log::info($err->getMessage());
            return false;
        }

        return true;
    }




   

    public function update($request,  $project)
    {
        try {
           

            $oldImageNames = Image_Projects::where('project_id', $project->id)->pluck('name')->toArray();

            // Kiểm tra nếu có ảnh mới được tải lên
            if ($request->hasFile("images")) {
                // Xóa toàn bộ ảnh cũ liên quan đến sản phẩm
                Image_Projects::where('project_id', $project->id)->delete();
                foreach ($oldImageNames as $oldImageName) {
                    $oldImagePath = public_path("images") . '/' . $oldImageName;
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                // Thêm ảnh mới
                $files = $request->file("images");
                foreach ($files as $file) {
                    $imageName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path("images"), $imageName);
                    Image_Projects::create([
                        'name' => $imageName,
                        'project_id' => $project->id
                    ]);
                }
            }

            // Cập nhật thông tin sản phẩm
            $project->name = $request->input('name');
            $project->description = $request->input('description');
            $project->content = $request->input('content');
            $project->category_id = $request->input('category_id');
            $project->active = $request->input('active');

            // Lưu dữ liệu sản phẩm
            $project->save();

            Session::flash('success', 'Update sản phẩm thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            Log::info($err->getMessage());
            return false;
        }
    }






    public function destroy($request)
    {
        $id = (int)$request->input('id');
        $project = Project::where('id', $id)->first();
        $project->delete();
        if ( $project) {
            $patch = str_replace('storage', 'public',    $project->thumb);  // xóa ảnh trong thư mục public
            Storage::delete($patch);
            $project->delete();

            $images = Image_Projects::where('project_id',  $project->id)->get();
            foreach ($images as $image) {
                if (File::exists(public_path("images/" . $image->name))) {
                    File::delete(public_path("images/" . $image->name));
                }
            }

            // Xóa các hình ảnh trong bảng Image_Products
            Image_Projects::where('project_id',  $project->id)->delete();
            return true;
        }
        return false;
    }

    public function show($id)
    {
        return Project::where('id', $id)->where('active', 1)->with('category')->firstOrFail();
    }
}
