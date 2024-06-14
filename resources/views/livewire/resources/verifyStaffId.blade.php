

    @extends('welcome')
    @section('content')
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>Verification </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li>
						<li><a href="#">Staff </a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <section class="blog-section blog-post-11 page-content">
		<div class="container">

			<h1 class="entry-title"><a style="color: red" href="#">Staff ID Card</a></h1>
			<p class="lead"></p>
			<br>
			<div class="row blog-posts">

                @if(!empty($data))

						<img class="col-md-4 col-sm-10 img-responsive" controls style="height: 305px;"
                        src="{{Storage::url($data->picture)}}" alt="passport">
                    <div class="col-md-6 col-sm-10">
                    <div class="post-content col-md-3 col-sm-10">
                        <label for="">ID Number</label>
                        <input type="text" class="form-control" readonly value="{{$data->idNumber}}">
					</div> <!-- .post-content -->

                    <div class="post-content col-md-3 col-sm-10">
                        <label for="">First names</label>
                        <input type="text" class="form-control" readonly value="{{$data->firstname}}">
					</div> <!-- .post-content -->

                    <div class="post-content col-md-3 col-sm-10">
                        <label for="">Other names</label>
                        <input type="text" class="form-control" readonly value="{{$data->lastname}}">
					</div> <!-- .post-content -->

                    <div class="post-content col-md-4 col-sm-10">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" readonly value="{{$data->phone}}">
					</div> <!-- .post-content -->

                    <div class="post-content col-md-6 col-sm-10">
                        <label for="">Email</label>
                        <input type="text" class="form-control" readonly value="{{$data->email}}">
					</div> <!-- .post-content -->

                    <div class="post-content col-md-6 col-sm-10">
                        <label for="">Designation</label>
                        <input type="text" class="form-control" readonly value="{{$data->designation}}">
					</div> <!-- .post-content -->

				</div> <!-- .col-md-4 -->
				@else
                <p class="text-danger" style="color: red">Invalid ID Card</p>
                @endif



			</div> <!-- .row -->
		</div> <!-- .container -->

	</section> <!-- .portfolio-section -->
</div>
@endsection
