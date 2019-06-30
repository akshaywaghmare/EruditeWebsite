@extends('layouts.main')

@section('content')
    <div class="innerpage-banner center parallax-bg bg-overlay-dark-7 height-500 d-flex" style="background:url({{asset('public/images/digital-startegy.jpg')}}) no-repeat; background-size:cover; background-position: center center;">
		<div class="container">
			<div class="row justify-content-between align-items-center h-100">
				<div class="col-md-6 mb-4 all-text-white text-left">
					<h4>A mint of creativity</h4>
					<h1 class="product-title">Strategy & Digital Innovation</h1>

				</div>
                <div class="col-md-6">

                </div>
			</div>
		</div>
	</div>


<section class="pricing-page pricing pricing-center mt-5 pb-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<h2 class="h2 font-weight-light service-title-quote text-primary">We help build a foundation for transforming your business with design and technology.</h2>
					<h5>At Wizixo, we transform your perception into an excellent website</h5>
				</div>
			</div>


		</div>
	</section>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12">
					<div class="title">
						<h2>We help you create Apps for</h2>
						<p class="mb-0">The real challenge before companies in today's world is to make their products and services appealing to everyone.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mt-4">
					<div class="feature-box f-style-5 h-100 icon-grad">
						<div class="feature-box-icon"><i class="ti-panel"></i></div>
						<h3 class="feature-box-title">Discover</h3>
						<p class="feature-box-desc">We start with a discovery workshop to discuss the business opportunity, identify potential customers and build a working understanding of the problem that we’re solving.</p>
					</div>
				</div>
				<div class="col-md-4 mt-4">
					<div class="feature-box f-style-5 h-100 icon-grad">
						<div class="feature-box-icon"><i class="ti-palette"></i></div>
						<h3 class="feature-box-title">Recruit</h3>
						<p class="feature-box-desc">In order to validate the success of our solution, we’ll need to recruit real customers. Through surveys or onsite visits, we’ll identify the right people to interview.</p>
					</div>
				</div>
				<div class="col-md-4 mt-4">
					<div class="feature-box f-style-5 h-100 icon-grad">
						<div class="feature-box-icon"><i class="ti-gift"></i></div>
						<h3 class="feature-box-title">Prototype</h3>
						<p class="feature-box-desc">A conversation with customers is just the start. Working with your team, we’ll build a prototype of our solution and use this during our interview to further validate our product.</p>
					</div>
				</div>
			</div>
            <div class="row">
				<div class="col-md-4 mt-4">
					<div class="feature-box f-style-5 h-100 icon-grad">
						<div class="feature-box-icon"><i class="ti-panel"></i></div>
						<h3 class="feature-box-title">Interview</h3>
						<p class="feature-box-desc">We’ll conduct several one-on-one interviews with real customers. We’ll ask important questions to identify their needs and pains, and then present our prototype to gather feedback.</p>
					</div>
				</div>
				<div class="col-md-4 mt-4">
					<div class="feature-box f-style-5 h-100 icon-grad">
						<div class="feature-box-icon"><i class="ti-palette"></i></div>
						<h3 class="feature-box-title">Learn</h3>
						<p class="feature-box-desc">With real customer feedback and a prototype, we’ll be able to answer the most important questions about your business model. Based on our learnings, we’ll either build or iterate.</p>
					</div>
				</div>
				<div class="col-md-4 mt-4">
					<div class="feature-box f-style-5 h-100 icon-grad">
						<div class="feature-box-icon"><i class="ti-gift"></i></div>
						<h3 class="feature-box-title">Build</h3>
						<p class="feature-box-desc">If the research sprint confirms our assumptions, we’ll begin the process of developing the full product through an iterative development cycle, from UX to design to development.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

    	<section class="p-0 height-500 parallax-bg" style="background:url({{asset('public/images/digital-innovation.png')}}) no-repeat 65% 0%; background-size:cover;">
		<div class="container h-100">
			<div class="row justify-content-between align-items-center h-100">
				<div class="col-md-8 mb-3 all-text-white">
					<h4>A mint of creativity</h4>
					<h1 class="display-4 font-weight-bold">We are dreaming of the future</h1>

				</div>
			</div>
		</div>
	</section>




<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 mx-auto">
					<div class="title text-center all-text-black">
						<h2>Our approach</h2>
						<p>Develop a deep understanding of your business</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mt-4 all-text-black primary-border-left-dotted py-4">
					<h4>Business Immersion</h4>
					<p>You have full access to all the features of wizixo Standard for 30 days.</p>
				</div>
				<div class="col-md-3 mt-4 all-text-black primary-border-left-dotted py-4">
					<h4>User Research</h4>
					<p>To upgrade to the Standard plan, log into your account and enter a valid credit card.</p>
				</div>
				<div class="col-md-3 mt-4 all-text-black primary-border-left-dotted py-4">
					<h4>Business Goals</h4>
					<p>We accept MasterCard and Visa. we also accept bank transfers or checks.</p>
				</div>
				<div class="col-md-3 mt-4 all-text-black primary-border-left-dotted py-4">
					<h4>Measure & Learn</h4>
					<p>Once you get your code, just enter it into the promo code area on your billing page.</p>
				</div>
			</div>

		</div>
	</section>


@include('partials.get-quote-action')



@endsection
