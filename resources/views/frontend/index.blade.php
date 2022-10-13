@extends('frontend.master')
@section('content')
        
		<!-- Home -->
		<div id="home" class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url({{asset('frontend/img/background02.jpg')}})"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper ">

				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-md-9">
							
								<h1 class="white-text text-center text-capitalize">Welcome To @if($settings->count() > 0){{$settings->restName}} @endif</h1>
								<h4 class="white-text text-center lead"> @if($settings->count() > 0){{$settings->homeSubtitle}} @endif</h4>
								<div class="text-center"><a href="{{route('web.stepOne')}}"><button class="main-button" style="background: #3555E3;">  Reservation Table</button></a></div>
							
						</div>
					</div>
				</div>

			</div>

		</div>
		<!-- /Home -->

		<!-- Menu -->
		<div id="menu" class="section" style="background: #2e0e55">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- section header -->
					<div class="section-header text-center">
						<h4 class="text-light">Menu</h4>
						<h2 class="text-light">The @if($settings->count() > 0){{$settings->restName}} @endif</h2>
					</div>
					<!-- /section header -->

					<!-- about content -->
					<div class="col-md-5">
						<h4 class="text-light">@if($settings->count() > 0){{$settings->menuTitle}} @endif </h4>
					</div>
					<!-- /menu content -->

					<!-- menu content -->
					<div class="col-md-7">
						<p class="text-light"> @if($settings->count() > 0){{$settings->menuDescription}} @endif </p>
					</div>
					<!-- /menu content -->

					<!-- Gallery Slider -->
					<div class="col-md-12">
						<div id="Gallery" class="owl-carousel owl-theme">

							<!-- single column -->
							     @if($menu->count() > 0)
						        @foreach ($menu->slice(0,1) as $item)
								<div class="Gallery-item">
				
									<div class="Gallery-img d-flex justify-content-center align-items-center " style="background-image:url({{asset($item->image)}})"> 
									       <div>
											 <h5 class="text-center" style="color: #0E0869"> <b>{{$item->name}}</b> </h5>
											<p class="text-center" style="color: #0E0869"> <b>${{$item->price}}</b> </p>
										   </div>
									</div>
								</div>
								@endforeach
								@endif
							<!-- single column -->

							<!-- single column -->
							<div class="Gallery-item">

								@if($menu->count() > 0)
								@foreach ($menu->slice(1,2) as $item)
									<!-- single image -->
								<div class="Gallery-img d-flex justify-content-center align-items-center" style="background-image:url({{asset($item->image)}})">
									 <div>
										<h5 class="text-center mt-5" style="color: #0E0869"> <b>{{$item->name}}</b> </h5>
									<p class="text-center" style="color: #0E0869"> <b>${{$item->price}}</b> </p>
									 </div>
								</div>

								@endforeach
								@endif
							</div>
							<!-- single column -->

							<!-- single column -->
							<div class="Gallery-item">

								@if($menu->count() > 0)
								@foreach ($menu->slice(3,2) as $item)
								<div class="item-column">
									<!-- single image -->
									<div class="Gallery-img d-flex justify-content-center align-items-center" style="background-image:url({{asset($item->image)}})">
										  <div>
											<h5 class="text-center mt-5" style="color: #0E0869"> <b>{{$item->name}}</b> </h5>
										<p class="text-center" style="color: #0E0869"> <b>${{$item->price}}</b> </p>
										  </div>
									</div>
								</div>
								@endforeach
                                @endif

							</div>
							<!-- /single column -->

						</div>
					</div>
					<!-- /Gallery Slider -->


				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /About -->


		

		<!-- Reservation -->
		
		<!-- /Reservation -->

		<!-- Events -->
		<div id="events" class="section" style="background: rgb(14, 8, 105);">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- section header -->
					<div class="section-header text-center">
						<h4 class="text-light">Upcoming Event</h4>
						<h2 class="text-light text-uppercase"> @if($settings->count() > 0){{$settings->eventName}} @endif </h2>
					</div>
					<!-- /section header -->

					<!-- single event -->
		@if($special->count() > 0)
		@foreach ($special as $item)
				<div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<img src="" alt="">
							<div class="event-day">
								<span> {{$item->StartDateTime->format("d")}} <br> {{$item->StartDateTime->format("M")}} </span>
							</div>
						</div>
						<div class="event-content">
							<p><i class="fa fa-clock-o"></i> {{$item->StartDateTime->format("H:i")}} - {{$item->EndTime->format("H:i")}}</p>
							<h3 class="text-light" > {{$item->subtitle}} </h3>
							<p class="text-light"> {{$item->description}}</p>
						</div>
					</div>
				</div>
		@endforeach
			@endif		 

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Events -->
@endsection