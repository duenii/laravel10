@extends('layouts.home')

@section('tatle', 'Create Post About')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Form Post About </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('subabouts.index')}}">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('subabouts.create')}}">เพิ่มข้อมูล</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                    @if (count($subabouts) > 0 )

                        <h4 class="card-title">Table Post About</h4>
                        @if($message = Session::get('success'))
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @elseif ($message = Session::get('warning'))
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>

                        @elseif($message = Session::get('danger'))
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>

                        @endif
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>title</th>
                                    <th>link</th>
                                    <th>Add SubMenu</th>
                                    <th>user</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subabouts as $rowsub)
                                <tr>
                                    <td>{{ $rowsub->id }}</td>
                                    <td>{{ $rowsub->title }}</td>                                  
                                    <td> 
                                     @if(!$rowsub->link == '')
                                        <a href="{{ $rowsub->link }}" class="btn btn-outline-info btn-sm"> <i class="mdi mdi-link-variant"></i> link</a>
                                     @endif
                                    </td>
                                    <td> <a href="#" class="btn btn-gradient-danger  btn-sm"> <i class="mdi mdi-library-plus"></i> submenu</a></td>
                                    <td>{{ $rowsub->users->name }}</td>
                                    <td>
                                        <form method="post" action="{{ route('postabouts.destroy', $rowsub->id) }}">
                                            <a href="{{ route('postabouts.edit', $rowsub->id) }}" class="btn btn-warning btn-sm btn-fw">Edit</a>
                                            @csrf
                                            
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger btn-sm btn-fw" value="DELETE" />
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