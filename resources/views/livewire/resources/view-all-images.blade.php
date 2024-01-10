<div> 

    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Resources </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li> 
						<li><a href="#">Images</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->

	<section class="portfolio-section portfolio-style-02 section-block">
		<div class="container">
			<div class="portfolio-sorting">
				<ul class="portfolio-category">
					{{-- <li data-filter="all">All</li>
					<li data-filter=".finance">Finance</li>
					<li data-filter=".marketing">Marketing</li>
					<li data-filter=".development">Development</li> --}}
				</ul>
			</div> <!-- .portfolio-sorting -->
			<div class="row portfolio-container">
            @if ($images)  
            @foreach ($images as $item) 
            @foreach($item->image as $image) 
				<div class="col-md-4 col-sm-6 mix portfolio-item finance">
					<div class="item-wrapper">
						<img class="img-responsive" src="{{Storage::url($image)}}" alt="{{Storage::url($image)}}">
						<div class="portfolio-details " style="background: red; ">
							<a class="portfolio-popup" href="{{Storage::url($image)}}"><span class="zoom-icon"></span></a>
							<div class="hover-content">
								{{-- <h3><a href="#">{{$item->note}}</a></h3> --}}
								<p>{{$item->alternativeText}}</p>
							</div><!-- .hover-content -->
						</div> <!-- .portfolio-details -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .portfolio-item -->
              
				@endforeach
				@endforeach
				@endif
			</div> <!-- .row --> 
		</div> <!-- .container -->
	</section> <!-- .portfolio-section -->


</div>
