@extends('layouts.main')

@section('content')

	<section class="p-0">
		<div class="swiper-container height-600-responsive">
			<div class="swiper-wrapper">
				<!-- slide 1-->
				<div class=" bg-overlay-dark-2 why-us-bg" style="background-image:url({{asset('public/images/why-us.jpg')}}); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
								<h2 class="animated fadeInUp dealy-500 display-6 display-md-4 display-lg-3 font-weight-bold text-white">We are creating smart websites.</h2>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- Slider buttons -->

		</div>
	</section>

    	<section>
		<div class="container h-100">
			<div class="row">
				<div class="col-md-12 col-lg-8 align-self-center ">
					<div class="title text-left">
						<span class="pre-title">We are the Wizixo!</span>
						<h2>We are a full service <span class="text-primary">Creative agency</span> that makes good ideas come to life.</h2>
						<p class="mb-0">We are an insight and behaviour driven creative marketing agency. A Full package Digital Creative Agency Specializing in: Video Production, Web Design, Branding, Brand Strategy, Content Marketing and Aerial Cinematography. </p>

					</div>
				</div>
			</div>
			<!-- row end -->

			<div class="row mt-4">
				<!-- feature 1 -->
				<div class="col-md-4">
					<div class="feature-box h-100 icon-primary">
						<div class="feature-box-icon"><i class="ti-settings"></i></div>
						<h3 class="feature-box-title">Unlimited Helpers</h3>
						<p class="feature-box-desc">We have vast collection of sed do eiusmod tempor incididunt ut labore et <strong>Dolore magna aliqua.</strong> </p>
					</div>
				</div>
				<!-- feature 2 -->
				<div class="col-md-4">
					<div class="feature-box h-100 icon-primary">
						<div class="feature-box-icon"><i class="ti-support"></i></div>
						<h3 class="feature-box-title">Friendly Support</h3>
						<p class="feature-box-desc">With this template you can incididunt ut labore et dolore magna aliqua ad minim veniam quis ullamco.</p>
					</div>
				</div>
				<!-- feature 3 -->
				<div class="col-md-4">
					<div class="feature-box h-100 icon-primary">
						<div class="feature-box-icon"><i class="ti-bolt"></i></div>
						<h3 class="feature-box-title">Instant Solutions</h3>
						<p class="feature-box-desc">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <strong>$255.00</strong>dolor in reprehe. </p>
					</div>
				</div>
			</div>
			<!-- row end -->
		</div>
	</section>

    	<section class="">
		<div class="container">
			<div class="row">
				<!-- left -->
				<div class="col-md-6 pr-lg-5">
					<!-- content -->
					<div class="mt-5 mt-md-0">
						<p class="bg-dark small text-white border-radius-3 px-2 py-0 mb-2 d-inline-block">Marketing</p>
						<h2 class="h1 font-weight-bold">Engaging, purposeful, and creative.</h2>
						<div class="d-flex mt-3">
							<h6 class="display-1 opacity-2 mr-3 align-self-start">01</h6>
							<div class="align-self-start">
								<p>A thing that looks beautiful and attractive always grabs eyeballs. The  challenge before companies in todays world is to make their products and services appealing to everyone. thing that looks beautiful and attractive always grabs eyeballs.</p>
								<a class="primary-hover" href="#">Read More <i class="fa fa-long-arrow-right ml-1"></i></a>
							</div>
						</div>
					</div>
					<!-- image -->
					<img class="border-radius-3 mt-4 shadow-hover up-on-hover" src="{{asset('public/images/7.jpg')}}" alt="">
				</div>

				<!-- right -->
				<div class="col-md-6 pl-lg-5 mt-5 mt-md-0">
					<!-- image -->
					<img class="border-radius-3 mb-4 shadow-hover up-on-hover" src="{{asset('public/images/pic2.jpg')}}" alt="">
					<!-- content -->
					<div>
						<p class="bg-dark small text-white border-radius-3 px-2 py-0 mb-2 d-inline-block">Advertising</p>
						<h2 class="h1 font-weight-bold">Expect nothing less than perfect.</h2>
						<div class="d-flex mt-3">
							<h6 class="display-1 opacity-2 mr-3 align-self-start">02</h6>
							<div class="align-self-start">
								<p>We have a strong foundation built on legacy and emerging technologies, including excellent track record of on-time deliveries. We are emerging as one of the most promising private talent sourcing and management firms in the world.</p>
								<a class="primary-hover" href="#">Read More <i class="fa fa-long-arrow-right ml-1"></i></a>
							</div>
						</div>
					</div>
				</div>

                <!-- left -->
				<div class="col-md-6 pr-lg-5">
					<!-- content -->
					<div class="mt-5 mt-md-0">
						<p class="bg-dark small text-white border-radius-3 px-2 py-0 mb-2 d-inline-block">Marketing</p>
						<h2 class="h1 font-weight-bold">Engaging, purposeful, and creative.</h2>
						<div class="d-flex mt-3">
							<h6 class="display-1 opacity-2 mr-3 align-self-start">01</h6>
							<div class="align-self-start">
								<p>A thing that looks beautiful and attractive always grabs eyeballs. The  challenge before companies in todays world is to make their products and services appealing to everyone. thing that looks beautiful and attractive always grabs eyeballs.</p>
								<a class="primary-hover" href="#">Read More <i class="fa fa-long-arrow-right ml-1"></i></a>
							</div>
						</div>
					</div>
					<!-- image -->
					<img class="border-radius-3 mt-4 shadow-hover up-on-hover" src="{{asset('public/images/11.jpg')}}" alt="">
				</div>

				<!-- right -->
				<div class="col-md-6 pl-lg-5 mt-5 mt-md-0">
					<!-- image -->
					<img class="border-radius-3 mb-4 shadow-hover up-on-hover" src="{{asset('public/images/10.jpg')}}" alt="">
					<!-- content -->
					<div>
						<p class="bg-dark small text-white border-radius-3 px-2 py-0 mb-2 d-inline-block">Advertising</p>
						<h2 class="h1 font-weight-bold">Expect nothing less than perfect.</h2>
						<div class="d-flex mt-3">
							<h6 class="display-1 opacity-2 mr-3 align-self-start">02</h6>
							<div class="align-self-start">
								<p>We have a strong foundation built on legacy and emerging technologies, including excellent track record of on-time deliveries. We are emerging as one of the most promising private talent sourcing and management firms in the world.</p>
								<a class="primary-hover" href="#">Read More <i class="fa fa-long-arrow-right ml-1"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    @include('partials.action-center')
@endsection
