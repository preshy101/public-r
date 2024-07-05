<div>
    @section('content')

    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>About Us</h2>
					<ul class="bread-crumb">
						<li><a href="\">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <br>
    <br>
    <div class="container">
        <h1 class="entry-title"><a style="color: red" href="#"> FAQ </a></h1>
        <p class="lead"> Frequently Asked Questions
        </p>
    </div>
    <section class="accordion-section"
	{{-- style="background:#f5f5f5;" --}}
	>
        <div class="container">
            <div class="row">
                <div class="col-md-8" >
                    <div style="padding: 45px; margin-bottom: 5%" class="panel-group corporex-accordion accordion-style-01 radial" id="accordion" style="background-color: white; height: 391px">
                        @foreach ($faqs as $index => $item)
						<div class="panel"
						{{-- style="background:#f5f5f5;" --}}
						>
                            <div class="panel-heading {{($index == 0)? 'active':''}}">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsez{{$index}}">
                                       {{$item->title}}
                                    </a>
                                </h4><!-- .panel-title -->
                            </div> <!-- .panel-heading -->
                            <div id="collapsez{{$index}}" class="panel-collapse collapse {{($index == 0)? 'in':''}}">
                                <div class="panel-body">
                                    <p>
                                        {{ $item->description}}
                                    </p>
                                </div> <!-- .panel-body -->
                            </div> <!-- .panel-collapse -->
                        </div> <!-- .panel panel-default -->
						@endforeach

                    </div> <!-- .panel-group -->
                    {{-- {{$faqs->links('vendor.livewire.links')}} --}}
                </div> <!-- .col-md-6 -->
                <div class="col-md-4">
                    <div class="image-wrapper">
                        <img class="img-responsive"
						style="height: 550px"
						src="{{asset('./img/simone-secci-49uySSA678U-unsplash.jpg')}}" alt="hand shake image">
                    </div> <!-- .img-wrapper -->
                </div> <!-- .col-md-6 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .accordion-section -->
    @endsection
 </div>
