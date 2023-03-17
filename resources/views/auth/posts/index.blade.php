@extends('layouts.home');

@section('tatle', 'Create Post News')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Form Post News </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">เพิ่มข้อมูล</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                    @if (count($posts) > 0 )

                        <h4 class="card-title">Table Post News</h4>
                     
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
                                    <td><img src="{{ asset($rowpost->gallery->image)}}" alt="images"></td>
                                    <td>{{ $rowpost->title }}</td>
                                    <td>{{ $rowpost->category->name }}</td>
                                    <td> {{ $rowpost->publish == 1 ? 'แสดง' : 'ไม่แสดง' }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-success"> <i class="mdi mdi-airplay"></i></a>
                                        <a href="" class="btn btn-sm btn-warning"><i class="mdi mdi-border-color"></i></a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="mdi mdi-archive"></i></a>
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