<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <title>Free Short Link Generate with custom thumbnail and title </title>
  
  <!-- ** Mobile Specific Metas ** -->
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<meta name="description" content="This a ">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="John Doe">

    <meta property='og:title' content='Short link Generator with custom thumbnail and title'/>
    <meta property='og:image' content='https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg' />
    <meta property='og:description' content='Short link Generator with custom thumbnail and title 100% Free membership'/>
    <meta property='og:url' content='https://jomaddarit.com/'/>
    <meta name="twitter:image" content="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" />
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
	
  	


	<meta name="_token" content="{{ csrf_token() }}">
	
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
					<a class="navbar-brand" href="{{ URL::to('/')}}">
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
                                <li class="nav-item"><a class="nav-link login-button" href="Dashboard">Dashboard</a> </li>
                                @else
                                    <li class="nav-item"><a class="nav-link login-button" href="{{ url('/') }}/login">Login</a></li>
                                
                                @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link text-white add-button" href="{{ url('/') }}/register"><i class="fa fa-plus-circle"></i> Register</a></li>
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

@yield('content')





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




