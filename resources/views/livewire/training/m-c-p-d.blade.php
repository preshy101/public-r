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
						<li><a href="#">MCPD</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <br>
    <br>
    <div class="container">
        <h1 class="entry-title"><a style="color: red" href="#"> MCPD </a></h1>
        <p class="lead">
            THE MANDATORY CONTINUING DEVELOPMEMT PROGRAMME (MCPD)
        </p>
        {{-- <div class="col-md-10" style="padding-bottom: 8%">
        As part of its responsibilities, the Nigerian Institute of Public Relations
        embarks on trainings to enhance the competencies of professional public
        relations practitioners and also expose them to modern PR trends that would aid service delivery.
        <br><br>
        These trainings exposes and better inform members of their role as public relations practitioners
        arming them with the up-to-date knowledge and practical skills that would help them serve their
        Institutions and principals better.
        <br><br>
        Also every member needs a minimum of three (3) MCPDs for upgrade from one level of membership to another.
        The MCPD is bi-monthly.
        <br><br>
        The Mandatory Continuing Professional Development (MC PD) programme offered by the Nigerian Institute of Public Relations provides members
        with ongoing professional training to stay abreast of the latest trends in public relations and communication. This initiative aims to
        enhance members' professional skills, reputational standing, and financial value, ensuring they remain at the forefront of the industry.
    </div> --}}
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
    </div>

    @endsection
 </div>
