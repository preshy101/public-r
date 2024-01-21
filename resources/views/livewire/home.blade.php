

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
	

    {{-- Key Features --}}
	<section class="intro-section intro-08 section-block" style="padding-bottom: 0%">
		{{-- <div class="container"> --}}
			<div class="row">
			<div class="col-lg-8 content-block" style="padding-left: 5%; text-align: justify; margin-bottom: 2%
			text-justify: inter-word;" >
					{{-- <h2 style="text-transform: unset">
						 
				  Nigerian Institute Of Public Relations (NIPR)
				</h2>
				 <center>
					<p class="lead"> 	 
						{{($welcome != null)?$welcome->description:""}}
					</p>
				 </center> --}}
				
				<img src="{{asset('./img/OurHistory.jpg')}}"style="width:100%" alt="" srcset="">
				
				<p  style="width: 500px"
				> {!!($welcome != null)?$welcome->fullText:""!!} </p>	
				{{-- <div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;">
						<div class="icon-box" ><h3 style="color: red; height: 348;"><i class="pe-7s-rocket"></i> <b style="text-transform: capitalize"> Mission and Vision</b> </h3> </div>
						<div class="content-wrapper" >
							
							<p style=" height: 348;">
								 <li> To be the leading regional public relations organisation.</li> 
								<li> To unite the PR profession and bring all persons / organisations under a common banner.</li>
								<li> To represent the industry on PR issues so as to establish growth for the profession as a whole.</li>
								<li> To enhance the image of public relations in Nigeria</li>		 
							</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
				<div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;" >
						<div class="icon-box"><h3 style="color: red; text-transform: capitalize"><i class="pe-7s-id"></i> Up Comming Event  </h3></div>
						<div class="content-wrapper" >
							
							<p style=" height: 348;">
								 NIPR determine what standards of knowledge
								 and skills are to be attained by Public Relations practitioners. For high standards of practice. 
								 The Institute must from time to time upgrade its Code of Professional Conduct. 
								 The decree empowers the Council to make byelaws and other rules  
							</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
				<div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;">
						<div class="icon-box"><h3 style="color: red; text-transform: capitalize"><i class="pe-7s-medal"></i> Certification</h3></div>
						<div class="content-wrapper" > 
							<p style=" height: 348;">
								Elevate your expertise and credibility with our range of industry-recognized certifications, empowering you to stay ahead in today's competitive landscape,
							and introducing a learning management system to foster and breed excellence across every level	
						<br> 
						<br> 
					
						</p>
						</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 --> --}}

				<div class="row blog-posts">
					<br>
					<h3 class="entry-title"><a style="color: red" href="#">Up Coming Events</a></h3> 
					<br>
					@if($events) 
					@foreach ($events as $item) 
					<div class="col-md-4" style="margin-bottom: 0%">
						<div class="post-wrapper post-grid" style="background-color: white; margin-bottom: 0px; height: 446px">
							<div class="image-wrapper">
								<img class="img-responsive"
								height="176px"
								style="height: 176px; image-rendering: auto; width: 100%"
								src="{{Storage::url($item->image)}}" alt="event image 00">
							</div> <!-- .image-wrapper -->
							<div class="post-content">
								<ul class="post-meta">
									<li>{{$item->created_at->diffForHumans()}}</li>
									{{-- <li><a href="#">{{$item->note}}</a></li> --}}
								</ul>
								<h3 class="entry-title"><a href="/resources/up-coming-events/{{$item->id}}">{{$item->title}}</a></h3>
								<div class="entry-content">
									<p>
										{{$item->description}}
									</p>
								</div>
								<a wire:navigate class="btn-open" href="/resources/up-coming-events/{{$item->id}}">Read More</a>
							</div> <!-- .post-content -->
						</div> <!-- .post-wrapper -->
					</div> <!-- .col-md-4 -->
					@endforeach
					@endif
					
				</div> <!-- .row -->
				</div> <!-- .col-md-8 img-block -->
			

			<div class="col-lg-4  ">
			<div style="border-radius: 2%; " id="corporex-slider" class="corporex-slider corporex-slider-03 carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					 @if (count($post) > 0)  
					@foreach ($post as $index => $item) 
					<li data-target="#corporex-slider" data-slide-to="{{$index}}" class="{{( $index == 0 )? 'active':'' }}"></li>
				
					@endforeach	
				
				</ol> <!-- .carousel-indicators -->
				 
				<div style="border-radius: 2%; padding-right: 5%" class="carousel-inner">
	 
					@foreach ($post as $index => $item) 
					<div style="border-radius: 2%" class="item caption-left gradient-left-dark {{( $index == 0 )? 'active':'' }}" > 
						<img class="slider-bg img-responsive" 
						
						src="{{Storage::url($item->image)}}"  
						alt="slider image 01">
						<div class="container">
							
							<div class="carousel-caption" style="color: white;">
								<h6 class="h1-extra" style="color: #f5f5f5;font-size: 30px;">
								 <!-- <span>N.I.P.R</span> --> 
								 {{-- {!! Str::words($item->title, 4, ' ...') !!}  --}}
								<br><br>
								<br>
								<br>
								<br>
								<br>
								<br>
								 <a class="btn btn-main" wire:navigate href="/news/posts/{{$item->slug}}">read more</a> 
								
							</h6>
							<small class="lead" style="color: white ;font-size: 15px;">
								{!! Str::words($item->title, 10, ' ...') !!} 
							</small> 
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
				{{-- <div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;">
						<div class="icon-box" ><h3 style="color: red; height: 348;"><i class="pe-7s-rocket"></i> <b style="text-transform: capitalize"> Mission and Vision</b> </h3> </div>
						<div class="content-wrapper" >
							
							<p style=" height: 348;">
								 <li> To be the leading regional public relations organisation.</li> 
								<li> To unite the PR profession and bring all persons / organisations under a common banner.</li>
								<li> To represent the industry on PR issues so as to establish growth for the profession as a whole.</li>
								<li> To enhance the image of public relations in Nigeria</li>		 
							</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
				<div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;" >
						<div class="icon-box"><h3 style="color: red; text-transform: capitalize"><i class="pe-7s-id"></i> Professionalism  </h3></div>
						<div class="content-wrapper" >
							
							<p style=" height: 348;">
								 NIPR determine what standards of knowledge
								 and skills are to be attained by Public Relations practitioners. For high standards of practice. 
								 The Institute must from time to time upgrade its Code of Professional Conduct. 
								 The decree empowers the Council to make byelaws and other rules  
							</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 --> --}}
				{{-- <div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;">
						<div class="icon-box"><h3 style="color: red; text-transform: capitalize"><i class="pe-7s-medal"></i> Certification</h3></div>
						<div class="content-wrapper" > 
							<p style=" height: 348;">
								Elevate your expertise and credibility with our range of industry-recognized certifications, empowering you to stay ahead in today's competitive landscape,
							and introducing a learning management system to foster and breed excellence across every level	
						<br> 
						<br> 
					
						</p>
						</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 --> --}}
			</div> <!-- .row -->
		{{-- </div> <!-- .container --> --}}
	</section> <!-- .about-section -->

	@include('livewire.sections.presidentMessage') 

    {{-- Statistics --}}
	<section class="fun-facts-section fun-facts-01 section-block" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 facts-block" style=" height: 150px;">
                    {{-- <h2><span>Professionalism at its best</span>Our excellent records preceeds us</h2>
					<p>
						With a track record of excellence, our commitment to quality and innovation is reflected in our records, 
						showcasing a history of successful partnerships and satisfied clients 
					</p>    --}} 
                        {{-- <div class="col-xs-12 col-md-3">
                            <i class="pe-7s-user " style="font-size: 50px;"></i>
							<h3 style="text-transform: capitalize"><span class="counter">15455</span>Students</h3>
						</div> <!-- .col-xs-6 --> --}}
						<div class="col-xs-12 col-md-3">
                            <i class="pe-7s-users" style="font-size: 50px;"></i>
							<h3 style="text-transform: capitalize"><span class="counter">7464</span>Members</h3>
						</div> <!-- .col-xs-6 -->
						<div class="col-xs-12 col-md-3">
                            <i class="pe-7s-note" style="font-size: 50px;"></i>
							<h3 style="text-transform: capitalize"><span class="counter">2432</span>NIPR hubs</h3>
						</div> <!-- .col-xs-6 -->
						<div class="col-xs-12 col-md-3">
                            <i class="pe-7s-camera" style="font-size: 50px;"></i>
							<h3 style="text-transform: capitalize"><span class="counter">43</span>Chapters</h3>
						</div> <!-- .col-xs-6 --> 
				</div> <!-- .col-md-6 -->
				{{-- <div class="col-md-5 col-md-offset-1 facts-block">
                 
					
				</div> <!-- .col-md-6 --> --}}
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .split-section -->
	
    {{-- FAQ --}}
	@if(count($faq)>0)
    <section class="accordion-section" style="background:#f5f5f5;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-group corporex-accordion accordion-style-01 radial" id="accordion" style="background-color: white; height: 391px">
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
				<h2>Endorsements</h2>
				<p>
					
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
						<h4 style="text-transform: unset">{{$item->title}}
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
