@extends('welcome')
@section('content')
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Publication  </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li>
						<li><a href="#">Publication</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <br>
    <br>
{{-- {{dd($publications)}} --}}
    <div class="container">
        @foreach ($publications as $publication)
        <h1 class="entry-title"><a style="color: red" href="#"> {{$publication->title}}
            </a></h1>
            @if ($publication->banner)
            <img class="img-responsive"
            height="176px"
            style="height: 176px; image-rendering: auto; width: 100%"
            src="{{Storage::url($publication->banner)}}" alt="event image 00">
            @endif <br>
        <p class="lead">
            {{$publication->sub_title}} <br>
        </p>
            {!! $publication->content !!}
            @if ($publication->file)
            <a href="{{Storage::url($publication->file)}}" target="_blank" rel="noopener noreferrer" class="btn btn-danger"><i class="fa fa-download">Download</i></a>
            @endif
        @endforeach
    </div>
    {{$publications->links('vendor.livewire.links')}}
    <br>
    <br>
    <br>
    @endsection

