<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $posts = Post::where('publish', 1)->get();
        $cat = Category::all();

        $banners = Banner::where('status', 1)->get();
        //dd( $post);
        return view('website.index', compact('posts','cat','banners'));
    }

    public function show(Post $post)
    {
        dd(compact('post'));
        //return view('website.posts.index',compact('post'));
    }

}
