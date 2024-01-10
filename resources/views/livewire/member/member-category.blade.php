<div>
    @section('content')
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Membership  </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li>
						<li><a href="#">Membership</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <br>
    <br>
    
    <div class="container">
        <h1 class="entry-title"><a style="color: red" href="#"> {{($memberCategory != null )?$memberCategory->title:''}} </a></h1>
        <p class="lead">
         {{($memberCategory != null )?$memberCategory->description:''}}
        </p>
        <p> {!! ($memberCategory != null )?$memberCategory->fullText:'' !!}</p> 
        <a target="_blank" href="{{url('docs/membership_brochure.pdf')}}"> 
            <i class="fa fa-download"></i> Preview Document</a>
    </div>
    <br>
    <br>
    <br> 
    @endsection
 </div>