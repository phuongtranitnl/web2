
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<LINK REL="SHORTCUT ICON" href="{{url('public/images/mylogo.png')}}">
	<link rel="stylesheet" href="{{url('public/font/OpenSansCondensed-Light.ttf')}}">
	<link rel="stylesheet" href="{{url('public/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('public/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('public/css/styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/css/slider.css')}}">
	<script type="text/javascript" src="{{url('public/js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{url('public/js/sitecripts.js')}}" ></script>


</head>

<body>

	<!-- Header -->
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{url('/')}}"><img width="40px" src="{{url('public/images/mylogo.png')}}" alt="">
						<b>Software</b></a>

					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- form tìm kiếm -->
							<form action="{{url('home/search')}}" method="get" class="navbar-form navbar-left" role="search" onsubmit="return validateForm()">
								<div class="form-group">
									<input type="text" name="key" id="search" class="form-control" placeholder="Nhập tên phần mềm">
								</div>
								<button type="submit" class="btn btn-default" style="color: #4284F3"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
							<!-- Các chỉ mục -->
							<li><a href="{{url('/')}}" style="color: darkgreen"><i class="fa fa-android" aria-hidden="true"></i> Phần mềm</a></li>
							<li><a href="{{ url('/games') }}" style="color: darkred"><i class="fa fa-gamepad"></i> Trò chơi</a></li>
							<li><a href="{{ url('/books') }}" style="color: darkblue"><i class="fa fa-book" aria-hidden="true"></i> Sách</a></li>
							<li><a href="{{ url('/cart') }}" style="color: #3B5998"><i class="fa fa-shopping-cart"></i> Cart</a></li>
							<li class="account"><a href="#"><i class="fa fa-user"></i> {{ (Auth::check())? Auth::user()->name : 'Tài khoản' }}</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>

				<div class="menu-account">
					<div class="background-menu">
						<div class="logo-menu" style="margin-bottom: 10px; text-align: center;">
							<img width="60px" src="{{url('public/images/mylogo.png')}}" alt="logo">
						</div>
						<ul>
								
							@if (Auth::check())
								{{-- <li><i style="color: #5751D9" class="fa fa-user-o" aria-hidden="true"></i> {{ Auth::user()->name }}</li> --}}
								<li><a href="#"><i style="color: #5751D9"  class="fa fa-info-circle" aria-hidden="true"></i> Thông tin tài khoản</a></li>
								{{-- <li><i style="color: #5751D9"   class="fa fa-sign-out" aria-hidden="true"></i><a href="{{ url('/logout') }}"> Đăng xuất</a> </li> --}}
								<li><a class="dropdown-item " href="{{ route('logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									<i style="color: #5751D9"   class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
								</a></li>
							 	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							@else
								<li><a href="{{ url('login') }}"><i style="color: #5751D9"   class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a> </li>
								<li><a href="{{ url('register') }}"><i style="color: #5751D9"   class="fa fa-user-plus" aria-hidden="true"></i> Đăng kí</a> </li>
							@endif
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<!-- Blance -->
		<div class="blance" style="padding: 30px 0; position: static;" > </div>

		@section('content')
		@show


		<!-- footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="title-footer">
							About Us
						</div>

						<ul style="list-style: none; padding-left: 0px">
							<li><a href="#">Thông tin về chúng tôi</a></li>
							<li><a href="#">Bản quyền</a></li>
							<li><a href="#">Tin tức công ty</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-4">
						<div class="title-footer">
							Thông tin liên hệ
						</div>
						<ul style="list-style: none; padding-left: 0px">
							<li><a href="#">email: softwareworld@ldc.com</a></li>
							<li><a href="#">SĐT: 012 444 4444</a></li>
							<li><a href="#">Facebook: software</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-4">
						<div class="title-footer">
							Trang web
						</div>
						<ul style="list-style: none; padding-left: 0px">
							<li><a href="#">Báo cáo lỗi </a></li>
							<li><a href="#">Hỗ trợ</a></li>
							<li><a href="#">Hồ sơ tài khoản </a></li>
						</ul>
					</div>
				</div>
			</div>
			@if(Auth::check())
				@if(checkPermission(['admin']))
				<div class="admin-link" style="text-align: center;">
					<a href="{{ url('admin') }}" style="color: darkred; font-size: 2em;">Admin control panel</a>
				</div>
				@endif
			@endif
		</footer>

		<div class="float-button">
			<i class="fa fa-arrow-up" aria-hidden="true"></i>

		</div>

		<script type="text/javascript" src="{{url('public/js/slider.js')}}"></script>
		<script>
        var indexCurrent = 1;
        var loop = true;
        var showbutton =true;
        var duration = 4000;

        initSlider();
    </script>

</body>
</html>
