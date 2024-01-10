<div>
    @section('content')
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Students  </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li>
						<li><a href="#">Student</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <br>
    <br>
    <div class="container">
        <h1 class="entry-title"><a style="color: red" href="#"> {{($curriculum != null )?$curriculum->title:''}} </a></h1>
        <p class="lead">
         {{($curriculum != null )?$curriculum->description:''}}
        </p>
        {!! ($curriculum != null )?$curriculum->fullText:'' !!}
    </div>
    <br>
    <br>
    <br> 
    @endsection
 </div>