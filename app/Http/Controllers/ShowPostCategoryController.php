<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ShowPostCategoryController extends Controller
{
    public function show(Category $category) {
    
      /* $posts=$category->posts()->where('category_id',[$category->category_id,$category->id]);*/
     /* $posts=array_merge($postsO,$postsChilds)->paginate();*/

       $posts=$category->posts();
       var_dump($posts);
       return view('landing',compact('posts'));
    }
    
}
