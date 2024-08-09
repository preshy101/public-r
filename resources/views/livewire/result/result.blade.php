@extends('welcome')
@section('content')
<section class="hero-area">
    <div class="page-title-banner" >
        <div class="container">
            <div class="content-wrapper">
                <h2>Education  </h2>
                <ul class="bread-crumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">Examination</a></li>
                    <li><a href="#">Result</a></li>
                </ul>
            </div> <!-- .content-wrapper -->
        </div> <!-- .container -->
    </div> <!-- .page-title-banner -->
</section> <!-- .hero-area -->
<br>
<br>
<div class="container">
    <h1 class="entry-title "style="color: red"> Result </h1>
        <p class="lead">
            Search for your result
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
            <div class="col-md-3">
                <label for="file">Registration Number</label>
                <input required type="text" required name="reg" placeholder="search with Registration Number NIPR/LA/12345/01/01" class="form-control" >
            </div>

            <div class="col-md-3" >
                <label for="file">Program</label>
                <select required class="form-control" name="type" id="">
                    <option disabled selected>Choose Program</option>
                    <option value="all">All Programme</option>
                    <option value="CPR1">CPR1</option>
                    <option value="CPR2">CPR2</option>
                    <option value="DPR1">DPR1</option>
                    <option value="DPR2">DPR2</option>
                </select>
            </div>

            <div class="col-md-3" >
                <label for="file">Month</label>
           <select name="month"   id="" class="form-control">
            <option disabled selected>Select Month</option>
            <option value="march">March</option>
            <option value="june">June</option>
            <option value="july">July</option>
            <option value="october">October</option>
            <option value="november">November</option>
        </select>
    </div>
            <div class="col-md-3" >
                <label for="file">Year</label>
                <select name="year" id=""  class="form-control">
                    <option disabled selected>Select Year</option>
                    <option value="2020">2020</option>
                    <option value="2023">2023</option>
                </select>
            </div>
        </div>
            <button type="submit" class="btn btn-danger btn-lg " style="margin-top:2%; background-color: red">Search</button>
        </form>

        <br><br>
        @php
            $result = [];
        @endphp
        @if (Session::has('result'))
            @php
                $result = Session::get('result');
            @endphp
            <table class="table">
                <p>Examination Result</p>
            <tr>
                <th>SNO</th>
                <th>Month/Year</th>
                <th>Registration Number</th>
                <th>Course</th>
                <th>TU</th>
                <th>TP</th>
                <th>CGPA</th>
                <th>Remarks</th>

            </tr>
            <tbody>
                @foreach ($result as $key => $item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->month.'/'.$item->year}}</td>
                    <td>{{$item->registrationNumber}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->tu}}</td>
                    <td>{{$item->tp}}</td>
                    <td>{{$item->cgpa}}</td>
                    <td>{{$item->remarks}}</td>

                </tr>
                @endforeach


            </tbody>
        </table>
        @elseif(Session::has('error'))
        @php
        $error = Session::get('error');
        @endphp
        <p>

            {{ $error }}</p>
     @endif


</div>
<br>
<br>
<br>
@endsection
