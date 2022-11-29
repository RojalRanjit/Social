<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    //
    public function dashboard()
    {
        $post = Post::all();//select * from posts
        dd(posts);
        return view('dashboard', compact('posts'));
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
}
