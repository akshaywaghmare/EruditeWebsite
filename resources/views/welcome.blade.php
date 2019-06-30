@extends('layouts.main')


@section('page_title') {{ $page_title}} @endsection

@section('content')

<!-- =======================
	Main Banner -->
	<section class="p-0 py-5 bg-grad pattern-overlay-2">
		<div class="container">
			<div class="row py-0 py-md-5 justify-content-between align-items-center">
				<div class="col-sm-12 col-lg-12 all-text-white my-5 mt-md-0">
					<div class="hero-content text-center py-0 ">
						<h2 class="display-5 display-lg-4 mb-5 font-weight-normal">We Discover, Design & Build Digital Experiences to Help Brands Grow</h2>
						<p class="mb-4 display-8 font-weight-normal">Providing Integrated Technology Services Across Mobile, Web & Cloud to <br> Global Startups & Fortune 500 Companies</p>
						<a href="#" class="btn btn-white mr-3">Explore Work</a>
					</div>
				</div>

			</div>
		</div>
		<div class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n3">
			<svg width="100%" height="150" viewBox="0 0 500 150" preserveAspectRatio="none">
				<path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z" fill="white" />
			</svg>
		</div>
	</section>
	<!-- =======================
	Main banner -->

    <!-- =======================
	client -->
	<section class="client p-0 mt-5 mt-md-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-grab" data-arrow="false" data-dots="false" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-sm="3" data-items-xs="2">
						<div class="item"><img class="w-75" src="public/assets/images/clients/01.png" alt=""></div>
						<div class="item"><img class="w-75" src="public/assets/images/clients/02.png" alt=""></div>
						<div class="item"><img class="w-75" src="public/assets/images/clients/03.png" alt=""></div>
						<div class="item"><img class="w-75" src="public/assets/images/clients/04.png" alt=""></div>
						<div class="item"><img class="w-75" src="public/assets/images/clients/05.png" alt=""></div>
						<div class="item"><img class="w-75" src="public/assets/images/clients/06.png" alt=""></div>
						<div class="item"><img class="w-75" src="public/assets/images/clients/07.png" alt=""></div>
						<div class="item"><img class="w-75" src="public/assets/images/clients/08.png" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
	client -->

	<div class="divider mt-5"></div>

	<section class="pricing-page pricing pricing-center">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto text-center mb-5">
					<h2 class="h1 font-weight-bold">Engaging, purposeful, and creative</h2>
					<h5>At Wizixo, we transform your perception into an excellent website</h5>
					<p>Remarkably to continuing in surrounded diminution on. In unfeeling existence objection immediate repulsive on he in. Imprudence comparison uncommonly me he difficulty diminution resolution.</p>
				</div>
			</div>
			<div class="row">
				<!-- pricing item -->
                <div class="col-md-4 mb-5">
					<a href="{{route('product-development')}}">
                        <div class="pricing-box icon-grad h-100 home-service-box">
                            <div class="feature-box-icon"><i class="ti-rocket"></i></div>
                            <h3 class="feature-box-title">Product Development</h3>
                            <p>Content Management System, Installation & Setup, Search engine friendly and Social media integration</p>
					    </div>
                    </a>
				</div>
				<div class="col-md-4 mb-5">
					<a href="{{route('website-development')}}">
                        <div class="pricing-box icon-grad h-100 home-service-box">
                        <div class="feature-box-icon"><i class="ti-desktop"></i></div>
						<h3 class="feature-box-title">Web Development</h3>
						<p>Content Management System, Installation & Setup, Search engine friendly and Social media integration</p>
					</div>
                    </a>
				</div>
                <div class="col-md-4 mb-5">
				  <a href="{{route('mobile-development')}}">
                    <div class="pricing-box icon-grad h-100 home-service-box">
                        <div class="feature-box-icon"><i class="ti-mobile"></i></div>
						<h3 class="feature-box-title">Mobile  Development</h3>
						<p>Content Management System, Installation & Setup, Search engine friendly and Social media integration</p>
					</div>
                  </a>
				</div>
                <div class="col-md-4 mb-5">
					<a href="{{route('custom-software-development')}}">
                        <div class="pricing-box icon-grad h-100 home-service-box">
                            <div class="feature-box-icon"><i class="ti-wand"></i></div>
                            <h3 class="feature-box-title">Custom Software Development</h3>
                            <p>Content Management System, Installation & Setup, Search engine friendly and Social media integration</p>
                        </div>
                    </a>
				</div>
                <div class="col-md-4 mb-5">
					<a href="{{route('ui-ux-design')}}">
                        <div class="pricing-box icon-grad h-100 home-service-box">
                            <div class="feature-box-icon"><i class="ti-palette"></i></div>
                            <h3 class="feature-box-title">UI UX Design</h3>
                            <p>Content Management System, Installation & Setup, Search engine friendly and Social media integration</p>
                        </div>
                    </a>
				</div>

                <div class="col-md-4 mb-5">
					<a href="{{route('digital-strategy')}}">
                        <div class="pricing-box icon-grad h-100 home-service-box">
                            <div class="feature-box-icon"><i class="ti-announcement"></i></div>
                            <h3 class="feature-box-title">Strategy & Innovation</h3>
                            <p>Content Management System, Installation & Setup, Search engine friendly and Social media integration</p>
                        </div>
                    </a>
				</div>

			</div>
			<!-- pricing enterprise -->
			{{--  <div class="row">
				<div class="col-sm-12 mt-2 mt-md-4">
					<div class="text-center">
						<h4>Looking for enterprise plan? We offer discounts for large teams! </h4>
						<p class="m-0">Everything you need to be everywhere your customers are, wrapped up in one pretty package—at a special price.</p>
						<a class="btn btn-outline-light mt-4" href="#!">Order now!</a>
					</div>
				</div>
			</div>  --}}

		</div>
	</section>

{{--
<section class="py-4">
		<div class="container">
			<div class="d-block d-md-flex bg-primary p-4 p-sm-5 all-text-white border-radius-3 pattern-overlay-1">
				<div class="align-self-center text-center text-md-left">
					<h3>Crafting visually stunning memorable experiences for web.</h3>
					<p class="m-0">We provide digital transformation solutions, enabling companies to make their visions reality.</p>
				</div>
				<div class="mt-3 mt-md-0 text-center text-md-right ml-md-auto align-self-center">
					<button class="btn btn-dark mb-0">Learn more!</button>
				</div>
			</div>
		</div>
	</section>  --}}




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
					<img class="border-radius-3 mt-4 shadow-hover up-on-hover" src="public/images/pic1.jpg" alt="">
				</div>

				<!-- right -->
				<div class="col-md-6 pl-lg-5 mt-5 mt-md-0">
					<!-- image -->
					<img class="border-radius-3 mb-4 shadow-hover up-on-hover" src="public/images/pic2.jpg" alt="">
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



 @include('partials.get-quote-action')




	<section>
		<div class="container">
			<div class="row justify-content-between align-items-center mb-7">
				<!-- left -->
				<div class="col-md-6">
					<h2 class="h1">We’re good,<br/>Just ask our moms.</h2>
					<h5 class="mt-4">Crafting visually stunning memorable experiences for web and interfaces.</h5>
					<p>We have built a robust team, which is capable of delivering best quality of services when it comes to website-design, Website development, mobile application, content and digital marketing</p>
					<a href="#" class="btn btn-grad">Purchase Now!</a>
				</div>
				<!-- right -->
				<div class="col-md-6">
					<div class="row mt-4 mt-md-0">
						<div class="col-7 pl-5 pr-2 mb-3">
							<img class="border-radius-3 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s" src="public/assets/images/service/02.jpg" alt="">
						</div>
						<div class="col-5 align-self-end pl-2 mb-3">
							<img class="border-radius-3 wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s" src="public/assets/images/service/04.jpg" alt="">
						</div>
						<div class="col-5 offset-1 pl-5 pr-2 mb-3">
							<img class="border-radius-3 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" src="public/assets/images/service/03.jpg" alt="">
						</div>
						<div class="col-5 px-2 mb-3">
							<img class="border-radius-3 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.6s" src="public/assets/images/service/01.jpg" alt="">
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-3 mb-5 mt-md-5">
				<div class="col-sm-6 col-lg-3 mt-5 mt-lg-0">
					<h6 class="text-primary">01</h6>
					<h4 class="mb-2">Solution Defining</h4>
					<p>We help our customers better manage their web presence in order to achieve greater success online.</p>
				</div>
				<div class="col-sm-6 col-lg-3 mt-5 mt-lg-0">
					<h6 class="text-primary">02</h6>
					<h4 class="mb-2">Premium Plugins</h4>
					<p>The real challenge before companies in today's world is to make their products appealing to everyone.</p>
				</div>
				<div class="col-sm-6 col-lg-3 mt-5 mt-lg-0">
					<h6 class="text-primary">03</h6>
					<h4 class="mb-2">High Performance</h4>
					<p>With us at your side, you will find the IT solution to achieve your strategic and financial goals.</p>
				</div>
				<div class="col-sm-6 col-lg-3 mt-5 mt-lg-0">
					<h6 class="text-primary">04</h6>
					<h4 class="mb-2">Budget accounting</h4>
					<p>We are emerging as one of the most promising private talent sourcing and management firms in the world.</p>
				</div>
			</div>


		</div>
	</section>
	<!-- =======================
	about us -->



 @include('partials.action-center')
@endsection
