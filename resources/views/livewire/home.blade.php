

<div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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

	{{-- Partnership --}}
    @if ($publications)

    <div class="modal fade bd-example-modal-lg" id="myModalz" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

          <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title " style="color: red" id="exampleModalLongTitle">{{($publications->title)?$publications->title:''}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body p-3 " >
                <p class="lead">
                    {{($publications->sub_title)?$publications->sub_title:''}} <br>
                </p>
                @if ($publications->banner)
                <img src="{{Storage::url($publications->banner)}}" width="100%" alt="" srcset="">
                @endif
                <br>{!! ($publications->content)?$publications->content:'' !!}
                    <br>
                    @if ($publications->file)
                    <a href="{{Storage::url($publications->file)}}" target="_blank" rel="noopener noreferrer" class="btn btn-danger"><i class="fa fa-download">Download</i></a>
                    @endif
                </p>
                </div>
            </div>
        </div>
    </div>
    @endif

	<section class="intro-section intro-08 section-block" style="padding-bottom: 0%; padding-top: 2%">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-12" style="padding-top: 8px">
				<p>Premium Partners:</p>
				</div>
				<div class="col-md-10 col-sm-12" style="margin-bottom: 0%; ">
			<marquee scrollamount="2">
				<a href="http://www.hensekgroup.com" target="_blank" rel="noopener noreferrer"><img width="150px" style="margin-right: 35px;" src="{{asset('./img/hensek_logo.png')}}" alt="" srcset=""></a>
				<a href="https://ng.usembassy.gov" target="_blank" rel="noopener noreferrer"><img width="60px" style="margin-right: 35px;" height="60px" src="{{asset('./img/usm-nigeria-seal.png')}}" alt="" srcset=""></a>

                <a href="https://ogunstate.gov.ng" target="_blank" rel="noopener noreferrer"><img width="60px" style="margin-right: 35px;" height="60px" src="{{asset('./img/partner.png')}}" alt="" srcset=""></a>
                @foreach ($partners as $item)
                <a href="{{$item->website_link}}" target="_blank" rel="noopener noreferrer"><img width="{{$item->width}}px" style="margin-right: 35px;" height="{{$item->height}}px" src="{{Storage::url($item->logo)}}"  alt="" srcset=""></a>
                @endforeach
			</marquee>
				</div>
			</div>
		</div>
	</section>

    {{-- Key Features --}}
	<section class=" intro-08 section-block" style="padding-bottom: 0%; padding-top: 0%">
		{{-- <div class="container"> --}}
			<div class="row">
			<div class="col-lg-8 content-block" style="padding-left: 5%;
			{{-- padding-right: 5%;  --}}
			text-align: justify; margin-bottom: 2%
			text-justify: inter-word;">

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
					<h3 style="color: red; text-transform: unset" class="entry-title"><a style="color: red; text-transform: unset" href="https://portal.niprng.org.ng/events">Upcoming Events</a></h3>
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
									{{-- <li>{{$item->created_at->diffForHumans()}}</li> --}}
									<li><i class="fab fa-time"></i>{{date('d-m', strtotime($item->startDate))}} - {{ date('d-m-Y', strtotime($item->endDate))}}
										</li>
								</ul>
								<h3 style="text-transform: unset" class="entry-title"><a href="/resources/up-coming-events/{{$item->id}}">{{$item->title}}</a></h3>
								<div class="entry-content">
									<p>
										{{-- {{$item->description}} --}}
										{!! Str::words($item->description, 10, ' ...') !!}
									</p>
								</div>
                                @if($item->version != '##')
								<a class="btn-open" style="text-transform: unset" href="{{$item->version}}">Register</a>

                                @endif
							</div> <!-- .post-content -->
						</div> <!-- .post-wrapper -->
					</div> <!-- .col-md-4 -->
					@endforeach
					@endif
				</div> <!-- .row -->
				<div class="row">
				<a class="btn btn-main" wire:navigate href="/resources/up-coming-events">See More</a>
			</div>
		</div> <!-- .col-md-8 img-block -->


			<div class="col-lg-4  ">
			<div style="border-radius: 2%; " id="corporex-slider" class="corporex-slider corporex-slider-03 carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">

					@if (count($post) > 0)
					@foreach ($post as $index => $item)
					<li data-target="#corporex-slider" data-slide-to="{{$index}}" class="{{( $index == 0 )? 'active':'' }}"></li>
					@endforeach

				</ol> <!-- .carousel-indicators -->

				<div style="border-radius: 2%; padding-right: 5%; padding-left: 5%" class="carousel-inner">

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

								 <a class="btn btn-main" wire:navigate href="/news/posts/{{$item->slug}}">see more</a>

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
							<h3 style="text-transform: capitalize"><span id="memberStrength" class="counter">-</span>Members</h3>
						</div>

                        <!-- .col-xs-6 -->
						<div class="col-xs-12 col-md-3">
                            <i class="pe-7s-note" style="font-size: 50px;"></i>
							<h3 style="text-transform: capitalize"><span class="counter">8</span>NIPR hubs</h3>
						</div> <!-- .col-xs-6 -->
						<div class="col-xs-12 col-md-3">
                            <i class="pe-7s-camera" style="font-size: 50px;"></i>
							<h3 style="text-transform: capitalize"><span class="counter">30</span>Chapters</h3>
						</div> <!-- .col-xs-6 -->
				</div> <!-- .col-md-6 -->
				{{-- <div class="col-md-5 col-md-offset-1 facts-block">


				</div> <!-- .col-md-6 --> --}}
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .split-section -->

    {{-- FAQ --}}
	@if(count($faq)>1)
    <section class="accordion-section"
	{{-- style="background:#f5f5f5;" --}}
	>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-group corporex-accordion accordion-style-01 radial" id="accordion" style="background-color: white; height: 391px">
                        @foreach ($faq as $index => $item)
						<div class="panel"
						{{-- style="background:#f5f5f5;" --}}
						>
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
						src="{{asset('./img/toppng.com-3d-red-question-mark-free-png-3508x2540.png')}}" alt="hand shake image">
                    </div> <!-- .img-wrapper -->
                </div> <!-- .col-md-6 -->

				<a class="btn btn-main" href="{{route('faqs')}}">See More</a>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .accordion-section -->
	@endif
    {{-- Testimony --}}
	@if(count($testimony) > 0)
	<section class="testimonial-section section-block" style="background-color: url({{asset('../img/testimonial-bg-1.jpg')}}) center no-repeat" >
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
	{{-- <section class="partner-section partner-02 section-block">
		<div class="container">
			<div class="title-block">
				<h2>Our Partners</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore mollit anim id est laborum.
				</p>
			</div> <!-- .title-block -->
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="image-wrapper">
						<img src="http://via.placeholder.com/140x80" alt="partner image">
					</div> <!-- .image-wrapper -->
				</div> <!-- .col-md-3 -->

			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .partner-section -->
 --}}
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
    $(window).on('load', function() {
        if ("{{$publications}}") {

            var interval = setTimeout(function() {
                $('#myModalz').modal('show');
            }, 2000)
        }

        var host = 'https://portal.niprng.org.ng';
        var hostLocal = 'http://127.0.0.1:8000';
         $.ajax({
        url: hostLocal+'/api/member/strength',
        method: 'GET',
        // data: { query: value },
        success: function(response) {

          $('#memberStrength').text(response.member);
         console.log('AJAX call successful', response);
          // Process the response here
        },
        error: function(xhr, status, error) {
          console.error('AJAX call error', error);

        }
      });
    });
</script>
</div>
