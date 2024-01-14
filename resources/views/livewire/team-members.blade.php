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
					<img class="img-responsive" src="{{($presidentSpeech)?Storage::url($presidentSpeech->image):""}}" alt="about image">
				</div> <!-- .col-md-6 img-block -->
				<div class="col-md-6 content-block">
					<h2><span>Meet the president</span>
						{{($president != null)?$president->title: "Mr President"}} </h2>
					<p>
						{{($president != null)?$president->description:"The Nigerian Institute of Public Relations (NIPR) was established in 1963. 
                    The body attained the status of a Chartered Institute in June 1990 through Decree No. 16 (now an Act of the National Assembly)
                     from which it derives the power and responsibility  to register members, set parameters of knowledge to acquire to qualify to 
                     practise, regulate the practice and development of the PR Profession as well monitor professional conducts through an established
                     Code of Ethics, amongst others. "}}
					 </p>
					<p>
						{{ ($president != null)?$president->note: "" }} 
					</p>
				 
				</div> <!-- .col-md-6 -->
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
						alt="team member 00">
					</div> <!-- .img-wrapper -->
					<div class="member-info" style="background-color: red; color: white">
						<h4>{{$item->title}} <small>{{$item->description}}</small></h4>
						<ul class="social-links">
							<li><a href="#" class="facebook-link"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter-link"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus-link"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin-link"><i class="fa fa-linkedin"></i></a></li>
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
						<div class="progress">
						  <div class="progress-bar" role="progressbar" aria-valuenow="70"
						  aria-valuemin="0" aria-valuemax="100">
						    <span>70%</span>
						  </div>
						</div> <!-- .progress -->
					</div> <!-- .progress-wrapper -->
					<div class="progress-wrapper">
						<h4>Technology</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" aria-valuenow="79"
						  aria-valuemin="0" aria-valuemax="100">
						    <span>79%</span>
						  </div>
						</div> <!-- .progress -->
					</div> <!-- .progress-wrapper -->
					<div class="progress-wrapper">
						<h4>Education</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" aria-valuenow="90"
						  aria-valuemin="0" aria-valuemax="100">
						    <span>90%</span>
						  </div>
						</div> <!-- .progress -->
					</div> <!-- .progress-wrapper -->
					<div class="progress-wrapper">
						<h4>Resource</h4>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" aria-valuenow="60"
						  aria-valuemin="0" aria-valuemax="100">
						    <span>60%</span>
						  </div>
						</div> <!-- .progress -->
					</div> <!-- .progress-wrapper -->
				</div> <!-- .col-md-6 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .skill-section -->


</div>
