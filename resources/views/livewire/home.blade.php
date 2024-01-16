

<div> 
	{{-- @section('content') --}}
    {{-- Slider --}}
	{{-- @if (count($slide) > 0)  
     <section class="hero-area"> 
		<div id="corporex-slider" class="corporex-slider corporex-slider-03 carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				@if ($slide != null) 
				@foreach ($slide as $index => $item) 
				<li data-target="#corporex-slider" data-slide-to="{{$index}}" class="{{( $index == 0 )? 'active':'' }}"></li>
			
				@endforeach	
			
			</ol> <!-- .carousel-indicators -->
			 
			<div class="carousel-inner">
 
				@foreach ($slide as $index => $item) 
				<div class="item caption-left gradient-left-dark {{( $index == 0 )? 'active':'' }}" > 
					<img class="slider-bg img-responsive" 
					src="{{Storage::url($item->image)}}"  
					alt="slider image 01">
					<div class="container">
						
						<div class="carousel-caption">
							<h1 class="h1-extra">
							 <!-- <span>N.I.P.R</span> -->
								{{$item->title}}</h1>
							<p class="lead" style="color: white;">
								{!!$item->description!!}
							</p> 
							<!-- <a class="btn btn-main" href="#">learn more</a> -->
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
	@endif --}}
	
	   {{-- Statistics --}}
	   <section class="fun-facts-section fun-facts-01 section-block" style="padding-top: 2%;
	   padding-bottom: 0%;">
        {{-- <div class="container"> --}}
            <div class="row py-0" style=" 
				padding-left: 5%; padding-right: 5%;">
               
				<div class="col-md-4 facts-block">
                    <div class="row">
                        <div class="col-xs-6" style="margin: 0%">
                            <i class="pe-7s-user"></i>
							<h3 style="color: white"><span class="counter">15455</span><br>Students</h3>
						</div> <!-- .col-xs-6 -->
						<div class="col-xs-6" style="margin: 0%">
                            <i class="pe-7s-users"></i>
							<h3  style="color: white"><span class="counter">7464</span><br>Members</h3>
						</div> <!-- .col-xs-6 -->
					
					</div> <!-- .row --> 
				</div> <!-- .col-md-6 -->

 				<div class="col-md-4 facts-block" style="align-content: center; padding-left: 9%">
				
						<a class="contact-btn btn btn-ghost bg-danger " 
						style="background-color: red"
						id="contact"  href="#">Become a Member</a>
						 
				</div> <!-- .col-md-6 -->

				<div class="col-md-4 facts-block">
                    <div class="row">
                       
						<div class="col-xs-6" style="margin: 0%">
                            <i class="pe-7s-note"></i>
							<h3  style="color: white"><span class="counter">2432</span><br>Certificates</h3>
						</div> <!-- .col-xs-6 -->
						<div class="col-xs-6" style="margin: 0%">
                            <i class="pe-7s-camera"></i>
							<h3  style="color: white"><span class="counter">43</span><br> Events</h3>
						</div> <!-- .col-xs-6 -->
					</div> <!-- .row --> 
				</div> <!-- .col-md-6 -->


			</div> <!-- .row -->
		{{-- </div> <!-- .container --> --}}
	</section> <!-- .split-section -->


    {{-- Key Features --}}
	<section class="intro-section intro-08 section-block" style="padding-top: 35px">
		{{-- <div class="container"> --}}
			<div class="row">
			<div class="col-md-6 content-block" style="padding-left: 5%">
					<h2><span>WELCOME TO THE</span><br> NIGERIAN INSTITUTE OF PUBLIC RELATIONS (NIPR)</h2>
					<p class="lead">
						 
						{{($welcome != null)?$welcome->description:""}}
					</p>
				<p> {!!($welcome != null)?$welcome->fullText:""!!} </p>	
				</div> <!-- .col-md-8 img-block -->
			

			<div class="col-md-5  ">
			<div style="border-radius: 2%" id="corporex-slider" class="corporex-slider corporex-slider-03 carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					 @if (count($slide) > 0)  
					@foreach ($slide as $index => $item) 
					<li data-target="#corporex-slider" data-slide-to="{{$index}}" class="{{( $index == 0 )? 'active':'' }}"></li>
				
					@endforeach	
				
				</ol> <!-- .carousel-indicators -->
				 
				<div style="border-radius: 2%" class="carousel-inner">
	 
					@foreach ($slide as $index => $item) 
					<div style="border-radius: 2%" class="item caption-left gradient-left-dark {{( $index == 0 )? 'active':'' }}" > 
						<img class="slider-bg img-responsive" 
						
						src="{{Storage::url($item->image)}}"  
						alt="slider image 01">
						<div class="container">
							
							<div class="carousel-caption">
								<h1 class="h1-extra">
								 <!-- <span>N.I.P.R</span> -->
									{{$item->title}}</h1>
								<p class="lead" style="color: white;">
									{!!$item->description!!}
								</p> 
								<!-- <a class="btn btn-main" href="#">learn more</a> -->
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
			</div>  

		</div> <!-- .row -->


			<div class="row feature-set" style="padding-left: 5%; padding-right: 5%;">
				<div class="col-sm-4">
					<div class="item-wrapper">
						<div class="icon-box"><i class="pe-7s-rocket"></i></div>
						<div class="content-wrapper">
							<h3>Mission and Vision</h3>
							<p>
								 <li> To be the leading regional public relations organisation.</li> 
								<li> To unite the PR profession and bring all persons / organisations under a common banner.</li>
								<li> To represent the industry on PR issues so as to establish growth for the profession as a whole.</li>
								<li> To enhance the image of public relations in Nigeria</li>		
								<br>
								<br>
							</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
				<div class="col-sm-4">
					<div class="item-wrapper">
						<div class="icon-box"><i class="pe-7s-shield"></i></div>
						<div class="content-wrapper">
							<h3>Professionalism</h3>
							<p>
								 NIPR determine what standards of knowledge
								 and skills are to be attained by Public Relations practitioners. For high standards of practice. 
								 The Institute must from time to time upgrade its Code of Professional Conduct. 
								 The decree empowers the Council to make byelaws and other rules not 
								inconsistent with this decree as to acts which constitute professional misconduct 
							</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
				<div class="col-sm-4">
					<div class="item-wrapper">
						<div class="icon-box"><i class="pe-7s-ribbon"></i></div>
						<div class="content-wrapper">
							<h3>Certification</h3>
							<p>
								Elevate your expertise and credibility with our range of industry-recognized certifications, empowering you to stay ahead in today's competitive landscape,
							and introducing a learning management system to foster and breed excellence across every level	
						<br>
						<br>
						<br>
					
						</p>
						</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
			</div> <!-- .row -->
		{{-- </div> <!-- .container --> --}}
	</section> <!-- .about-section -->

 
	{{-- Contact us --}}
	{{-- <section class="contact-banner" style="background-color: red">
			<div class="container">
				<h2>Make the first step </h2>
				<p>Its easy and beautiful. It will change your life</p>
				<a class="contact-btn btn btn-ghost" id="contact" style="co" href="#">Become a Member</a>
			</div> <!-- .container -->
	</section> <!-- .contact-banner --> --}}

	
		@include('livewire.sections.presidentMessage')

		<!-- Event Gallery-->
		
		@if($welcomePics != null)
		<section class="portfolio-section portfolio-style-02 section-block" >
			<div class="container">
				<div class="title-block">
					<h2>Our Glorified Moments</h2>
					<p>
						every moment hinting to the core vision and mission of Nigerian Institute of Public Relation (NIPR) 
					</p>
				</div> <!-- .title-block -->
				{{-- 	<div class="portfolio-sorting">
				<ul class="portfolio-category">
						<li data-filter="all">All</li>
						<li data-filter=".finance">Finance</li>
						<li data-filter=".marketing">Marketing</li>
						<li data-filter=".development">Development</li>
					</ul> 
				</div> <!-- .portfolio-sorting -->--}}
				@php
						$count = 0;
						@endphp
					@foreach($welcomePics as $item) 
					@foreach ($item->imageVideo as $pics) 
					<div class="row portfolio-container no-pad">
					@foreach ($pics->image as $index => $images)
					@if ($index <3)
						
					<div class="col-md-4 col-sm-6 portfolio-item mix finance">
						<div class="item-wrapper">
							<img class="img-responsive" 
							src="{{Storage::url($images)}}" 
							alt="portflio image one">
							<div class="portfolio-details">
								<a class="portfolio-popup" href="{{Storage::url($images)}}"><span class="zoom-icon"></span></a>
								<div class="hover-content">
									{{-- <h3><a href="#">Duis semper sed nulla interdum</a></h3>
									<p>Category</p> --}}
								</div><!-- .hover-content -->
							</div> <!-- .portfolio-details -->
						</div> <!-- .item-wrapper -->
					</div> <!-- .portfolio-item -->
					
					@endif
					@endforeach
				</div> <!-- .row -->
					@endforeach
					@endforeach


					@php $count = $count + 3 @endphp
					@foreach($welcomePics as $item) 
					@foreach ($item->imageVideo as $pics) 
					<div class="row portfolio-container no-pad">
					@foreach ($pics->image as $index => $images)
					{{-- @if ($index >3 ) --}}
					@if ($index >3 && $count < 6)
					@php $count = $count + 1 @endphp
					<div class="col-md-4 col-sm-6 portfolio-item mix finance">
						<div class="item-wrapper">
							<img class="img-responsive" 
							src="{{Storage::url($images)}}" 
							alt="portflio image one">
							<div class="portfolio-details">
								<a class="portfolio-popup" href="{{Storage::url($images)}}"><span class="zoom-icon"></span></a>
								<div class="hover-content">
									{{-- <h3><a href="#">Duis semper sed nulla interdum</a></h3>
									<p>Category</p> --}}
								</div><!-- .hover-content -->
							</div> <!-- .portfolio-details -->
						</div> <!-- .item-wrapper -->
					</div> <!-- .portfolio-item -->
					
					@endif
					@endforeach
				</div> <!-- .row -->
					@endforeach
					@endforeach



	
				<div class="btn-container text-center">
					<a  wire:navigate class="btn btn-narrow" href="/resources/up-coming-events">View All</a>
				</div> <!-- .btn-container -->
			</div> <!-- .container -->
		</section> <!-- .portfolio-section -->
	@endif

    {{-- FAQ --}}
	@if(count($faq)>0)
    <section class="accordion-section" style="background:#f5f5f5;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-group corporex-accordion accordion-style-01 radial" id="accordion">
                        @foreach ($faq as $index => $item) 
						<div class="panel" style="background:#f5f5f5;">
                            <div class="panel-heading {{($index == 0)? 'active':''}}">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsez{{$index}}">
                                       {{$item->title}}
                                    </a>
                                </h4><!-- .panel-title -->
                            </div> <!-- .panel-heading -->
                            <div id="collapsez{{$index}}" class="panel-collapse collapse {{($index == 0)? 'in':''}}">
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
                        <img class="img-responsive"
						style="height: 550px"
						src="{{asset('./img/simone-secci-49uySSA678U-unsplash.jpg')}}" alt="hand shake image">
                    </div> <!-- .img-wrapper -->
                </div> <!-- .col-md-6 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .accordion-section -->
	@endif
    {{-- Testimony --}}
	@if(count($testimony) > 0)
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
@endif
    {{-- News --}}
	@include('livewire.sections.news')

    {{-- Subscribe --}}
	{{-- @endsection --}}
</div>
