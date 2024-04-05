<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ShowPostController extends Controller
{
    public function show(Post $post){
            $post->load('user');
        return view('post', compact('post'));
 
}
}
