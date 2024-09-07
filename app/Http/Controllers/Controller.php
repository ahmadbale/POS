<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home(){
        return view('blog.home');
    }
    public function food(){
        return view('blog.food');
    }
    public function beauty(){
        return view('blog.beauty');
    }
    public function homecare(){
        return view('blog.homecare');
    }
    public function baby(){
        return view('blog.baby');
    }
    public function user($ID, $name){
        return view('blog.user')
                ->with('ID', $ID)
                ->with('name', $name);
    }
    public function transaction(){
        return view('blog.transaction');
    }
}
