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
	<link rel="icon" href="{{asset('img/masthead.png')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

	@livewireStyles
</head>
<style>
	/* #contact:hover {
    background: white;
    color: red;
	border-color: white 
}*/
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
					<li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-edit"></i> <span>Contact Us</span></a>
						<div class="modal corporex-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Contact Us</h4>
									</div> <!-- .modal-header -->
									<div class="modal-body">
										<form >
											<div class="row">
												@if(session('success'))
												<div class="alert alert-success">
													<button type="button" class="close"  data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
													<i class="fa fa-thumbs-up"></i>
													<strong>Great!</strong> {{ session('success')}}
												</div>
												@endif
												<div class="col-md-12">
													<div class="form-group">
														<label for="author" class="sr-only">Name:</label>
														<input wire:model='name' required class="form-control" type="text" name="author" id="author" placeholder="Name *">
													@error('name')
														<span class="text-danger">{{$message}}</span>
													@enderror
													</div> <!-- .form-group -->
													<div class="form-group">
														<label for="email" class="sr-only">Email:</label>
														<input wire:model='email' required class="form-control" type="email" name="email" id="email" placeholder="Email *">
													@error('email')
														<span class="text-danger">{{$message}}</span>
													@enderror
													</div> <!-- .form-group -->
													<div class="form-group">
														<label for="phone" class="sr-only">Phone:</label>
														<input wire:model='phone' required class="form-control" type="text" name="phone" id="phone" placeholder="Phone">
													@error('phone')
														<span class="text-danger">{{$message}}</span>
													@enderror
													</div> <!-- .form-group -->
													<div class="form-group">
														<label for="url" class="sr-only">Category:</label>
														<select wire:model='website' required class="form-control" type="url" name="url" id="url" placeholder="Website">
														<option value="">Select Option</option>
														<option value="Normal">Normal</option>
														<option value="Urgent">Urgent</option>
														<option value="Critical">Critical</option>
							
														</select>
													@error('website')
														<span class="text-danger">{{$message}}</span>
													@enderror
													</div> <!-- .form-group -->
													
													<div class="form-group">
														<label for="comment" class="sr-only">Comment:</label>
														<textarea wire:model='message'required class="form-control" name="comment" id="comment" placeholder="Write your comment here *"></textarea>
													@error('message')
														<span class="text-danger">{{$message}}</span>
													@enderror
													</div> <!-- .form-group -->
													<button wire:click.prevent='create' class="btn btn-main">Submit</button>
												</div> <!-- .col-md-6 -->
												<div class="col-md-6">
													
												</div> <!-- .col-md-6 -->
											</div> <!-- .row -->
										</form>
									</div>
									</div>
									</div>
									</div>
					</li>
					<li>

					<a   href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-book"></i>  <span>Subscribe Us</span></a>
                            
                        <div class="modal corporex-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Subscribe Us</h4>
                                        </div> <!-- .modal-header -->
                                        <div class="modal-body">
                                                <form class="subscription-form"  >
                                                    <div class="form-group">
                                                        <label class="sr-only" for="subscriber-name">Name</label>
                                                        <input wire:model='sub' type="text" name="subscriber-name" id="subscriber-name" class="form-control" placeholder="Your name">
                                                    </div> <!-- .form-group -->
                                                    <div class="form-group">
                                                        <label class="sr-only" for="subscriber-email">Email</label>
                                                        <input type="text" name="subscriber-email" id="subscriber-email" class="form-control" placeholder="Your email">
                                                    </div> <!-- .form-group -->
                                                  
                                        </div> <!-- .modal-body -->
                                        <div class="modal-footer">  
                                            <button wire:click.prevent='create' class="btn btn-main">Submit</button>
                                                </form> <!-- .subscription-form -->
                                        </div> <!-- .modal-footer -->
                                    </div> <!-- .modal-content -->
                                </div> <!-- .modal-dialog -->      
                		</div> <!-- col-lg-3 col-md-6 -->
					</li>
					<li><a href="https://portal.niprng.org.ng/member/login" ><i class="fa fa-user"></i> <span>Become A Member</span></a></li>

				</ul> <!-- .quick-contact -->

				<ul class="list-inline pull-right top-bar-social">
					<li><a href="https://web.facebook.com/NIPROFFICIALPAGE?mibextid=LQQJ4d&_rdc=1&_rdr"><i class="fab fa-facebook "></i></a></li>
                        <li><a href="https://twitter.com/niprofficial"><i class="fab fa-twitter "></i></a></li>
                        <li><a href="https://www.linkedin.com/in/nigerian-institute-of-public-relations-7600b5a5/"><i class="fab fa-linkedin "></i></a></li>
                        <li><a href="https://www.instagram.com/niprofficial/"><i class="fab fa-instagram "></i></a></li> 
                        <li><a href="https://www.youtube.com/@niprofficial"><i class="fab fa-youtube "></i></a></li> 
                        <li><a href="https://www.tiktok.com/@niprofficial"><i class="fab fa-tiktok "></i></a></li> 
				</ul> <!-- .top-bar-menu -->

				<ul class="list-inline pull-right top-bar-menu">
					{{-- <li><a href="#">Register</a></li>
					<li><a href="#">Login</a></li> --}}
					{{-- <li><a href="#">Sitemap</a></li> --}}
				</ul> <!-- .top-bar-menu -->
			</div> <!-- .container -->
		</div> <!-- .top-bar -->
		<nav class="navbar  corporex-navbar navbar-01"  style="padding-top: 0%; text-transform: unset; padding-bottom: 0%">
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
							<a  href="/" role="button" style="text-transform: unset" aria-haspopup="false" aria-expanded="true">Home</a>
							
						</li> 
						
						<li class="{{(Route::is('about-us.history', 'about-us.vision', 'about-us.ethics', 'about-us.council' ))?"active":''}} dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: unset" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
							<ul class="dropdown-menu" style="text-transform: unset">
								<li>  
									    <a wire:navigate href="/about-us" style="text-transform: unset">NIPR History</a>
									    <a wire:navigate href="/about-us/vision-and-mission" style="text-transform: unset">Vision & History</a>
									    <a wire:navigate href="/about-us/ethics"style="text-transform: unset">Ethics Code</a>
									    <a href="#"style="text-transform: unset">Chapters</a>
									    <a wire:navigate href="/about-us/council"style="text-transform: unset">Council</a>
								 
							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="
						{{(Route::is('student.professional-certificate', 'student.professional-diploma',
						 'student.professional-admission', 'student.result', 'student.requirements', 
						 'student.study-centre', 'student.curriculum' ))?"active":''}} 
						dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: unset" aria-expanded="false">Educational Services</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: unset"> Training ></a>
									<ul class="dropdown-menu">
										<li><a  wire:navigate href="/student/professional-certificate"style="text-transform: unset">Professional Certificate</a></li>
										<li><a  wire:navigate href="/student/professional-diploma"style="text-transform: unset">Professional Diploma</a></li>
										<li><a wire:navigate href="/student/professional-admission"style="text-transform: unset">Professional Admission</a></li>
										<li><a wire:navigate href="/student/result"style="text-transform: unset">Results</a></li>
										<li><a wire:navigate href="/student/study-centre"style="text-transform: unset">Study Centres</a></li>
									</ul> <!-- .dropdown-menu -->
								</li>
								<li>
									<a style="text-transform: unset" wire:navigate href="/student/requirements" class="dropdown-toggle" data-toggle="dropdown">Requirements</a> 
								</li>
								<li>
									<a style="text-transform: unset" wire:navigate href="/student/curriculum" class="dropdown-toggle" data-toggle="dropdown">Curriculum</a>
									 
								</li> 
							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="
						{{(Route::is('member.information', 'member.upgrade', 'member.categery',
						  ))?"active":''}} 
						dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: unset" aria-expanded="false">MemberShip</a>
							<ul class="dropdown-menu">
								<li>
									<a wire:navigate href="/membership/information" class="dropdown-toggle" style="text-transform: unset" data-toggle="dropdown">Membership Information</a>
									
								</li>
								<li>
									<a wire:navigate href="/membership/category" class="dropdown-toggle" style="text-transform: unset" data-toggle="dropdown">MemberShip Categories</a>
									
								</li>
								<li>
									<a  wire:navigate href="/membership/upgrade"class="dropdown-toggle" style="text-transform: unset" data-toggle="dropdown">Membership Upgrade</a>
									
								</li>
								 
							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="dropdown
						{{(Route::is('resources.image','resources.image.view','resources.event.view','resources.downloadable','resources.video'
						  ))?"active":''}} 
						">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: inherit" aria-expanded="false">Resources</a>
                                <ul class="dropdown-menu" style="text-transform: unset">
									 <li>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: unset"> Publications ></a>
										<ul class="dropdown-menu" style="text-transform: unset">
                                    <li>
                                        <a wire:navigate href="#" style="text-transform: unset">Press Releases</a>   
                                    </li>
                                    <li>
                                        <a wire:navigate href="#" style="text-transform: unset">Newsletters</a>   
                                    </li>
                                    <li>
                                        <a wire:navigate href="#" style="text-transform: unset">Publications</a>   
                                    </li>

									<li>
										<a wire:navigate href="#" style="text-transform: unset">Conferences</a>   
									</li>
									</ul>
									</li>
                                    <li>
										<a wire:navigate href="#" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Blog</a>   
                                    </li>
                                    <li>
                                        <a wire:navigate href="#" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Research Materials</a>   
                                    </li>
                                    <li>
                                        <a wire:navigate href="/resources/images" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Image Gallery</a>   
                                    </li>
                                    
                                    <li>
                                        <a wire:navigate href="/resources/videos" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Video</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="/resources/downloadable" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Downloadables</a>
                                    </li>
                                </ul> <!-- .dropdown-menu --> 
						</li>
						<li class="{{(Route::is('resources.event'))?"active":''}}">
							<a wire:navigate href="/resources/up-coming-events" style="text-transform: unset"  >Events</a>    
						</li>
						<li class="
							{{(Route::is('news.posts','news.posts.view'))?"active":''}} "><a wire:navigate href="/news/posts" style="text-transform: unset">News</a></li>
						<li class="
						    {{(Route::is('contactus'))?"active":''}} "><a wire:navigate href="/contact-us" style="text-transform: unset">Contact</a></li>
					</ul> <!-- .nav navbar-nav -->
				</div> <!-- .collapse navbar-collapse -->

			</div> <!-- .container -->
		</nav> <!-- .navbar -->
	</header> <!-- .site-header -->
	 