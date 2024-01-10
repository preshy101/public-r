

<div> 
	{{-- @section('content') --}}
    {{-- Slider --}}
    <section class="hero-area"> 
		<div id="corporex-slider" class="corporex-slider corporex-slider-03 carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				@if ($slide) 
				@foreach ($slide as $index => $item) 
				<li data-target="#corporex-slider" data-slide-to="{{$index}}" class="{{( $index == 0 )? 'active':'' }}"></li>
			
				@endforeach	
			
			</ol> <!-- .carousel-indicators -->
			 
			<div class="carousel-inner">

				{{-- <div class="item caption-right gradient-right-dark active">
					<img class="slider-bg img-responsive" src="{{asset('img/austin-distel-VCFxt2yT1eQ-unsplash.jpg')}}" alt="slider image 02">
					<div class="container">
						
						<div class="carousel-caption">
							<h1 class="h1-extra"><span>N.I.P.R</span>The career Path to greatness</h1>
							<p class="lead">
								Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur.
							</p>
							<a class="btn btn-main" href="#">learn more</a>
						</div> <!-- .carousel-caption -->
					</div> <!-- .container -->
				</div> <!-- .item --> --}}

				@foreach ($slide as $index => $item) 
				<div class="item caption-left gradient-left-dark {{( $index == 0 )? 'active':'' }}" > 
					<img class="slider-bg img-responsive" 
					src="{{Storage::url($item->image)}}"  
					alt="slider image 01">
					<div class="container">
						
						<div class="carousel-caption">
							<h1 class="h1-extra"><span>N.I.P.R</span>
								{{$item->title}}</h1>
							<p class="lead" style="color: white;">
								{!!$item->description!!}
							</p> 
							<a class="btn btn-main" href="#">learn more</a>
						</div> <!-- .carousel-caption -->
					</div> <!-- .container -->
				</div> <!-- .item -->
				@endforeach
			
			</div> <!-- .carousel-inner -->

			<!-- Controls -->
  			<a class="left carousel-control" href="#corporex-slider" role="button" data-slide="prev">
  				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  				<span class="sr-only">Previous</span>
  			</a> <!-- .carousel-control -->

  			<a class="right carousel-control" href="#corporex-slider" role="button" data-slide="next">
  				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  				<span class="sr-only">Previous</span>
  			</a> <!-- .carousel-control -->
	@endif
		</div> <!-- .carousel -->
	</section> <!-- .hero-area -->
	<!-- Slideshow container -->
	 

    {{-- Key Features --}}
	<section class="intro-section intro-08 section-block">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-block text-center">
					<h2><span>WELCOME TO THE</span> NIGERIAN INSTITUTE OF PUBLIC RELATIONS (NIPR)</h2>
					<p class="lead">
						{{-- {{dd($slide)}}/ --}}
						{{($welcome != null)?$welcome->description:"welcome to NIPR"}}
					</p>
				</div> <!-- .col-md-8 img-block -->
			</div> <!-- .row -->
			<div class="row feature-set">
				<div class="col-sm-4">
					<div class="item-wrapper">
						<div class="icon-box"><i class="pe-7s-rocket"></i></div>
						<div class="content-wrapper">
							<h3>Career Road-map</h3>
							<p>
								Navigate your professional journey with our comprehensive career roadmap, designed to guide you through strategic milestones and opportunities for growth.							</p>
						</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
				<div class="col-sm-4">
					<div class="item-wrapper">
						<div class="icon-box"><i class="pe-7s-shield"></i></div>
						<div class="content-wrapper">
							<h3>Security</h3>
							<p>
								Ensuring your safety in the digital realm, we prioritize robust security measures to safeguard your information and provide you with a secure online experience.							</p>
						</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
				<div class="col-sm-4">
					<div class="item-wrapper">
						<div class="icon-box"><i class="pe-7s-ribbon"></i></div>
						<div class="content-wrapper">
							<h3>Certification</h3>
							<p>
								Elevate your expertise and credibility with our range of industry-recognized certifications, empowering you to stay ahead in today's competitive landscape							</p>
						</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .about-section -->

    {{-- Statistics --}}
	<section class="fun-facts-section fun-facts-01 section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 content-block">
                    <h2><span>Professionalism at its best</span>Our excellent records preceeds us</h2>
					<p>
						With a track record of excellence, our commitment to quality and innovation is reflected in our records, 
						showcasing a history of successful partnerships and satisfied clients 
					</p>
				</div> <!-- .col-md-6 -->
				<div class="col-md-5 col-md-offset-1 facts-block">
                    <div class="row">
                        <div class="col-xs-6">
                            <i class="pe-7s-user"></i>
							<h3><span class="counter">15K</span>Students</h3>
						</div> <!-- .col-xs-6 -->
						<div class="col-xs-6">
                            <i class="pe-7s-users"></i>
							<h3><span class="counter">7K</span>Members</h3>
						</div> <!-- .col-xs-6 -->
						<div class="col-xs-6">
                            <i class="pe-7s-note"></i>
							<h3><span class="counter">2432</span>Certificates</h3>
						</div> <!-- .col-xs-6 -->
						<div class="col-xs-6">
                            <i class="pe-7s-camera"></i>
							<h3><span class="counter">43</span>Events</h3>
						</div> <!-- .col-xs-6 -->
					</div> <!-- .row -->
					
				</div> <!-- .col-md-6 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .split-section -->

	{{-- Contact us --}}
	<section class="contact-banner" style="background-color: red">
			<div class="container">
				<h2>Make the first step </h2>
				<p>Its easy and beautiful. It will change your life</p>
				<a class="contact-btn btn btn-ghost" id="contact" style="co" href="#">Become a Member</a>
			</div> <!-- .container -->
	</section> <!-- .contact-banner -->

	
		@include('livewire.sections.presidentMessage')

    {{-- FAQ --}}
    <section class="accordion-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-group corporex-accordion accordion-style-01 radial" id="accordion">
                        @foreach ($faq as $index => $item) 
						<div class="panel">
                            <div class="panel-heading {{($index == 0)? 'active':''}}">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$index}}">
                                       {{$item->title}}
                                    </a>
                                </h4><!-- .panel-title -->
                            </div> <!-- .panel-heading -->
                            <div id="collapse{{$index}}" class="panel-collapse collapse {{($index == 0)? 'in':''}}">
                                <div class="panel-body">
                                    <p>
                                        {{ $item->description}}
                                    </p>
                                </div> <!-- .panel-body -->
                            </div> <!-- .panel-collapse -->
                        </div> <!-- .panel panel-default --> 
						@endforeach 
 
                    </div> <!-- .panel-group -->
                </div> <!-- .col-md-6 -->
                <div class="col-md-6">
                    <div class="image-wrapper">
                        <img class="img-responsive" src="{{asset('./img/simone-secci-49uySSA678U-unsplash.jpg')}}" alt="hand shake image">
                    </div> <!-- .img-wrapper -->
                </div> <!-- .col-md-6 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .accordion-section -->

    {{-- Testimony --}}
	<section class="testimonial-section section-block" style="background-color: red" >
		<div class="container" >
			<div class="title-block white"  >
				<h2>What people say</h2>
				<p>
					Clients consistently commend us for our unwavering commitment to excellence, personalized service, and our ability to exceed expectations,
					 making us a trusted partner in their success stories
				</p>
			</div> <!-- .title-block -->
			<div class="testimonial-carousel" id="testimonial-carousel">
				@foreach ($testimony as  $item) 
				<div class="testimonial-item">
					<div class="content-wrapper">
						<div class="image-wrapper">
							<img class="img-responsive" 
							src="{{Storage::url($item->image)}}" 
							style="width:72px; height: 72px;" alt="quote author 01"></div>
						<blockquote>
							{{ $item->description }}
						</blockquote>
						<h4>{{$item->title}}
							{{-- <small>Web Designer</small> --}}
						</h4>
					</div> <!-- .content-wrapper -->
				</div> <!-- .col-md-4 -->
				@endforeach
				 
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .testimonial-section -->

    {{-- News --}}
    <section class="blog-section blog-style-04 section-block">
		<div class="container">
			<div class="title-block">
				<h2>Latest News</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore mollit anim id est laborum.
				</p>
			</div> <!-- .title-block -->
			<div class="row">
				<div class="col-lg-6">
					<div class="post-wrapper post-split clearfix">
						<div class="image-wrapper">
							<img class="img-responsive" src="{{asset('./img/markus-winkler-k_Am9hKISLM-unsplash.jpg')}}" style="width: 570px; height: 208px;" alt="blog image">
						</div> <!-- .image-wrapper -->
						<div class="post-content">
							<ul class="post-meta">
								<li>August 03, 2017</li>
								<li><a href="#">Web Design</a></li>
							</ul>
							<h3><a href="#">Praesent convallis lorem nisi anamas eget</a></h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt...
							</p>
							<a class="btn-open" href="#">Read More</a>
						</div> <!-- .post-content -->
					</div> <!-- .post-wrapper split-post -->

					<div class="post-wrapper post-split clearfix">
						<div class="image-wrapper">
							<img class="img-responsive" src="{{asset('./img/markus-winkler-k_Am9hKISLM-unsplash.jpg')}}" style="width: 570px; height: 208px;" alt="blog image">
						</div> <!-- .image-wrapper -->
						<div class="post-content">
							<ul class="post-meta">
								<li>August 03, 2017</li>
								<li><a href="#">Web Design</a></li>
							</ul>
							<h3><a href="#">Nulla non arcu rutrum manegis convallis</a></h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt...
							</p>
							<a class="btn-open" href="#">Read More</a>
						</div> <!-- .post-content -->
					</div> <!-- .post-wrapper split-post -->

				</div> <!-- .col-lg-6 -->
				<div class="col-lg-6">
					<div class="post-wrapper post-split clearfix">
						<div class="image-wrapper">
							<img class="img-responsive" src="{{asset('./img/markus-winkler-k_Am9hKISLM-unsplash.jpg')}}" style="width: 570px; height: 208px;" alt="blog image">
						</div> <!-- .image-wrapper -->
						<div class="post-content">
							<ul class="post-meta">
								<li>August 03, 2017</li>
								<li><a href="#">Web Design</a></li>
							</ul>
							<h3><a href="#">Donec volutpat purus in orci mollis ut pretium</a></h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt...
							</p>
							<a class="btn-open" href="#">Read More</a>
						</div> <!-- .post-content -->
					</div> <!-- .post-wrapper split-post -->

					<div class="post-wrapper post-split clearfix">
						<div class="image-wrapper">
							<img class="img-responsive" src="{{asset('./img/markus-winkler-k_Am9hKISLM-unsplash.jpg')}}" style="width: 570px; height: 208px;" alt="blog image">
						</div> <!-- .image-wrapper -->
						<div class="post-content">
							<ul class="post-meta">
								<li>August 03, 2017</li>
								<li><a href="#">Web Design</a></li>
							</ul>
							<h3><a href="#">Praesent congue sem tortor vulputate felis</a></h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt...
							</p>
							<a class="btn-open" href="#">Read More</a>
						</div> <!-- .post-content -->
					</div> <!-- .post-wrapper split-post -->

				</div> <!-- .col-lg-6 -->
			</div> <!-- .row -->
			<div class="btn-container">
				<a class="btn btn-narrow" href="#">View All</a>
			</div>
			
		</div> <!-- .container -->
	</section> <!-- .blog-section -->

    {{-- Subscribe --}}
	{{-- @endsection --}}
</div>
