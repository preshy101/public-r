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
        <h1 class="entry-title"><a style="color: red" href="#"> {{($memberUpgrade != null )?$memberUpgrade->title:''}} </a></h1>
        <p class="lead">
         {{($memberUpgrade != null )?$memberUpgrade->description:''}}
        </p>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset("./docs/member-upgrade/form1.jpeg")}}" class="img-fluid rounded-start" width="180px" height="170px" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body pl-5">
                  <h5 class="card-title">Upgrade Fellow Form 1</h5>
                  <p class="card-text">This is to fill to upgrade membership</p>
                  <a class="btn btn-danger" href="{{asset("./docs/member-upgrade/FORM-1-nomination-for-fellowship.pdf")}}"> <i class="fa fa-download"></i> download</a>
                </div>
              </div>
            </div>
          </div>
<hr>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset("./docs/member-upgrade/form2.jpeg")}}" class="img-fluid rounded-start"  width="180px" height="170px" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body pl-5">
                  <h5 class="card-title">Upgrade Fellow Form 2</h5>
                  <p class="card-text">This is to fill to upgrade membership</p>
                  <a class="btn btn-danger" href="{{asset("./docs/member-upgrade/FORM-2-SECTION_E-Nomination-for-Fellowship.pdf")}}"> <i class="fa fa-download"></i> download</a>
                </div>
              </div>
            </div>
          </div>

        <p> {!! ($memberUpgrade != null )?$memberUpgrade->fullText:'' !!}</p> 
        {{-- <a target="_blank" href="{{url('docs/membership_brochure.pdf')}}"> 
            <i class="fa fa-download"></i> Preview Document</a> --}}
    </div>
    <br>
    <br>
    <br> 
    @endsection
 </div>