@extends('welcome')
@section('content')
<section class="hero-area">
    <div class="page-title-banner" >
        <div class="container">
            <div class="content-wrapper">
                <h2>Membership  </h2>
                <ul class="bread-crumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Registrar</a></li>
                </ul>
            </div> <!-- .content-wrapper -->
        </div> <!-- .container -->
    </div> <!-- .page-title-banner -->
</section> <!-- .hero-area -->
<br>
<br>
<div class="container">
    <h1 class="entry-title "style="color: red"> Members Registra </h1>
        <p class="lead">
            Search the record to confirm your your membership
        </p>

        {{-- <form action="" method="post"> --}}
            <div class="form-group">
                <input type="text" placeholder="search with code, first name or chapter" class="form-control" >
            </div>
            <button type="button" class="btn btn-danger btn-lg " style="background-color: red">Search</button>
        {{-- </form> --}}
        <br><br>
        {{-- <table class="table">
            <tr>
                <th>SN</th>
                <th>LAST NAME</th>
                <th>FIRST NAME</th>
                <th>PHONE</th>
                <th>EMAIL</th>
                <th>GRADE</th>
                <th>PRACTICE ID</th>
                <th>CHAPTER</th>
                <th>INDUCTED</th>
                <th>UPGRADED</th>
                <th>ORGANISATION </th>
                <th>Action </th>
            </tr>
            <tbody>
                <tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>

                    <tr></tr>
                </tr>
            </tbody>
        </table> --}}

</div>
<br>
<br>
<br>
@endsection
