<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_baner = Banner::latest()->paginate(5);

        return view('auth.banner.index', compact('data_baner'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'status'         =>  'required|email|unique:banners',
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images/banners'), $file_name);

        $banner = new Banner;

        $banner->name = $request->name;
        $banner->status = $request->status;
        $banner->image = $file_name;

        $banner->save();

        return to_route('banners.index')->with('success', 'Banner Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        return view('show', compact('data_baner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('edit', compact('data_baner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'name'      =>  'required',
            'status'     =>  'required|email',
            'image'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $image = $request->hidden_image;

        if($request->image != '')
        {
            $file_name = time() . '.' . request()->image->getClientOriginalExtension();

            request()->image->move(public_path('images/banners'), $file_name);
        }

        $banner = Banner::find($request->hidden_id);

        $banner->name = $request->name;
        $banner->status = $request->status;
        $banner->image = $file_name;

        $banner->save();

        return to_route('banners.index')->with('success', 'Banner Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return to_route('banners.index')->with('success', 'banners Data deleted successfully');
    }
}
