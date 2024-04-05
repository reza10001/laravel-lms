<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;

class DashboardController extends Controller
{
    public function index()
    {
        $users_count = User::count();
        $categories_count = Category::count();
        $posts_count = Post::count();

        if (auth()->user()->role === 'author') {
            $posts_count = Post::where('user_id', auth()->user()->id)->count();        
        }

        return view('panel.index', compact(
            'users_count', 
            'posts_count',
            'categories_count',
        ));
    }
}
