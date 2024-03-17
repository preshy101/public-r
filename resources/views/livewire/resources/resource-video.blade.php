<div> 

    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Downloadable </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li> 
						<li><a href="#">Videos</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <section class="blog-section blog-post-11 page-content">
		<div class="container">
			
			<h1 class="entry-title"><a style="color: red" href="#">Video Gallery</a></h1>
			<p class="lead">our wonderful moments captured</p>
			<br>
			<div class="row blog-posts">

					<div class="col-md-4">
						<div class="img-wrapper">
							{{-- <a href="#"> --}}
								<video class="img-responsive" controls style="height: 540px;" 
								alt="image 00">	
								<source src="{{asset('./video/Dr_Ike_Neliaku.3gp')}}" />
								</video>
							{{-- </a> --}}
						</div> <!-- .img-wrapper -->
						<div class="post-content">
							<ul class="post-meta">
								<li>March 16th 2024</li>
								<li><a href="#"></a>an Interview on Spokespersons Summit </li>
							</ul>
							<h3 class="entry-title"><a href="#">an Interview on Spokespersons Summit Granted by the President</a></h3>
						</div> <!-- .post-content -->
						
						<p>
							an Interview on Spokespersons Summit Granted by the President
						</p>
						{{-- <a class="btn-open" href="#">Details</a> --}}
					</div> <!-- .col-md-4 -->

				<div class="col-md-4">
					<div class="img-wrapper">
						{{-- <a href="#"> --}}
							<video class="img-responsive" controls style="height: 540px;" 
							alt="image 00">	
							<source src="{{asset('./docs/video/video.mp4')}}" />
							</video>
						{{-- </a> --}}
					</div> <!-- .img-wrapper -->
					<div class="post-content">
						<ul class="post-meta">
							<li> </li>
							<li><a href="#"></a>25-03 - 28-03-2024</li>
						</ul>
						<h3 class="entry-title"><a href="#">2024 Nigerian Public Relations Week/AGM, Abeokuta, Ogun State</a></h3>
					</div> <!-- .post-content -->
					 
					<p>
						Theme: Leveraging Public Relations as a Critical Asset for Nigeria's Economic and Reputation Renaissance.
					</p>
					{{-- <a class="btn-open" href="#">Details</a> --}}
				</div> <!-- .col-md-4 -->


						


                @if($videos)
				@foreach ($videos as $item)  
 
					
		 
				{{-- <div class="col-md-4 col-sm-6">
					<div class="image-wrapper gradient-black">
						<video class="img-responsive" controls style="height: 540px;" 
						 alt="image 00">	
						 <source src="{{Storage::url($item->image)}}" />
						 </video>
						</div> <!-- .image-wrapper -->
					<div class="post-wrapper post-overlay">
						
						<div class="post-content">
							<ul class="post-meta">
								<li>{{$item->created_at->diffForHumans()}}</li>
								<li><a href="#"></a>{{$item->description}}</li>
							</ul>
							<h3 class="entry-title"><a href="#">{{$item->title}}</a></h3>
						</div> <!-- .post-content -->
					</div> <!-- .post-wrapper post-overlay -->
				</div> <!-- .col-md-4 --> --}}
				@endforeach
                @endif


				<div class="pagination-block text-center " style="background-color: brown; color: red
				">
					<ul>
						{{-- <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li> --}}
						{{ $videos->links('vendor.livewire.links') }} 
					</ul>
				</div> <!-- .btn-container -->

			 
			</div> <!-- .row --> 
		</div> <!-- .container -->
		
	</section> <!-- .portfolio-section --> 
</div>
