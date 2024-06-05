<div>


	<section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Team Members</h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li>
						<li><a href="#">Team members</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->

	<section class="about-section about-05 section-block">
		<div class="container">
			<div class="row">
				<div class="col-md-6 img-block">
					<img class="img-responsive"
					style=" border-radius: 2%"
					src="{{($presidentSpeech)?Storage::url($presidentSpeech->image):""}}" alt=" image">
				</div> <!-- .col-md-6 img-block -->
				<div class="col-md-6 content-block">
					<h2><span>Meet the president</span>
						{{($president != null)?$president->title: "Mr President"}} </h2>
					<p>
						{{($president != null)?$president->description:" "}}
					 </p>
					<hr class="divider-small">


				</div> <!-- .col-md-6 -->
				<p align="justify">
					{!!($president != null)?$president->fullText:""!!}
				</p>
				<p>
					<i>{{ ($president != null)?$president->note: "" }}  </i>
				</p>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .about-section -->
	@if ($teams)
		<section class="team-section section-block">
		<div class="container">
			<div class="title-block">
				<h2>Our Team</h2>
				<p>
					our amazing team members
				</p>
			</div> <!-- .title-block -->
			<div class="row">
				@foreach ($teams as $item)

				<div class="col-lg-3 col-md-6">
					<div class="img-wrapper">
						<img class="img-responsive"
						src="{{Storage::url($item->image)}}"
						style="border-radius: 2%; height: 445px;"
						alt="team member 00">
					</div> <!-- .img-wrapper -->
					<div class="member-info" style="background-color: red; color: white">
						<h4>{{$item->title}} <small>{{$item->description}}</small></h4>
						<ul class="social-links">
							{{-- <li><a href="#" class="facebook-link"><i class="fab fa-facebook"></i></a></li>
							<li><a href="#" class="twitter-link"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus-link"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" class="linkedin-link"><i class="fab fa-linkedin"></i></a></li> --}}
						</ul> <!-- .social-links -->
					</div> <!-- .member-info -->
				</div> <!-- col-lg-3 col-md-6 -->
				 @endforeach
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .team-section -->
	@else
		<p class="lead">No team member yet</p>
	@endif


	<section class="skill-section section-block anim-progress">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2><span>We are best</span>We have most talented people in team</h2>
					<p>

					Delivering nothing but excellence across the spheres of her Professionalism</p>
				</div> <!-- .col-md-6 -->
				<div class="col-md-6">
					<div class="progress-wrapper">
						<h4>Creativity</h4>
						<div class="progress ">
						  <div class="progress-bar" style="background-color: red" role="progressbar" aria-valuenow="80"
						  aria-valuemin="0" aria-valuemax="100">
						    <span>80%</span>
						  </div>
						</div> <!-- .progress -->
					</div> <!-- .progress-wrapper -->
					<div class="progress-wrapper">
						<h4>Technology</h4>
						<div class="progress">
						  <div class="progress-bar" style="background-color: red" role="progressbar" aria-valuenow="79"
						  aria-valuemin="0" aria-valuemax="100">
						    <span>79%</span>
						  </div>
						</div> <!-- .progress -->
					</div> <!-- .progress-wrapper -->
					<div class="progress-wrapper">
						<h4>Education</h4>
						<div class="progress">
						  <div class="progress-bar" style="background-color: red" role="progressbar" aria-valuenow="90"
						  aria-valuemin="0" aria-valuemax="100">
						    <span>90%</span>
						  </div>
						</div> <!-- .progress -->
					</div> <!-- .progress-wrapper -->
					<div class="progress-wrapper">
						<h4>Resource</h4>
						<div class="progress">
						  <div class="progress-bar" style="background-color: red" role="progressbar" aria-valuenow="95"
						  aria-valuemin="0" aria-valuemax="100">
						    <span>95%</span>
						  </div>
						</div> <!-- .progress -->
					</div> <!-- .progress-wrapper -->
				</div> <!-- .col-md-6 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .skill-section -->


</div>
