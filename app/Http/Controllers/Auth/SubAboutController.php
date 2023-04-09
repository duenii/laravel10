<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PostAbout;
use App\Models\SubAbout;
use Illuminate\Http\Request;

class SubAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subabouts = SubAbout::with('postabouts', 'users')->get();
        //return $posts;
        return view('auth.subabouts.index', compact('subabouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.subabouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $postabouts = PostAbout::all();

        SubAbout::create([
            'postabouts_id' => $postabouts->id,
            'title' => $request->title,
            'link' => $request->link,
            'content' => $request->content,             
            'users_id' => $user->id

        ]);

        return to_route('subabouts.index')->with('success', 'Create Data Update successfully');
    
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
        return view('auth.subabouts.edit', compact('subtabout'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
