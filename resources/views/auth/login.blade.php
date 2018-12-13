

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Software</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<LINK REL="SHORTCUT ICON" href="public/images/mylogo.ico">
	<link rel="stylesheet" href="public/font/OpenSansCondensed-Light.ttf">
	<link rel="stylesheet" href="public/bootstrap-3.3.7-dist/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/styles.css">
	<link rel="stylesheet" type="text/css" href="public/css/slider.css">
	
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="public/vendor/animate/animate.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="public/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="public/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="public/css/loginutil.css">
		<link rel="stylesheet" type="text/css" href="public/css/login.css">
	<!--===============================================================================================-->
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
					<a class="navbar-brand" href="index"><img src="public/images/mylogo.ico" alt="">
						<b>Software</b>
					</a>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				
			</div>
		</nav>
	</header>

	<!-- Blance -->
		<div class="blance" style="padding: 30px 0; position: static;" > </div>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="public/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="{{ route('login') }}" method="POST" role="form">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<span class="login100-form-title">
						Member Login
					</span>
					@if($errors->has('errorlogin'))
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{$errors->first('errorlogin')}}
						</div>
					@endif
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="email" id="email" value="{{old('email')}}">
						@if($errors->has('email'))
							<p style="color:red">{{$errors->first('email')}}</p>
						@endif
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" id="password">
						@if($errors->has('password'))
							<p style="color:red">{{$errors->first('password')}}</p>
						@endif
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					{!! csrf_field() !!}
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
		

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="title-footer">
						About Us
					</div>

					<ul style="list-style: none; padding-left: 0px">
						<li><a href="#">Thông tin về chúng tôi</a></li>
						<li><a href="#">Bản quyền</a></li>
						<li><a href="#">Tin tức công ty</a></li>

					</ul>

				</div>

				<div class="col-md-4">
					<div class="title-footer">
						Thông tin liên hệ
					</div>

					<ul style="list-style: none; padding-left: 0px">
						<li><a href="#">email: </a></li>
						<li><a href="#">SĐT:</a></li>
						<li><a href="#">Facebook: </a></li>
					</ul>

				</div>

				<div class="col-md-4">
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
	</footer>

	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/sitecripts.js" ></script>
	<script type="text/javascript" src="public/js/slider.js"></script>
	<script>
        var indexCurrent = 1;      // Chỉ số hình đầu tiên hiển thị ở slide
        var loop = true;  // Bật lặp slide 
        var showbutton =true;  // Hiện 2 button điều hướng
        var duration = 4000;   // Thời gian chờ chuyển hình (tính theo đơn vị milisecond)

        initSlider();
    </script>
    
	<!--===============================================================================================-->
		<script src="public/vendor/bootstrap/js/popper.js"></script>
		<script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="public/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="public/vendor/tilt/tilt.jquery.min.js"></script>
		<script >
			$('.js-tilt').tilt({
				scale: 1.1
			})
		</script>
	<!--===============================================================================================-->
		<script src="public/js/main.js"></script>
</body>
</html>
