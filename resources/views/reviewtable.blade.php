@extends('adminmaster')
@section('title', 'Bảng Review')
@section('content')

      <!-- Table -->
      <div class="content-table">

        <div class="nameTB">

          Bảng Review

        </div>

        <!-- Table -->

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Name Application</th>
              <th>Name User</th>
              <th>Review Date</th>
               <th>Content Review</th>
              <th>Control</th>

            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($data as $key) {
                
                $delete = 'review/'. $key->IdApplication. '/'. $key->IdUser. '/delete' ;
            ?>
            <tr>
              <td>{{$key->NameApp}}</td>
              <td>{{$key->name}}</td>
              <td>{{$key->ReviewDate}}</td>
              <td>{{$key->ContentReview}}</td>
              <td width="200">
                <div>
                  <a href="{{url($delete)}}" style="background: #ff3d00;" class="btn-control"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa </a>
                </div>
                  
              </td>
            </tr>
            <?php
              }

            ?>
            
            
           
           
          </tbody>
        </table>
         {!! $data->render() !!} 

      </div>
@endsection