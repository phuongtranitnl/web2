
@extends('master')
@section('title', 'chitiet')
@section('content')

<?php
$icon = 'public/images/'. $data->Icon;
$image1 = 'public/images/'. $data->Image1;
$image2 = 'public/images/'. $data->Image2;
$image3 = 'public/images/'. $data->Image3;

?>

<div class="chitiet-app border">
	<div class="container">
		
		<!-- Tong quan -->
		<div class="row">
			
			<div class="col-md-3 col-sm-3">
				<div class="icon-app">
					<img src="{{url($icon)}}" alt="<?php echo $data->NameApp ?>" width="128x" height="128px">

				</div>

			</div>

			<div class="col-md-3 col-sm-3">
				<div class="thongtin-cb">
					<div class="ten-ung-dung">
						<?php echo $data->NameApp ?>
					</div>

					<div class="cong-ty" style="color: #2196f3">
						<?php echo $data->Developer ?>
					</div>

					<div class="the-loai">
						<?php echo $data->NameType ?>
					</div>

					<div class="mo-ta-ngan">
						<?php echo $data->SortDescription ?>
					</div>
					<div class="voting">
						<a data-value="1">★</a>
						<a data-value="2">★</a>
						<a data-value="3">★</a>
						<a data-value="4">★</a>
						<a data-value="5">★</a>
					</div>
				</div>

			</div>

			<div class="col-md-3 col-sm-2">
				
			</div>

			<div class="col-md-3 col-sm-3">
				<div class="title-download">
					Tải Về
				</div>
				<div class="text-free">
					{{ ($data->price)? 'Giá: ' . $data->price : 'Miễn phí' }}
				</div>
				
				@if ($data->price)
					{{-- <form action="{{ URL::action('ProjectController@postcart', [$data->IdApplication]) }}">
						<input type="hidden" name="userid" value="{{ Auth::User()->id }}">
						<input type="hidden" name="appid" value="{{ $data->IdApplication }}">
						<input type="hidden" name="price" value="{{ $data->price }}">
						<input type="submit" value="Mua" class="nut-tai-ve">
						<span class="download_number speech-bubble">{{ $data->NumberDownload }}</span>
					</form> --}}
					<a href="{{ url('cart/'.$data->IdApplication) }}" style="text-decoration: none;">
						<span class="nut-tai-ve">{{ 'Mua' }}</span>
						<span class="download_number speech-bubble">{{ $data->NumberDownload }}</span>
					</a>
				@else
					<a href="{{ $data->LinkDownload }}" style="text-decoration: none;">
						<span class="nut-tai-ve">{{ 'Tải xuống' }}</span>
					</a>
					<span class="download_number speech-bubble">{{ $data->NumberDownload }}</span>
				@endif

				
				<style>
					.speech-bubble {
						position: relative;
						background: #82bcfd;
						border-radius: .4em;
						padding: 10px;
						margin: 10px;
					}

					.speech-bubble:after {
						content: '';
						position: absolute;
						left: 0;
						top: 50%;
						width: 0;
						height: 0;
						border: 0.625em solid transparent;
						border-right-color: #82bcfd;
						border-left: 0;
						border-bottom: 0;
						margin-top: -0.312em;
						margin-left: -0.625em;
					}
				</style>
			</div>

		</div>

		<!-- Mô tả -->
		<div class="mota-ungdung border">
			<div class="title-ct">
				Mô tả ứng dụng
			</div>

			<div class="noidung-mt">
				<?php echo $data->Description ?>
			</div>

		</div>

		<!-- Hình ảnh ứng dụng -->

		<div class="hinh-anh border">
			
			<div class="title-ct">
				Hình ảnh ứng dụng
			</div>

			<div class="danhsach-image">
				<div class="row">
					
					<div class="col-md-3 col-sm-3 col-xs-3" >
						<img src="{{url($image1)}}" alt="edg1" class="img-responsive">
					</div>
					@if (url($image2))
					<div class="col-md-3 col-sm-3 col-xs-3">
						<img src="{{ url($image2)}}" alt="edg2" class="img-responsive">
					</div>
					@endif
					@if (url($image3))
					<div class="col-md-3 col-sm-3 col-xs-3">
						<img src=" {{ url($image3) }} " alt="edg3" class="img-responsive">
					</div>
					@endif

				
				</div>
			</div>



		</div>

		<!-- Thông tin bố sung -->
		<div class="thong-tin-bs border">
			 <div class="title-ct">
				Thông tin bổ sung
			</div>

			<div class="row">
				<div class="col-md-3 col-sm-3">

					<div class="title-bs">
						Nhà xuất bản
					</div>

					<div class="content-bs">
						<?php echo $data->Developer ?>
					</div>


					<div class="title-bs">
						Được phát triển bởi
					</div>

					<div class="content-bs">
						<?php echo $data->Developer ?>
					</div>

				</div>

				<div class="col-md-3 col-sm-3">


					<div class="title-bs">
						Kích thước
					</div>

					<div class="content-bs">
						<?php  echo $data->Size ?> MB
					</div>

				</div>


				<div class="col-md-3 col-sm-3">

					<div class="title-bs">
						Phiên bản
					</div>

					<div class="content-bs">
						<?php echo $data->Version ?>
					</div>


					<div class="title-bs">
						Danh mục
					</div>

					<div class="content-bs">
						<?php echo $data->NameType ?>
					</div>

				</div>

			</div>

		</div>

		<div class="danh-gia border">
			<div class="title-ct">
				Đánh giá của người dùng
			</div>
			<button style="margin-bottom: 5px;"> <i class="fa fa-pencil"></i> Viết đánh giá</button>

			<form method="post" name="form-comment" action="{{URL::action('ReviewController@store')}}" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="userid" value="@if (Auth::check()) {{ Auth::user()->id }} @else 0 @endif">
				<input type="hidden" name="appid" value="{{ $data->IdApplication }}">
				<div class="form-group">
					<label for="edt_comment" >Nhập đánh giá của bạn </label>
					<div class="voting voting-input">
						<a data-value="1">★</a>
						<a data-value="2">★</a>
						<a data-value="3">★</a>
						<a data-value="4">★</a>
						<a data-value="5">★</a>
					</div>
					@php 
					$voting = 0;
					$comment = "";
					if (Auth::check()) {
						foreach ($reviewdata as $key) {
							if ($key->IdUser == Auth::user()->id) {
								$voting = $key->voting;
								$comment = $key->ContentReview;
							}
						}
					}
					@endphp
					
					<input type="hidden" name="voting-value" id="input-voting" value="{{ $voting }}" class="form-control">
					<input  type="text" name="user-comment" id="edt_comment" class="form-control" 
					value="{{ $comment }}">
					<span class="help-block"></span>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Đăng</button>
				</div>
			</form>

			@foreach ($reviewdata as $key)
			<div class="border border-primary">
				<div>
					<span>@if ( $key->IdUser  == 0) Guest @else Người dùng: {{ $key->name }} @endif</span> - 
					<span>{{ $key->ReviewDate }}</span>
					<span>@for ($i = 0; $i < $key->voting; $i++)★@endfor</span>
				</div>
				<div>
					{{ $key->ContentReview }}
				</div>	
			</div>
			
			@endforeach

		</div>


	</div>

</div>
<script>
	$(document).ready(function() {

		// highlight star on page up
		var len = $('#input-voting').val();
		$('.voting-input a').css('color', 'grey');
		for (var i = 0; i < len; i++) {
			$('.voting-input a').eq(i).css('color', 'darkorange');
		}
			
		// highlight star on click
		$(".voting-input a").click(function() {
			$('.voting-input a').css('color', 'grey');
			for (var i = 0; i < $(this).index() + 1; i++) {
				$('.voting-input a').eq(i).css('color', 'darkorange');
			}
			$('#input-voting').val($(this).attr('data-value'));
		});
	});
</script>
<style>
	.voting a {
		font-size: 2em;
		text-decoration: none;
		color: gray;
	}
	.voting a:hover {
		cursor: pointer;
	}
</style>

@endsection