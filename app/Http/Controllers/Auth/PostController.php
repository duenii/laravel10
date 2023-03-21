<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Post\CreateRequest;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('gallery', 'category')->get();
        //return $posts;
        return view('auth.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = Category::all();
        return view('auth.posts.create', ['category' => $cat]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        try{
            if($request->has('file')){
                $file = $request->file;
                $fileName = time(). $file->getClientOriginalName();
    
                $imgePath = public_path('/images/posts');
                $file->move($imgePath, $fileName);
    
                $gellery = Gallery::create([
                    'image' => $fileName
                ]);
            }
            Post::create([
                'category_id' =>$request->category,
                'title' => $request->title,
                'content' => $request->content,
                'publish' => $request->publish,
                'gallery_id' => $gellery->id
    
            ]);
        }
        catch(\Exception $ex){
            //dd($ex->getMessage());

        }

       //$request->session()->flash('alert-success', 'Post Created Successfully');
       //$request->session()->flash('status', 'Task was successful!');
       
       return to_route('posts.index');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')->with('success', 'posts Data deleted successfully');
    }
}
