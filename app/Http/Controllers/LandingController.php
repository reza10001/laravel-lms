<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LandingController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->paginate(2);        
        return view('landing', compact('posts'));
    }
}
