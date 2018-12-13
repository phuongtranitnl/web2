<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit application</title>

  <!-- Bootstrap core CSS -->
  <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('vendor/bootstrap/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{url('public/font-awesome-4.7.0/css/font-awesome.min.css')}}">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="{{url('admin')}}">Administrator</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Xin chao admin
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-comment" aria-hidden="true"></i> Message</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" style="padding: 120px 0px;">
    <form action="{{url('application/update')}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" onsubmit="return validateformProduct();">
      <div class="form-group">
        <legend style="color: #009688">Sửa Thông Tin Ứng Dụng</legend>

      </div>

      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" name="id" value="{{$editapp->IdApplication}}">

      <div class="form-group">
        <label for="idcategory" class="col-sm-2 control-label">Name Category: </label>
        <div class="col-sm-10">

          <select name="idcategory" id="idcategory" class="form-control">
           <?php

           foreach ($category as $key) {
           if($key->IdCategory == $editapp->IdCategory) {
           ?>

           <option selected="selected"  value="{{$key->IdCategory}}" >{{$key->NameCategory}}</option>

           <?php

         } else {

         ?>
         <option value="{{$key->IdCategory}}" >{{$key->NameCategory}}</option>

         <?php
       }
     }
     ?>

   </select>
   <span class="help-block"></span>
 </div>
</div>


<div class="form-group">
  <label for="idtype" class="col-sm-2 control-label">Name Type: </label>
  <div class="col-sm-10">
    <select name="idtype" id="idtype" class="form-control">
      <?php
      foreach ($type as $key) {

      if ($key->IdType == $editapp->IdType) {

      ?>

      <option selected="selected" value="{{$key->IdType}}">{{$key->NameType}}</option>

      <?php
    } else {

    ?>

    <option value="{{$key->IdType}}">{{$key->NameType}}</option>
    
    <?php
  }
}

?>
</select>
<span class="help-block"></span>
</div>
</div>

<div class="form-group">
  <label for="nameapp" class="col-sm-2 control-label">Name App </label>
  <div class="col-sm-10">
    <input value="{{$editapp->NameApp}}" maxlength="20" required="true" type="text" name="nameapp" id="nameapp" class="form-control">
    <span class="help-block"></span>
  </div>
</div>

<div class="form-group">
  <label for="developer" class="col-sm-2 control-label">Developer </label>
  <div class="col-sm-10">
    <input value="{{$editapp->Developer}}" required="true"  maxlength="15" type="text" name="developer" id="developer" class="form-control">
    <span class="help-block"></span>
  </div>
</div>

<div class="form-group">
  <label for="linkdownload" class="col-sm-2 control-label">Link download </label>
  <div class="col-sm-10">
    <input value="{{$editapp->LinkDownload}}" required="true" type="text" name="linkdownload" id="linkdownload" class="form-control">
    <span class="help-block"></span>
  </div>
</div>

<div class="form-group">
  <label for="version" class="col-sm-2 control-label"> Version </label>
  <div class="col-sm-10">
    <input value="{{$editapp->Version}}" required="true" type="number" name="version" id="version" class="form-control">
    <span class="help-block"></span>
  </div>
</div>


<div class="form-group">
  <label for="size" class="col-sm-2 control-label"> Size </label>
  <div class="col-sm-10">
    <input value="{{$editapp->Size}}" type="number" required="true" maxlength="5" name="size" id="size" class="form-control">
    <span class="help-block"></span>
  </div>
</div>

<div class="form-group">
  <label for="sortdescription" class="col-sm-2 control-label"> Sort Description </label>
  <div class="col-sm-10">
    <input value="{{$editapp->SortDescription}}" required="true" maxlength="25" type="text" name="sortdescription" id="sortdescription" class="form-control">
    <span class="help-block"></span>
  </div>
</div>

<div class="form-group">
  <label for="description" class="col-sm-2 control-label"> Description </label>
  <div class="col-sm-10">
    <input value="{{$editapp->Description}}" required="true"  type="text" name="description" id="description" class="form-control">
    <span class="help-block"></span>
  </div>
</div>



<div class="form-group">
  <label for="icon" class="col-sm-2 control-label">Icon </label>
  <div class="col-sm-10">
    <input type="file" id="icon" name="icon" class="form-control" style="opacity: 0.8">
    <span class="help-block"></span>
  </div>
</div>


<div class="form-group">
  <label for="image1" class="col-sm-2 control-label">Image 1 </label>
  <div class="col-sm-10">
    <input type="file" id="image1" name="image1" class="form-control" style="opacity: 0.8" >
    <span class="help-block"></span>
  </div>
</div>


<div class="form-group">
  <label for="image2" class="col-sm-2 control-label">Image 2 </label>
  <div class="col-sm-10">
    <input type="file" id="image2" name="image2" class="form-control" style="opacity: 0.8">
    <span class="help-block"></span>
  </div>
</div>


<div class="form-group">
  <label for="image3" class="col-sm-2 control-label">Image 3 </label>
  <div class="col-sm-10">
    <input type="file" id="image3" name="image3" class="form-control" style="opacity: 0.8">
    <span class="help-block"></span>
  </div>
</div>


<div class="form-group">
  <div class="col-sm-10 col-sm-offset-2">
    <button type="submit" class="btn btn-primary"> Lưu </button>
  </div>
</div>
</form>

</div>

<!-- Bootstrap core JavaScript -->
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
