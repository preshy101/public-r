<div>
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Events </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li> 
						<li><a href="/resources/up-coming-events">Events</a></li>
						<li><a href="#">
                            @if($event)
                             @foreach ($event as $item)
                            {{$item->title}}    
                            @endforeach
                            @endif
                        </a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    
	<section class="portfolio-details-section page-content">
		<div class="container">
			
			<div class="row">
                @if($event)
             @foreach ($event as $item)
                    
				<div class="col-md-12">
					<div class="item-wrapper">
						<img class="portfolio-f-img img-responsive" src="{{Storage::url($item->image)}}" alt="event image">
					</div> <!-- .item-wrapper -->
				</div> <!-- .portfolio-item -->
				<div class="col-md-8">
					<h2 class="portfolio-title">{{$item->title}}</h2>
					<a class="btn btn-narrow" href="{{$item->version}}">Register</a>
					<div class="portfolio-details-content">
						<p style="text-align: justify">
							{{$item->description}} <br>
                            {!!$item->fullText!!}
						</p>

					</div> <!-- .project-details-content -->
				</div> <!-- .col-md-8 -->
				<div class="col-md-4">
					<div class="portfolio-meta">
						<ul>
							<li><strong>Start Date</strong> {{$item->startDate}}</li>
							<li><strong>End Date</strong>{{$item->endDate}}</li>
							<li><strong>Note</strong></li>
							<li>{{$item->note}}</li>
						</ul>
					</div> <!-- .portfolio-meta -->
				</div> <!-- .col-md-4 -->
			</div> <!-- .row -->
            <br>
            <br>
            <br>
            <br>
			<div class="related-project-block">
				<h3 class="block-title">Some Moment Captured</h3>
				<div class="portfolio-section portfolio-style-02">
					<div class="row">
                        {{-- {{ dd($item)}} --}}
                        @if (count($item->imageVideo) > 0)
                        @foreach ($item->imageVideo as $item)
                        @foreach ($item->image as $eventImages)
                                                
						<div class="col-sm-4 portfolio-item">
							<div class="item-wrapper">
								<img class="img-responsive" src="{{Storage::url($eventImages)}}" alt="event image">
								<div class="portfolio-details">
									<a class="portfolio-popup" href="{{Storage::url($eventImages)}}"><span class="zoom-icon"></span></a>
									<div class="hover-content">
										<h3><a href="#">{{$item->note}}</a></h3>
										<p>{{$item->alternativeText}}</p>
									</div><!-- .hover-content -->
								</div> <!-- .portfolio-details -->
							</div> <!-- .item-wrapper -->
						</div> <!-- .portfolio-item -->

                        @endforeach
                        @endforeach
                        @endif
						 
					</div> <!-- .row -->
				</div> <!-- .portfolio-section portfolio-style-02 -->
			</div> <!-- .related-project-block --> 
            
            @endforeach
            @endif
		</div> <!-- .container -->
	</section> <!-- .portfolio-section -->

</div>
