<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        $posts = $posts->reverse();
        return view('home', compact('posts'));
    }
}
