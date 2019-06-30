@extends('layouts.main')

@section('content')
<div class="innerpage-banner left bg-overlay-dark-5 py-7 parallax-bg" data-jarallax-video="https://www.youtube.com/watch?v=dRj5Xfjh7Dk">
		<div class="container py-7">
			<div class="row all-text-white pb-7">
				<div class="col-12 col-lg-8">
					<h1 class="innerpage-title">UI/UX Design</h1>
					<h6 class="subtitle mb-4">We are a creative studio focusing on branding & web design</h6>
				</div>
			</div>
		</div>
		<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path id="wave-one" d=""/></svg>
		<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path id="wave-two" d=""/></svg>
	</div>


    <section class="service-block pos-relative ux-hero">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 align-self-center">
					<div class="title text-left pb-4 p-lg-0 ">
                        <h2 class="text-primary pt-5">We Think Mobile First.</h2>
                        <h2 class="h2 font-weight-light service-title-quote service-subtitle">Creating high impact, result driven and user centered applications to elevate your business.</h2>

						<p class="fs-15">We ship rich experiences to the small screens, which translates into the success of your business, ease of operations and engagement of the consumers with our exceptionally deep understanding of user experience and mobile technology. We work with multiple ecosystems in order to create maximum impact to your end-users.</p>

					</div>
				</div>
				<div class="col-md-10 col-lg-6 mx-md-auto align-self-center text-center">

				</div>
			</div>
		</div>
         <img class="img-fluid ux-hero-image" src="{{asset('public/images/ui-ux-home.png')}}" />
	</section>


<section class="process-advance mt-7">
		<div class="container">
            <div class="row mb-5">
				<div class="col-12 col-lg-12">
					<div class="title">
						<h2>We help you create Apps for</h2>
						<p class="mb-0">The real challenge before companies in today's world is to make their products and services appealing to everyone.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- process 1 -->
				<div class="col-sm-6 col-lg-3 text-center mb-4">
					<div class="process-border"><span class="process-number bg-grad border-right">01</span></div>
					<h5 class="my-3">Planning</h5>
					<p>The initial step after getting the project is to discuss and plan the skills</p>
				</div>
				<!-- process 1 -->
				<div class="col-sm-6 col-lg-3 text-center mb-4">
					<div class="process-border"><span class="process-number bg-grad border-left border-right">02</span></div>
					<h5 class="my-3">Designing</h5>
					<p>After getting the project requirement, we start working on design</p>
				</div>
				<!-- process 1 -->
				<div class="col-sm-6 col-lg-3 text-center mb-4">
					<div class="process-border"><span class="process-number bg-grad border-left border-right">03</span></div>
					<h5 class="my-3">Integration</h5>
					<p>We test each individual activity and integrate them all together in a process.</p>
				</div>
				<!-- process 1 -->
				<div class="col-sm-6 col-lg-3 text-center mb-4">
					<div class="process-border"><span class="process-number bg-grad border-left">04</span></div>
					<h5 class="my-3">Delivery</h5>
					<p>We deliver the project and upload it to their web server after support maintenance.</p>
				</div>
			</div>
		</div>
	</section>


<section class="service-block">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 align-self-center">
					<div class="title text-left pb-4 p-lg-0 ">
						<h2>Our services reflect our knowledge and in <span class="text-primary"> depth understanding</span> of the project</h2>
						<p>Wizixo; an innovative Internet marketing solutions company that offers comprehensive web development, SMO services, SEO strategies and various other types of Internet marketing related services. </p>
						<div class="row">
							<div class="col-6">
								<ul class="list-group list-group-borderless list-group-icon-primary-bg">
									<li class="list-group-item"><i class="fa fa-check"></i>Up to 10 users monthly</li>
									<li class="list-group-item"><i class="fa fa-check"></i>Unlimited updates</li>
									<li class="list-group-item"><i class="fa fa-check"></i>Free host &amp; domain included</li>
								</ul>
							</div>
							<div class="col-6">
								<ul class="list-group list-group-borderless list-group-icon-primary-bg">
									<li class="list-group-item"><i class="fa fa-check"></i>24/7 dedicated Support </li>
									<li class="list-group-item"><i class="fa fa-check"></i>Unlimited Storage usage</li>
									<li class="list-group-item"><i class="fa fa-check"></i>Up to 10 user register</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-lg-6 mx-md-auto align-self-center">
					<img class="img-fluid" src="{{asset('pulic/assets/images/service/01.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</section>

@include('partials.get-quote-action')


@endsection
