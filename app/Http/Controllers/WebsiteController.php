<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $posts = Post::where('publish', 1)->get();
        $cat = Category::all();
        //dd( $post);
        return view('website.index', compact('posts','cat'));
    }

    public function show(Post $post)
    {
        dd(compact('post'));
        //return view('website.posts.index',compact('post'));
    }
}
