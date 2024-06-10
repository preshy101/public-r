@extends('welcome')
@section('content')
<style>
    .link-item {
        margin-bottom: 20px;
    }
    .thumbnail {

        height: auto;
    }
</style>
<section class="hero-area">
    <div class="page-title-banner" >
        <div class="container">
            <div class="content-wrapper">
                <h2>Newslinks </h2>
                <ul class="bread-crumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">NewesLink</a></li>
                </ul>
            </div> <!-- .content-wrapper -->
        </div> <!-- .container -->
    </div> <!-- .page-title-banner -->
</section> <!-- .hero-area -->
<section class="blog-section blog-post-11 page-content">
    <div class="container">

        <h1 class="entry-title"><a style="color: red" href="#"> Newslinks </a></h1>
        <p class="lead">News Rush</p>
        <br>
        <div class="row blog-posts">

            <ul>
                @foreach($links as $link)
                    <li class="link-item">
                        <a target="_blank" href="{{ $link->url }}">
                            <img src="{{ $link->thumbnail }}" width="100%" height="50%" alt="Thumbnail" class="thumbnail">
                        </a>
                        <h2> {{ $link->title }}</h2>
                        <p>{{ $link->description }}</p>
                        <a href="{{$link->url}}" target="_blank" class="btn btn-main" rel="noopener noreferrer"> See More </a>
                        <hr>
                    </li>
                @endforeach
            </ul>
           <div style="position: static">
            {{ $links->links('pagination::default')}}
           </div>

        </div> <!-- .row -->
        </div> <!-- .container -->

        </section> <!-- .portfolio-section -->
@endsection
