<div>
    @section('content')
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Training</h2>
					<ul class="bread-crumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Training</a></li>
						<li><a href="#">Annual Lectures</a></li>
						<li><a href="#">His Highness, Aminu Ado Bayero National <br> Integration Annual Lecture Series<</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <br>
    <br>
    <div class="container">
        <h1 class="entry-title"><a style="color: red" href="#"> Raymond Dokpesi Annual Lecture Series </a></h1>
        <p class="lead">
        </p>
        <div class="row">
            <div class="col-md-8">
                <div style="padding-bottom: 8%; margin-left: 5%;  text-align: justify;">
                    {!! $training->description !!}
                <p>

                </p>
            </div>
            </div>
            <div class="col-md-4 w-75" style="">

                <div class="list-group">
                @foreach ($training->tContent as $item)
                <a href="#" class="list-group-item list-group-item-action list-group-item-danger">
                    <p>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->year)->format('m-Y')  }}</p>
                </a>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- <div class="col-md-10">
            This is also one of the newly introduced lecture annual lecture series in Aminu Ado Bayero University.
        </div> --}}
    </div>
    <br>
    <br>
    <br>
    @endsection
 </div>
