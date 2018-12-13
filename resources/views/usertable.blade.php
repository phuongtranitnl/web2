@extends('adminmaster')
@section('title', 'Bảng user')
@section('content')


<div class="area-search" style="margin: 20px 0">
 <h3>Tìm Kiếm Thông Tin Trong Bảng</h3>
 <div class="row">

  <div class="col-md-6">


    <form id="custom-search-input" action="{{url('user/search')}}" method="get">

      <div class="input-group col-md-12">

        <input type="text" name= "key" class="form-control input-lg" placeholder="Nhập username hoặc email muốn tìm" />

        <span class="input-group-btn">

          <button  class="btn btn-info btn-lg" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>

        </span>

      </div>

    </form>

  </div>
</div>
</div>



<!-- Table begin -->
<div class="content-table">

  <div class="nameTB">

    Bảng User

  </div>

  <div class="tool">
    <a href="{{ url('users/createuser') }}" class="btn-tool"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Dữ Liệu</a>

  </div>



  <table class="table table-bordered">
    <thead>
      <tr>
        <th>User id</th>
        <th>User name</th>
        <th>email</th>
        <th>User type</th>
        <th>Control</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($data as $key)
        <tr>
          <td> {{$key->id}}</td>
          <td> {{$key->name}}</td>
          <td> {{$key->email}}</td>
          <td> 
            @if($key->level==1)
            {{"Admin"}}
            @else
            {{"Thuong"}}
            @endif
          </td>
          <td>
            <div>
             <a href="{{ url('users/'.$key->id.'/edituser') }}" style="background: #00c853;" class="btn-control"> <i class="fa fa-pencil-square" aria-hidden="true"></i> Sửa</a>
           </div>
           <div>
            <a href="{{ url('users/'.$key->id.'/delete') }}" style="background: #ff3d00;" class="btn-control"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa </a>
          </div>

        </td>
      </tr>
      @endforeach
  </tbody>
</table>

  {!! $data->render() !!} 

</div>
<!-- Table end -->

@endsection
