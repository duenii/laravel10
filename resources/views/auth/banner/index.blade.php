@extends('layouts.home');



@section('content')

<div class="main-panel">
  <div class="content-wrapper">
   <div class="page-header">
      <h3 class="page-title"> Form Posts </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">เพิ่มข้อมูล</li>
        </ol>
      </nav>
    </div> 
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        @if($message = Session::get('success'))

        <div class="alert alert-success">
          {{ $message }}
        </div>

        @endif
        <div class="card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> Table Banner </h4>
              <table class="table">
                <thead>
                  <tr>
                    <th>รูปภาพ</th>
                    <th>ลิ้งค์ภายนอก</th>
                    <th>สถานะ</th>
                    <th>จัดการ</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($data_baner) > 0)
                  @foreach($data_baner as $row)
                  <tr>
                    <td><img src="{{ asset('images/banners/' . $row->image) }}" width="150" /></td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->status }}</td>
                    <td>
                      <form method="post" action="{{ route('banners.destroy', $row->id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('banners.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('banners.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                      </form>


                    </td>
                  </tr>
                  @endforeach

                  @else
                  <tr>
                    <td colspan="5" class="text-center">No Data Found</td>
                  </tr>
                </tbody>
                <@endif </table>
                  {!! $data_baner->links() !!}
            </div>
          </div>
          @endsection
        </div>
      </div>
      
    

    </div>
  </div>

</div>
