<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">

	<!-- TITLE -->
	<title>Nigerian Institute of Public Relations (NIPR) </title>

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700%7CRoboto:400,400i,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/pe-icon-7-stroke.css')}}">

	<!-- LIBRARIES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css')}}">
	<!-- STYLES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}"> 
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
	@livewireStyles
</head>
<style>
	#contact:hover {
    background: white;
    color: red;
	border-color: white
}
	nav {    
		position: fixed;    
		top: 0px;  
		}
</style>
<body class="home-11">

	{{-- <!-- preloader -->
	<div class="corporex-preloader">
		<div class="spinner-wrapper">
			<div class="spinner"></div>
		</div><!-- .spinner-wrapper -->
	</div> <!-- .corporex-preloader -->
	 --}}
	<header class="site-header fixed-top" >
		<div class="top-bar clearfix" style="background-color: red">
			<div class="container">
				<ul class="list-inline pull-left quick-contact">
					<li><a href="#"><i class="fa fa-phone"></i> <span>+234 000 0000 000</span></a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> <span>info@nipr.com</span></a></li>
				</ul> <!-- .quick-contact -->

				<ul class="list-inline pull-right top-bar-social">
					<li><a href="https://www.facebook.com/profile.php?id=100004381365825&mibextid=AEUHqQ"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://x.com/nipr_hq?s=11&t=9HmMeHB4scZXQG4gvZuypA"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.linkedin.com/in/niprhq/"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://www.instagram.com/nipr_hq"><i class="fa fa-instagram"></i></a></li>
				</ul> <!-- .top-bar-menu -->

				<ul class="list-inline pull-right top-bar-menu">
					<li><a href="#">Register</a></li>
					<li><a href="#">Login</a></li>
					{{-- <li><a href="#">Sitemap</a></li> --}}
				</ul> <!-- .top-bar-menu -->
			</div> <!-- .container -->
		</div> <!-- .top-bar -->
		<nav class="navbar  corporex-navbar navbar-01" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						  {{-- <span class="icon-bar"></span>  
						  <span class="icon-bar"></span>  --}}
						<!-- <span class="icon-bar"></span> -->
						<i class="fa fa-bars"></i>
					</button>

					<a class="navbar-brand" href="/"><img src="{{asset('img/masthead.png')}}"width=70 alt="NIPR logo"></a>

				</div> <!-- .navbar-header -->

				<div class="collapse navbar-collapse navbar-items" id="navbar-items">
					<ul class="nav navbar-nav navbar-right">
						<li class="{{(Route::is('home'))?"active":''}} dropdown menu-large">
							<a  href="/" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
							
						</li> 
						
						<li class="{{(Route::is('about-us.history', 'about-us.vision', 'about-us.ethics', 'about-us.council' ))?"active":''}} dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
							<ul class="dropdown-menu">
								<li>  
									    <a wire:navigate href="/about-us">NIPR History</a>
									    <a wire:navigate href="/about-us/vision-and-mission">Vision & History</a>
									    <a wire:navigate href="/about-us/ethics">Ethics Code</a>
									    <a href="#">Chapters</a>
									    <a wire:navigate href="/about-us/council">Council</a>
								 
							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="
						{{(Route::is('student.professional-certificate', 'student.professional-diploma',
						 'student.professional-admission', 'student.result', 'student.requirements', 
						 'student.study-centre', 'student.curriculum' ))?"active":''}} 
						dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Students</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Courses & Exams </a>
									<ul class="dropdown-menu">
										<li><a  wire:navigate href="/student/professional-certificate">Professional Certificat</a></li>
										<li><a  wire:navigate href="/student/professional-diploma">Professional Diploma</a></li>
										<li><a wire:navigate href="/student/professional-admission">Professional Admission</a></li>
										<li><a wire:navigate href="/student/result">Results</a></li>
										<li><a wire:navigate href="/student/study-centre">Study Centres</a></li>
									</ul> <!-- .dropdown-menu -->
								</li>
								<li>
									<a wire:navigate href="/student/requirements" class="dropdown-toggle" data-toggle="dropdown">Requirements</a> 
								</li>
								<li>
									<a wire:navigate href="/student/curriculum" class="dropdown-toggle" data-toggle="dropdown">Curriculum</a>
									 
								</li> 
							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="
						{{(Route::is('member.information', 'member.upgrade', 'member.categery',
						  ))?"active":''}} 
						dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MemberShip</a>
							<ul class="dropdown-menu">
								<li>
									<a wire:navigate href="/membership/information" class="dropdown-toggle" data-toggle="dropdown">Membership Information</a>
									
								</li>
								<li>
									<a wire:navigate href="/membership/category" class="dropdown-toggle" data-toggle="dropdown">MemberShip Categories</a>
									
								</li>
								<li>
									<a  wire:navigate href="/membership/upgrade"class="dropdown-toggle" data-toggle="dropdown">Membership Upgrade</a>
									
								</li>
								 
							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="dropdown
						{{(Route::is('resources.image','resources.image.view','resources.event','resources.event.view','resources.downloadable','resources.video','resources.event',
						  ))?"active":''}} 
						">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a wire:navigate href="/resources/images" class="dropdown-toggle" data-toggle="dropdown">Image Gallery</a>   
                                    </li>
                                    <li>
                                        <a wire:navigate href="/resources/up-coming-events"  class="dropdown-toggle" data-toggle="dropdown">UpComing Event</a>    
                                    </li>
                                    <li>
                                        <a wire:navigate href="/resources/videos"  class="dropdown-toggle" data-toggle="dropdown">Video</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="/resources/downloadable" class="dropdown-toggle" data-toggle="dropdown">Downloadables</a>
                                    </li>
                                </ul> <!-- .dropdown-menu --> 
						</li>
						<li class="
							{{(Route::is('news.posts','news.posts.view'))?"active":''}} "><a wire:navigate href="/news/posts" >News</a></li>
						<li class="
						    {{(Route::is('contactus'))?"active":''}} "><a wire:navigate href="/contact-us" >Contact</a></li>
					</ul> <!-- .nav navbar-nav -->
				</div> <!-- .collapse navbar-collapse -->

			</div> <!-- .container -->
		</nav> <!-- .navbar -->
	</header> <!-- .site-header -->
	 