@extends('welcome')
@section('content')
<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Free Short Link Generate with custom thumbnail and title </h1>

				</div>
				<!-- Advance Search -->
				<div class="advance-search">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-12 col-md-12 align-content-center">
								<form action="{{ url('/') }}/link-generator" method="post" id="link-generator">
									<div class="form-row">
										<div class="form-group col-xl-12 col-lg-12 col-md-12">
											<input name="to_url" type="text" class="form-control my-2 my-lg-1" id="inputtext4"
												placeholder="Enter Your URl">
										</div>
										<div class="form-group col-lg-6 col-md-6">
                                        <input name="thumbnail_url" type="text" class="form-control my-2 my-lg-1" id="inputtext4"
												placeholder="Thumbnail URl">
										</div>
										<div class="form-group col-lg-6 col-md-6">
											<input name="title" type="text" class="form-control my-2 my-lg-1" id="inputLocation4" placeholder="Title">
										</div>
										<div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
											<button type="submit" class="btn btn-primary active w-100">Submit</button>
										</div>
                                        <div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
											Generated Link:
										</div>
                                        <div class="form-group col-xl-6 col-lg-3 col-md-6 align-self-center">
                                            <input type="text" id="generated_link" class="form-control my-2 my-lg-1" id="inputLocation4" value="{{$short_link}}" placeholder="Link">
										</div>
                                        <div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
											<span id="copy_data" class="btn btn-success">COPY</span>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>




<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>Short Link Generator</h2>
					<p>Now you can boost your product link without landing page </p>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
@endsection