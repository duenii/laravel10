<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::all();
        //return $Banners;
        return view('auth.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('auth.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            if($request->has('file')){
                $file = $request->file;
                $fileName = time(). $file->getClientOriginalName();
    
                $imgePath = public_path('/images/banners');
                $file->move($imgePath, $fileName);
    
            }
            Banner::create([
               
                'name' => $request->name,
                'status' => $request->status,
                'image' => $fileName
    
            ]);
        }
        catch(\Exception $ex){
            dd($ex->getMessage());

        }

       //$request->session()->flash('alert-success', 'Banner Created Successfully');
       //$request->session()->flash('status', 'Task was successful!');
       
       return to_route('banner.index');
       
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
        return view('edit', compact('Banners'));
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
    public function destroy(Banner $banner)
    {
        //dd($id);
         $banner->delete();
         return to_route('banner.index')->with('success', 'Banners Data deleted successfully');
    }
        
}
