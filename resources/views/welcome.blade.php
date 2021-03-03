<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fittness GYM</title>
    <link rel="icon" href="/favicon.png" sizes="32x32" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/login-modal.css">	
	</head>
	<body>
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +01 123 456 7890</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
							@if (Route::has('login'))
								@auth
                                    <li><a href="{{ url('/home') }}" class="btn btn-primary">Home</a></li>
								@else
                                    <li><a href="#myModal" class="btn btn-primary" data-toggle="modal">Log In</a></li>	
									@if (Route::has('register'))
									<li><a href="{{ route('register') }}" class="btn btn-primary">Register</a></li>
									@endif
								@endauth
							@endif				
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<div id="fh5co-logo"><a href="index.html"><!--ULTIMATE FITNESS GYM<span>.</span>--></a></div>
					</div>
					<div class="col-xs-6 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="pricing.html">Pricing</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<!--<h1>ULTIMATE FITNESS GYM</h1>-->
							<h2>Make it a lifestyle, not a duty</h2>
							<!--<p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary popup-vimeo">Watch Our Video</a></p>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/dumbbell.svg" alt=""></span>
						<h3>Weight Lifting</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</p>
						<p><a href="#" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/exercise.svg" alt=""></span>
						<h3>Running</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</p>
						<p><a href="#" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/yoga-carpet.svg" alt=""></span>
						<h3>Yoga</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</p>
						<p><a href="#" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-trainer">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Fitness Expert</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<a href="#"><img class="img-responsive" src="images/trainer-1.jpg" alt="trainer"></a>
						<div class="title">
							<h3><a href="#">Angel Adams</a></h3>
							<span>Dance Expert</span>
						</div>
						<div class="desc text-center">
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<a href="#"><img class="img-responsive" src="images/trainer-2.jpg" alt="trainer"></a>
						<div class="title">
							<h3><a href="#">Arnold Smith</a></h3>
							<span>Body Building Expert</span>
						</div>
						<div class="desc text-center">
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<a href="#"><img class="img-responsive" src="images/trainer-3.jpg" alt="trainer"></a>
						<div class="title">
							<h3><a href="#">Rachel Seely</a></h3>
							<span>Yoga Expert</span>
						</div>
						<div class="desc text-center">
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-schedule" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Class Schedule</h2>
				</div>
			</div>

			<div class="row animate-box">
				
				<div class="fh5co-tabs">
					<ul class="fh5co-tab-nav">
						<li class="active"><a href="#" data-tab="1"><span class="visible-xs">S</span><span class="hidden-xs">Sunday</span></a></li>
						<li><a href="#" data-tab="2"><span class="visible-xs">M</span><span class="hidden-xs">Monday</span></a></li>
						<li><a href="#" data-tab="3"><span class="visible-xs">T</span><span class="hidden-xs">Tuesday</span></a></li>
						<li><a href="#" data-tab="4"><span class="visible-xs">W</span><span class="hidden-xs">Wednesday</span></a></li>

						<li><a href="#" data-tab="5"><span class="visible-xs">Th</span><span class="hidden-xs">Thursday</span></a></li>
						<li><a href="#" data-tab="6"><span class="visible-xs">F</span><span class="hidden-xs">Friday</span></a></li>
						<li><a href="#" data-tab="7"><span class="visible-xs">S</span><span class="hidden-xs">Saturday</span></a></li>
					</ul>

					<!-- Tabs -->
					<div class="fh5co-tab-content-wrap">
						<div class="fh5co-tab-content tab-content active" data-tab-content="1">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="2">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="3">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="4">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="5">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="6">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="7">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-pricing">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Pricing Plan</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="pricing">
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Starter</h2>
							<div class="price"><sup class="currency">$</sup>9<small>/month</small></div>
							<ul class="classes">
								<li>15 Cardio Classes</li>
								<li class="color">10 Swimming Lesson</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>10 Zumba Classes</li>
								<li class="color">5 Massage</li>
								<li>10 Body Building</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Basic</h2>
							<div class="price"><sup class="currency">$</sup>27<small>/month</small></div>
							<ul class="classes">
								<li>15 Cardio Classes</li>
								<li class="color">10 Swimming Lesson</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>10 Zumba Classes</li>
								<li class="color">5 Massage</li>
								<li>10 Body Building</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<h2 class="pricing-plan pricing-plan-offer">Pro <span>Best Offer</span></h2>
							<div class="price"><sup class="currency">$</sup>74<small>/month</small></div>
							<ul class="classes">
								<li>15 Cardio Classes</li>
								<li class="color">10 Swimming Lesson</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>10 Zumba Classes</li>
								<li class="color">5 Massage</li>
								<li>10 Body Building</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Unlimited</h2>
							<div class="price"><sup class="currency">$</sup>140<small>/month</small></div>
							<ul class="classes">
								<li>15 Cardio Classes</li>
								<li class="color">10 Swimming Lesson</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>10 Zumba Classes</li>
								<li class="color">5 Massage</li>
								<li>10 Body Building</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Gym gallery</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-1.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Illustration</span>
									<h2>Useful baskets</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-2.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Skater man in the road</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-3.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Two Glas of Juice</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-4.jpg); "> 
							<a href="#">
								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Timer starts now!</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-3.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Two Glas of Juice</h2>
								</div>
							</a>
						</li>
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-5.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Illustration</span>
									<h2>Beautiful sunset</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-3.jpg); ">
							<a href="#">
								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Two Glas of Juice</h2>
								</div>
							</a>
						</li>
					</ul>		
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person3.jpg" alt="user">
									</figure>
									<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person3.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person3.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2>Fitness Classes this Summer <br> <span> Pay Now and <br> Get <span class="percent">35%</span> Discount</span></h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">Become a Member</a></p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Recent Blog</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/gallery-4.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/gallery-2.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/gallery-3.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>A Little About Stamina.</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					<p><a class="btn btn-primary" href="#">Become A Member</a></p>
				</div>
				<div class="col-md-8">
					<h3>Classes</h3>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a href="#">Cardio</a></li>
							<li><a href="#">Body Building</a></li>
							<li><a href="#">Yoga</a></li>
							<li><a href="#">Boxing</a></li>
							<li><a href="#">Running</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a href="#">Boxing</a></li>
							<li><a href="#">Martial Arts</a></li>
							<li><a href="#">Karate</a></li>
							<li><a href="#">Kungfu</a></li>
							<li><a href="#">Basketball</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a href="#">Badminton</a></li>
							<li><a href="#">Body Building</a></li>
							<li><a href="#">Teams</a></li>
							<li><a href="#">Advertise</a></li>
							<li><a href="#">API</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>






	@if($errors->has('email') || $errors->has('password'))
	<script type="text/javascript">
		$(window).on('load', function() {
			$('#myModal').modal('show');
		});
	</script>
	@endif
	<!-- Modal HTML -->
	<div id="myModal" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
					<div class="modal-header">				
						<h4 class="modal-title">-Admin Login-</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">				
						<div class="form-group">
							<label>Username</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							@error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group">
							<div class="clearfix">
								<label>Password</label>
                                @if (Route::has('password.request'))
                                    <a class="float-right text-muted" href="{{ route('password.request') }}">
                                    <small>Forgot?</small>
                                    </a>
                                @endif								
							</div>						
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							@error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<label class="form-check-label"><input type="checkbox"> Remember me</label>
						<input type="submit" class="btn btn-primary" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>    

	</body>
</html>

