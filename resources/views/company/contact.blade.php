@extends('layouts.main')

@section('content')

<section class="height-600 p-0 bg-grad pattern-overlay-4">
		<div class="container h-100">
			<div class="row d-flex h-100">
				<div class="col-sm-10 col-md-8 justify-content-center align-self-center align-items-start mx-auto all-text-white mt-3 mt-md-0">
					<div class="text-left contact-title">
						<h5 class="p-0 cd-headline clip big-clip is-full-width text-uppercase">Contact us</h5>
						<p class="mb-4">Start a project, get a quote, or learn more about how we can help you build your next great idea.</p>
                         <ul class="list-unstyled">
								<li class="media mr-5"><i class="mr-3 display-8 ti-headphone-alt"></i> <span class="mr-3">(+91) 8605828888</span>  <span>(+91) 8983459855 </span></li>
								<li class="media mr-3"><i class="mr-3 display-8 ti-email"></i> info@eruditesoftwares.com</li>
							</ul>
					</div>
				</div>

			</div>
		</div>
	</section>

    <section class="mt-lg-n9 mt-sm-0 pb-0 z-index-9  contact-form-container mb-5">
		<div class="container ">
			<div class="row bg-white shadow m-0 p-2 p-lg-5 border-radius-3">
				<div class="col-md-12">
                    <div class="row mb-5">
                        <div class="col-md-12 mb-4">
                            <h5 class="text-uppercase">TELL US ABOUT YOURSELF</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                         <div class="col-md-12 mb-4">
                            <h5 class="text-uppercase">HOW CAN WE HELP?</h5>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                               <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                               <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                               <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                               <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                               <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                               <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                               <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-5">
                        <div class="col-md-12 mb-4">
                            <h5 class="text-uppercase">TELL US ABOUT YOUR PROJECT</h5>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" rows="5" placeholder="Example textarea"></textarea>
                            </div>
                        </div>
                    </div>
                     <div class="row mb-5">
                        <div class="col-md-12 mb-4">
                            <h5 class="text-uppercase">HOW DID YOU HEAR ABOUT KOHACTIVE?</h5>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <input class="form-control" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <button class="btn btn-grad" type="submit">Submit</button>
                        </div>
                    </div>

				</div>

			</div>
		</div>
	</section>
@endsection
