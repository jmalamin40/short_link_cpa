<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Free Short Link Generate with custom thumbnail and title </title>
  <meta name="_token" content="{{ csrf_token() }}">
  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Free Short Link Generate with custom thumbnail and title, now you can share cpa link without landing page">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  


	<!-- ** ** -->
	<meta property="og:url"                content="{{url('/')}}" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="{{$title}}" />
	<meta property="og:description"        content="{{$title}}" />
	<meta property="og:image" 			   content="{{$image}}" />
	
  <!-- favicon -->
  <link href="{{ URL::to('mages/favicon.png')}}" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="{{ URL::to('plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::to('plugins/bootstrap/bootstrap-slider.css')}}" rel="stylesheet">
  <link href="{{ URL::to('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::to('plugins/slick/slick.css')}}" rel="stylesheet">
  <link href="{{ URL::to('plugins/slick/slick-theme.css')}}" rel="stylesheet">
  <link href="{{ URL::to('plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
  <link href="{{ URL::to('css/style.css')}}" rel="stylesheet">
	<script>
		var base_url ="{{url('/')}}";
	</script>
</head>

<body class="body-wrapper">


<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.html">
						<img src="{{ URL::to('images/logo.png')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							
							
							
							
						</ul>
                        
						<ul class="navbar-nav ml-auto mt-10">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item"><a class="nav-link login-button" href="Dashboard.html">Dashboard</a> </li>
                                @else
                                    <li class="nav-item"><a class="nav-link login-button" href="{{ url('/') }}/login">Login</a></li>
                                
                                @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link text-white add-button" href="ad-listing.html"><i class="fa fa-plus-circle"></i> Register</a></li>
                                @endif
                            @endauth
                        @endif
                        </ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>

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




<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright &copy; <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. Designed & Developed by <a class="text-white" href="{{ URL::to('/')}}">{{ URL::to('/')}}</a></p>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- Social Icons -->
        <ul class="social-media-icons text-center text-lg-right">
          
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="fa fa-angle-up"></i>
  </div>
</footer>

<!-- 
Essential Scripts
=====================================-->
<script src="{{ URL::to('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ URL::to('plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{ URL::to('plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ URL::to('plugins/bootstrap/bootstrap-slider.js')}}"></script>
<script src="{{ URL::to('plugins/tether/js/tether.min.js')}}"></script>
<script src="{{ URL::to('plugins/raty/jquery.raty-fa.js')}}"></script>
<script src="{{ URL::to('plugins/slick/slick.min.js')}}"></script>
<script src="{{ URL::to('plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="{{ URL::to('plugins/google-map/map.js')}}" defer></script>

<script src="{{ URL::to('js/script.js')}}"></script>

</body>

</html>




