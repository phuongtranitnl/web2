
@extends('master')
@section('title', 'software')
@section('content')

<div class="banner">
	<div class="container">
		<div class="wellcome" style="background: #2196f3; color: #fff; padding: 10px; font-size: 20px ">
			Chào mừng bạn đã quay trở lại !
		</div>

		<div class="slider-container">
			<div class="slider">
				@foreach ($banner as $key)
					@php
					$imageslide = 'public/images/'. $key->ImageBanner;
					@endphp
					<img src="{{url($imageslide)}}" class="img-responsive" title="{{ $key->ContentBanner  }}" />
				@endforeach
			
				<button type="button" onclick="getPrevImage()" class="btn" id="btnPrev">&lt;</button>
				<button type="button" onclick="getNextImage()" class="btn" id="btnNext">&gt;</button>
				<h1 id="titleSlider">Trang web chia sẽ ứng dụng hoàn toàn miễn phí</h1>
			</div>
		</div>
	</div>
</div>

<!-- Đề xuất -->
<div class="Suggestions">
	<div class="container">
		<div class="title-Suggesstion">
			Được đề xuất cho bạn
		</div>

		<div class="content-suggest">
			<div class="row">
				@foreach ($randomApp as $key)
				@php
					$chitiet = 'home/chitiet/'. $key->IdApplication;	
					$icon = 'public/images/' . $key->Icon;
				@endphp

				<div class="col-md-2 col-sm-4 col-xs-6">
					<a href="{{url($chitiet)}}">
						<div class="content-app">
							<div class="icon-app-sg" style="text-align: center;">
								<img src="{{url($icon)}}" alt="" class="img-responsive" style="max-width: 120px; max-height: 120px;">
							</div>
							<div class="name-app-sg" style="margin-top: 10px; font-weight: bold; font-size: 18px; color: #000">
								<?php  echo $key->NameApp ?>
							</div>
							<div class="author-app-sg" >
								<?php echo $key->Developer ?>
							</div>
						</div>
					</a>

				</div>
				@endforeach
	

			</div>

		</div>


	</div>

</div>

<!-- content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 leftbar">

				<div class="calendar">
					<div class="background-list">
						<div class="title-app" style="padding: 10px 0; margin-bottom: 5px; padding-left: 20px; font-size: 25px; color: red">
							Today
						</div>

						<div class="icon-time" style="padding-left: 20px; margin-bottom: 5px">
							<img src="{{url('public/images/morning.png')}}" alt="" width="25px;" height="25px;">
						</div>
						<div class="hello-time">

							<div class="loi-chao">
								Chào buổi sáng
							</div>

						</div>
						<div class="thu">
							Chủ nhật
						</div>
						<div class="date">
							26/02/2018
						</div>
					</div>

				</div>

				<!-- Top download -->
				<div class="new-app">
					<div class="background-list">
						<div class="title-app" style="padding: 10px 0; margin-bottom: 5px; padding-left: 20px; font-size: 25px; color: #008EFF">
							Top download
						</div>
						<ul style="list-style: none; padding-left: 20px;">
							@foreach ($topdown as $key)
								@php
								$chitiet = 'home/chitiet/'. $key->IdApplication;
								$icon = 'public/images/'.  $key->Icon;
								@endphp
								<li>
								<a href="{{url($chitiet)}}">
									<img src="{{url($icon)}}"  alt="{{ $key->NameApp }}" class="img-responsive" width="35px" height="35px" style="display: inline-block;"> <?php echo $key->NameApp ?>
								</a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>

			<!-- App -->
			<div class="col-md-9 ">
				<div class="row">
					@foreach ($data as $key)
					@php
						$chitiet = 'home/chitiet/'. $key->IdApplication;	
						$icon = 'public/images/'.  $key->Icon;
					@endphp

					<div class="col-md-4 col-sm-4">
						<a href="{{url($chitiet)}}">
							<div class="app">
								<div class="app-background">
									<div class="app-icon">
										<img  style="display: inline-block;" src="{{url($icon)}}"  alt="<?php echo $key->NameApp ?>" class="img-responsive">

									</div>

									<div class="app-detail">
										<div class="name-app" style="font-size: 20px;">
											<a href="{{url($chitiet)}}"> <?php echo $key->NameApp ?> </a>
										</div>
										<div class="detail">
											<div class="tile-tyle">
												Loại:
											</div>
											<div class="loai">
												<?php echo $key->NameType ?>
											</div>

											<div class="tile-tyle">
												Mô tả:
											</div>
											<div class="motangan">
												<?php echo $key->SortDescription ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Padding -->
<div class="padding">
	<div class="container">
		{!! $data->render() !!} 
	</div>
</div>


<!-- Danh mục -->
<div class="danh-muc">
	<div class="container">
		<div class="title-dm">
			Danh mục
		</div>

		<div class="noi-dung-dm">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">

					<ul class="list-dm">
						<li><a href="{{url('home/1')}}">Năng xuất</a></li>
						<li><a href="{{url('home/2')}}">Xã hội</a></li>
						<li><a href="{{url('home/3')}}">Tin tức</a></li>
						<li><a href="{{url('home/4')}}">Sức khỏe</a></li>

					</ul>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-6">

					<ul class="list-dm">
						<li><a href="{{url('home/5')}}">Bản đồ</a></li>
						<li><a href="{{url('home/6')}}">Các nhân hóa</a></li>
						<li><a href="{{url('home/7')}}">Sách</a></li>
						<li><a href="{{url('home/8')}}">Giải trí</a></li>

					</ul>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-6">
					<ul class="list-dm">
						<li><a href="{{url('home/9')}}">Ảnh </a></li>
						<li><a href="{{url('home/10')}}">Video</a></li>
						<li><a href="{{url('home/11')}}">Nhạc</a></li>
						<li><a href="{{url('home/12')}}">Bảo mật</a></li>

					</ul>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-6">
					<ul class="list-dm">
						<li><a href="{{url('home/13')}}">Giáo dục</a></li>
						<li><a href="{{url('home/14')}}">Thời tiết</a></li>
						<li><a href="{{url('home/15')}}">Mua sắm</a></li>
					</ul>

				</div>

			</div>
		</div>

		<div class="noi-dung-dm">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">

					<ul class="list-dm">
						<li><a href="{{url('home/16')}}">Chiến lược</a></li>
						<li><a href="{{url('home/17')}}">Thể thao</a></li>
						<li><a href="{{url('home/18')}}">Hành động</a></li>

					</ul>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-6">

					<ul class="list-dm">
						<li><a href="search?type=19">Sòng bạc</a></li>
						<li><a href="search?type=20">Mô phỏng</a></li>
						<li><a href="search?type=21">Cổ điển</a></li>

					</ul>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-6">
					<ul class="list-dm">
						<li><a href="search?type=22">Phiêu lưu </a></li>
						<li><a href="search?type=23">Bắn sung</a></li>

					</ul>

				</div>

				<div class="col-md-3 col-sm-3 col-xs-6" >
					<ul class="list-dm">
						<li><a href="search?type=24">Đố chữ</a></li>
						<li><a href="search?type=25">Nhập vai</a></li>
					</ul>

				</div>

			</div>
		</div>

	</div>
</div>


<!-- All store -->
<div class="other-store">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 store" style="text-align: center;">

				<a href="https://play.google.com/store">
					<img src="{{url('public/images/googleplay.png')}}" alt="google play" width="60px" height="60px">

					<div class="title-store">
						Google play
					</div>

				</a>

			</div>

			<div class="col-md-4 col-sm-4 store" style="text-align: center;">
				<a href="https://www.apple.com/ios/app-store/">

					<img src="{{url('public/images/appstore.png')}}" alt="google play" width="60px" height="60px">

					<div class="title-store">
						App store
					</div>

				</a>


			</div>

			<div class="col-md-4 col-sm-4 store" style="text-align: center;">

				<a href="https://www.microsoft.com/en-us/store/appsvnext/windows">
					<img src="{{url('public/images/Microsoft-icon.png')}}" alt="google play" width="60px" height="60px">

					<div class="title-store">
						Microsoft store
					</div>
				</a>


			</div>

		</div>

	</div>

</div>

@endsection