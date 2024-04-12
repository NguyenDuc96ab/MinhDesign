<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebMainController extends Controller
{
    public function home()
    {
      

        return view('web.home', [
            'title' => "Trang home",
            
        ]);
    }
}
