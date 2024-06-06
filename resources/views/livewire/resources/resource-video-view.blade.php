<div>

    @extends('welcome')
    @section('content')
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

                @if($videos)
				@foreach ($videos as $item)

            @foreach($item->image as $vid)


				<div class="col-md-4 col-sm-6">

						<video class="img-responsive" controls style="height: 540px;"
						 alt="image 00">
						 <source src="{{Storage::url($vid)}}" />
						 </video>



                    <div class="post-content">
						<ul class="post-meta">
							<li> {{$item->created_at->diffForHumans()}}</li>
							<li><a href="#"></a>{{$item->cms->description}}</li>
						</ul>
						<h3 class="entry-title"><a href="#">{{$item->cms->title}}</a></h3>
					</div> <!-- .post-content -->

					<p>
                        {!!$item->cms->fullText!!}
                    </p>
				</div> <!-- .col-md-4 -->
				@endforeach
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
						{{-- {{ $videos->links('vendor.livewire.links') }} --}}
					</ul>
				</div> <!-- .btn-container -->


			</div> <!-- .row -->
		</div> <!-- .container -->

	</section> <!-- .portfolio-section -->
</div>
@endsection
