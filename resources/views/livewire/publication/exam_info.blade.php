@extends('welcome')
@section('content')
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Exam Information  </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li>
						<li><a href="#">Education</a></li>
						<li><a href="#">Examinations</a></li>
						<li><a href="#">Exam Information</a></li>
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
            @if ($publication->image)
            <img class="img-responsive"
            {{-- height="176px" --}}
            {{-- style="height: 176px; image-rendering: auto; width: 100%" --}} 
            src="{{Storage::url($publication->image)}}" alt="exam image 00">
            @endif <br>
        <p class="lead">
            {{$publication->description}} <br>
        </p>
            {!! $publication->body !!}
           
        @endforeach
        @if(empty($publications))
        <p>No Exam Information added yet :(</p>
        @endif
    </div>
    <center>

        {{$publications->links('pagination::default')}}
    </center>
    <br>
    <br>
    <br>
    @endsection

