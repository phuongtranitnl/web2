@extends('master')
@section('title','Giỏ hàng')
@section('content')

<div class="container">
{{-- <div class="area-search">
  <h3>Tìm kiếm thông tin trong giỏ hàng</h3>
  <div class="row">
    <div class="col-md-6">
      <form id="custom-search-input" action="{{url('cart/search')}}" method="get">
        <div class="input-group col-md-12">
          <input type="text" name= "key" class="form-control input-lg" placeholder="Nhập tên ứng dụng . . ." />
          <span class="input-group-btn">
            <button  class="btn btn-info btn-lg" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </span>
        </div>
      </form>
    </div>
  </div>
</div> --}}
   
   
   <!-- Table begin -->
   <div class="content-table">
   
     <div class="nameTB">
       {{-- <h2>Mã giỏ hàng: {{ (count($data))? $data->cartid : 'N/A' }}</h2> --}}
       {{-- <span>Ngày tạo: {{$data->created_at}}</span><br> 
       <span>Ngày cập nhật: {{$data->updated_at}}</span><br> --}}
     </div>
   
     {{-- <div class="tool">
       <a href="{{url('admin/application/create')}}" class="btn-tool"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Dữ Liệu</a>
   
     </div> --}}
   
     <!-- Table -->
   
     <table class="table table-bordered distance">
       <thead>
         <tr>
           <th>Mã sản phẩm</th>
           <th>Tên sản phẩm</th>
           <th>Giá</th>
           <th>Hành động</th>
         </tr>
       </thead>
       <tbody>
   
         @foreach ($data as $key)
   
           <tr>
             <td>{{$key->appid}}</td>
             <td>{{$key->NameApp}}</td>
             <td>{{ $key->price }}</td>
             
             <td>
              <div>
               <a href="{{ url('cart/'. $key->appid . '/delete') }}" style="background: #ff3d00;" class="btn-control"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa </a>
              </div>
    
              <div>
                {{-- <a style="background: #007aff;" class="btn-control" href="{{url($detail)}}" > <i class="fa fa-info-circle" aria-hidden="true"  ></i> Chi tiết </a> --}}
              </div>
    
            </td>
          </tr>
         @endforeach
  
   
     </tbody>
   </table>
   </div>
   <!-- Table end -->

    </div>
  </div>
</div>
</div>


<!-- Bootstrap core JavaScript -->
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<style>
  .distance {
    margin-top: 40px;
  }
</style>

@endsection