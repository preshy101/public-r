@extends('welcome')
@section('content')
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container">
				<div class="content-wrapper">
					<h2>  </h2>
					<ul class="bread-crumb">
						<li><a href="/">Home</a></li>
						<li><a href="#">Certificate</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->
    <br>
    <br>
{{-- {{dd($publications)}} --}}

<div class="container">
    <h1 class="entry-title "style="color: red"> Certificates </h1>
        <p class="lead">
            Sort for your Certificate
        </p>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <form action="{{route('education.exams.result.search')}}" method="post">
            @csrf
            <div class="row">


            <div class="col-md-3" >
                <label for="file">Type</label>
                <select required class="form-control" name="type" id="">
                    <option disabled selected>Choose Type</option>
                    <option value="NPR">NPR Week</option>
                    <option value="NPR">Membership</option>
                </select>
            </div>
            <div class="col-md-3" >
                <label for="file">Chapter</label>
                <select required class="form-control" name="type" id="">
                    <option disabled selected>Choose Chapter</option>
                    <option value="">Select One</option>
                    <option value="abia">Abia</option>
                    <option value="adamaya">Adamaya</option>
                </select>
            </div>
            <div class="col-md-3" >
                <label for="file">Year</label>
                <select name="year" id=""  class="form-control">
                    <option disabled selected>Select Year</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2020">2021</option>
                </select>
            </div>
        </div>
            <button type="submit" class="btn btn-danger btn-lg " style="margin-top:2%; background-color: red">Search</button>
        </form>

        <br><br>
        </div>

        @if (Session::has('certificate'))
        @php
              $certificate = Session::get('certificate');
        @endphp
        <h1>Certificate</h1>

            <div class="alert alert-primary">
                {{ $certificate->description }}
            </div>
            <br>
             <p>
                This is what we found: <a href="{{ $certificate->link }}">click here</a>
             </p>
        @endif

    <br>
    <br>
    <br>
    @endsection

