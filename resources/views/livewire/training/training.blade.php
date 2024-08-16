<!-- resources/views/excel-import.blade.php -->

@extends('welcome')

@section('content')
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Training</h2>
					<ul class="bread-crumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Training</a></li>
						<li><a href="#">{{ $training->title }}</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <br>
    <br>
    <div class="container">
        <h1 class="entry-title"><a style="color: red" href="#"> {{ $training->title }} </a></h1>
    </div>
        <div class="row">
            <div class="col-md-8">
                <div style="padding-bottom: 8%; margin-left: 5%;  text-align: justify;">
                    @if (Str::length($content->image))
                    <img src="{{ Storage::url($content->image) }}" alt="">
                    @endif
                    <br>
                    <br>
                    {!! $content->content !!}
                <p>

                </p>
            </div>
            </div>
            <div class="col-md-4 w-75" style="">

                <div class="list-group">
                @foreach ($training->tContent as $item)
                <a href="{{ route('training.vew',[$training->id, $item->id]) }}" class="list-group-item list-group-item-action list-group-item-danger">
                    <p>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->year)->format('m-Y')  }}</p>
                </a>
                    @endforeach
                </div>
            </div>
        </div>
        <p class="lead">
        </p>
<br><br>
@endsection
