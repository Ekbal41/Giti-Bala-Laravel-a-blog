<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin');
    }

    public function dashboard(Request $request)

    {
        $user_id = auth()->user()->id;
        $allarticle = Post::where('user_id', $user_id)->get();
        return view('dashboard', compact('allarticle'));
    }
}
