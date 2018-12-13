<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

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
            <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Xin chao @if(Auth::check()) {{ Auth::user()->name }} @else Admin @endif
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-comment" aria-hidden="true"></i> Message</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
          </li>
          <li><a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
          </a></li>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </ul>
      </div>
    </div>
  </nav>


  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="/admin">Home Administrator</a></li>
        <li><a href="{{url('admin/application')}}">Application Table</a></li>
        <li><a href="{{url('admin/banner')}}">Banner Table</a></li>
        <li><a href="{{url('admin/category')}}">Category Table</a></li>
        <li><a href="{{url('admin/review')}}">Review Table</a></li>
        <li><a href="{{url('admin/type')}}">Type Table</a></li>
        <li><a href="{{url('admin/users')}}">User Table </a></li>
        
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">

        <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">All Table</a>

       


      <!-- Table -->
     @section('content')
        This is the master sidebar
     @show

    </div>
  </div>
</div>



<!-- Bootstrap core JavaScript -->
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Menu Toggle Script -->
<script>

  function showDetail() {
    
   
   // $test =  $(this).parent().parent().parent().next().html();
    $(this).parent().after("Xin chao");
    

  }


  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>

</body>

</html>
