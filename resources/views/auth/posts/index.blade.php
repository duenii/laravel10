@extends('layouts.home')

@section('tatle', 'Create Post News')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Form Post News </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('posts.create')}}">เพิ่มข้อมูล</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                    @if (count($posts) > 0 )

                        <h4 class="card-title">Table Post News</h4>
                        @if($message = Session::get('success'))

                        <div class="alert alert-success">
                          {{ $message }}
                        </div>
          
                        @endif
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>image</th>
                                    <th>title</th>
                                    <th>type</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $rowpost)
                                <tr>
                                    <td><img src="{{ asset('/images/posts').'/'. $rowpost->gallery->image }}" alt="images"></td>
                                    <td>{{ $rowpost->title }}</td>
                                    <td>{{ $rowpost->category->name }}</td>
                                    <td> {{ $rowpost->publish == 1 ? 'แสดง' : 'ไม่แสดง' }}</td>
                                    <td>
                                        <form method="post" action="{{ route('posts.destroy', $rowpost->id) }}">
                                            <a href="{{ route('posts.edit', $rowpost->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            @csrf
                                            
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger btn-sm" value="DELETE" />
                                          </form>
                                    </td>
                                </tr>
                               
                                @endforeach
                            </tbody>
                        </table>
                           
                        @else
                        <h3 class="text-center text0"> No post found</h3>


                        @endif
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection