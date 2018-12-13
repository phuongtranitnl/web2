
		@extends('master')
		@section('title', 'Search')
		@section('content')
		<div class="search">
			<div class="container">
				<div class="key-search">
					Kết tìm kiếm cho <?php echo $key ?>
				</div>

				<div class="content-search">
					<div class="total-result">
						Có tổng cộng <?php echo sizeof($total) ?> kết quả trả về
					</div>


				</div>

				<div class="row">
					<?php

					foreach ($data as $key) {
						$chitiet = 'home/chitiet/'. $key->IdApplication;	

						$image = 'public/images/'. $key->Icon;
						
					?>
					<div class="col-md-3 col-sm-4 col-xs-6 app-result">
						<a href="{{url($chitiet)}}">
							<div class="background-result">

								<div class="image-app">
									<img class="imge-resize" src="{{url($image)}}" alt="<?php echo $key->NameApp ?>">
								</div>

								<span class="name-app-search">
									<?php echo $key->NameApp ?>
								</span>
								<div class="name-company">
									<?php echo $key->Developer ?>
								</div>
							</div>	
						</a>
					</div>	

					<?php
						}
					?>	
				</div>

				{!! $data->render() !!}
				

			</div>
		</div>
		@endsection

		
		
	