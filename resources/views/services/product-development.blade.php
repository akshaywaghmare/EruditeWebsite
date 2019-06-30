@extends('layouts.main')

@section('content')
<div class=" center  py-7 product-dev-bg" style="background:url({{asset('public/images/home-promo.png')}});">
		<div class="container">
			<div class="row all-text-black">
				<div class="col-md-6 text-left ">
					<h1 class=" product-title">Product Design & Development</h1>
					<h6 class="subtitle">We transform your perception into an excellent website</h6>
				</div>
			</div>
		</div>
	</div>

	<section class="pricing-page pricing pricing-center mt-5 pb-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<h2 class="h2 font-weight-light service-title-quote text-primary">We use design thinking principles to build meaningful solutions for the toughest challenges.</h2>
					<h5>At Wizixo, we transform your perception into an excellent website</h5>
				</div>
			</div>


		</div>
	</section>


    <section class="service-block">
		<div class="container">
			<div class="row ">
				<div class="col-sm-12 col-lg-6 align-self-center">
					<div class="title text-left pb-4 p-lg-0 service-info mb-5">
						<h2>Design Research</h2>
						<p class="fs-15">When designing software for humans, it’s vital that we truly understand the end user. Design research allows us to engage with the users and build a shared understanding of their needs and problems. Through this process, we can lay the foundation for building solutions that solve real-world problems.</p>
						<div class="row">
							<div class="col-6">
								<ul class="list-group list-group-borderless list-group-icon-primary-bg">
									<li class="list-group-item"><i class="fa fa-check"></i>User Research</li>
									<li class="list-group-item"><i class="fa fa-check"></i>User Interviews</li>
								</ul>
							</div>
							<div class="col-6">
								<ul class="list-group list-group-borderless list-group-icon-primary-bg">
							    	<li class="list-group-item"><i class="fa fa-check"></i>Journey Mappings</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i>Prototypes</li>
								</ul>
							</div>
						</div>
					</div>

                    <div class="title text-left pb-4 p-lg-0  service-info mb-5">
						<h2>User Experience</h2>
						<p class="fs-15">Understanding the user is only half of the challenge. In order to build successful products, we continually engage the users to test assumptions, get feedback, and shape the product. Through a process of rapid prototyping, we can quickly eliminate potential risks and focus on building a product that adds real value.</p>
						<div class="row">
							<div class="col-6">
								<ul class="list-group list-group-borderless list-group-icon-primary-bg">
									<li class="list-group-item"><i class="fa fa-check"></i>Wireframes</li>
									<li class="list-group-item"><i class="fa fa-check"></i>Prototypes</li>
								</ul>
							</div>
							<div class="col-6">
								<ul class="list-group list-group-borderless list-group-icon-primary-bg">
							    	<li class="list-group-item"><i class="fa fa-check"></i>Interaction Design</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i>Usability Testing</li>
								</ul>
							</div>
						</div>
					</div>


                    <div class="title text-left pb-4 p-lg-0  service-info mb-5">
						<h2>Product Design</h2>
						<p class="fs-15">The interface is where the human interacts with the software. Through a product design proces, our prototype evolves into a complete and branded experience. Product design isn’t just about colors and imagery, it’s about storytelling, communication, and delighting the user.</p>
						<div class="row">
							<div class="col-6">
								<ul class="list-group list-group-borderless list-group-icon-primary-bg">
									<li class="list-group-item"><i class="fa fa-check"></i>Storytelling</li>
									<li class="list-group-item"><i class="fa fa-check"></i>Copy & Content</li>
								</ul>
							</div>
							<div class="col-6">
								<ul class="list-group list-group-borderless list-group-icon-primary-bg">
							    	<li class="list-group-item"><i class="fa fa-check"></i>Visual Design</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i>Mobile & Web Application Design</li>
								</ul>
							</div>
						</div>
					</div>


                      <div class="title text-left pb-4 p-lg-0  service-info mb-5">
						<h2>Web Design</h2>
						<p class="fs-15">Quality web design is necessary to achieve goals, especially with user conversion and engagement. Through a proven web design process, we help clients launch marketing websites and products that improve on their bottom line. Good web design is how companies stand out from their competitors.</p>
						<div class="row">
							<div class="col-6">
								<ul class="list-group list-group-borderless list-group-icon-primary-bg">
									<li class="list-group-item"><i class="fa fa-check"></i>Storytelling</li>
									<li class="list-group-item"><i class="fa fa-check"></i>Copy & Content</li>
								</ul>
							</div>
							<div class="col-6">
								<ul class="list-group list-group-borderless list-group-icon-primary-bg">
							    	<li class="list-group-item"><i class="fa fa-check"></i>Marketing Websites</li>
                                    <li class="list-group-item"><i class="fa fa-check"></i>Sales & Landing Pages</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-10 col-lg-6 mx-md-auto align-self-center">
					<img class="img-fluid" src="assets/images/service/01.jpg" alt="">
				</div>
			</div>




		</div>
	</section>


@include('partials.get-quote-action')



@endsection


