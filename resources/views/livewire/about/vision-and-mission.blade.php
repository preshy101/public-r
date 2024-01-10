<div>
    @section('content')
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>About Us</h2>
					<ul class="bread-crumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <br>
    <br>
    <div class="container">
        <h1 class="entry-title"><a style="color: red" href="#">{{($vision != null )?$vision->title:''}}</a></h1>
        <p class="lead">
         {{($vision != null )?$vision->description:''}}
        </p>
        {!! ($vision != null )?$vision->fullText:'' !!}
    </div>
    <br>
    <br>
    <br>
    
    @endsection
 </div>