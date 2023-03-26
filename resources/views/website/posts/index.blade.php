@extends('layouts.website')

@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <h1 class="text-capitalize mb-5 text-lg"> .....</h1>
  
            <!-- <ul class="list-inline breadcumb-nav">
              <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mb-5">
            <div class="blog-item">
              
             
                
    
                <div class="blog-item-content">
                  
                    <div class="blog-item-meta mb-3 mt-4">
                        <span class="text-muted text-capitalize mr-3"><i class="icofont-spreadsheet"></i>5 Comments</span>
                        <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> {{ date('d M Y'), strtotime($post->created_at)  }} </span>
                    </div> 
                    <h2 class="mt-3 mb-2"><a href="blog-single.html">{{ $post ? $post->title : ''}}</a></h2>

                    
                      {{-- <img src="{{ asset('/images/posts').'/'. $post->gallery->image }}" alt="" class="img-fluid"> --}}
                      
                    <p class="mb-4">{{ $post->gallery_id }}</p>
    
                    <p class="mb-4">{{ $post->content }}</p>
                    
    
                 
                </div>
               

            </div>
        
    
      </div>
    </div>
  </section>

  @endsection