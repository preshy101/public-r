@extends('welcome')
@section('content')
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Events </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li>
						<li><a href="#">News</a></li>
						<li><a href="#">Press Releases</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <section class="blog-section blog-post-11 page-content">
		<div class="container">

			<h1 class="entry-title"><a style="color: red" href="#">Press Releases</a></h1>
			<p class="lead"></p> 
            <section class="blog-section blog-post-07 page-content">
                <div class="container">

                    <div class="row blog-posts">
                        @if($pressReleases)
				        @foreach ($pressReleases as $item)
                        <div class="col-md-4">
                            <div class="post-wrapper post-grid">
                                <div class="image-wrapper">
                                    <img class="img-responsive" src="{{Storage::url($item->image)}}" alt="event image 00">
                                </div> <!-- .image-wrapper -->
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li>{{$item->created_at->diffForHumans()}}</li>
                                        {{-- <li><a href="#">{{$item->note}}</a></li> --}}
                                    </ul>
                                    <a href="/news/press-release/{{$item->id}}"><h3 class="entry-title">{{$item->title}}</h3></a>
                                    <div class="entry-content">
                                        <p>
                                            {{$item->description}}
                                        </p>
                                    </div>
                                    <a   class="btn-open" href="/news/press-release/{{$item->id}}">Read More</a>
                                </div> <!-- .post-content -->
                            </div> <!-- .post-wrapper -->
                        </div> <!-- .col-md-4 -->
                        @endforeach
                        @endif
                        {{ $pressReleases->links('pagination::default')}}
                    </div> <!-- .row -->
                    {{-- <div class="pagination-block text-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div> <!-- .btn-container --> --}}

                </div> <!-- .container -->
            </section> <!-- .portfolio-section -->
		</div> <!-- .container -->

	</section> <!-- .portfolio-section -->
    @endsection
