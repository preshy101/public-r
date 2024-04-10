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
                    <li><a href="#">Register</a></li>
                </ul>
            </div> <!-- .content-wrapper -->
        </div> <!-- .container -->
    </div> <!-- .page-title-banner -->
</section> <!-- .hero-area -->
<br>
<br>
<div class="container">
    <h1 class="entry-title "style="color: red"> Members Register </h1>
        <p class="lead">
            Search the record to confirm your membership
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
        <form action="{{route('member_registry.search')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" required name="search" placeholder="search with Practice ID, Last name, Other Names, Phone Number, or email" class="form-control" >
            </div>
            <button type="submit" class="btn btn-danger btn-lg " style="background-color: red">Search</button>
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
            <tr>
                <th>SNO</th>
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
                    <td>{{$result->SNO}}</td>
                    <td>{{$result->LAST_NAME}}</td>
                    <td>{{$result->FIRST_NAME}}</td>
                    <td>{{$result->PHONE}}</td>
                    <td>{{$result->EMAIL}}</td>
                    <td>{{$result->GRADE}}</td>
                    <td>{{$result->PRACTICE_ID}}</td>
                    <td>{{$result->CHAPTER}}</td>
                    <td>{{$result->INDUCTED}}</td>
                    <td>{{$result->UPGRADED}}</td>
                    <td>{{$result->ORGANISATION}}</td>

                  @if ($result->Confirmed == 'No')

                  <td>
                    <a href="https://forms.gle/6pDTNGghLYSbjqFG7" target="_blank" class="btn btn-danger-outline" rel="noopener noreferrer">
                    <i class="fa fa-info"></i> Complain
                    </a></td>
                    <td>
                    <form action="{{route('member_registry.confirm',$result->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="record" value="{{$result->id}}">
                        <button type="submit" class="btn btn-success"><i class="fa-fa-check">Confirm</i></button>
                    </form>
                </td>
                @else
                <td class="text-success">
                    <div class="alert alert-success">  <i class="fa-fa-check">  Corfirmed</i> </div>
                </td>
                @endif
                </tr>
            </tbody>
        </table>
        {{-- @elseif(!Session::get('result'))
        <td>
            No Record Found!
        </td> --}}
        @endif


</div>
<br>
<br>
<br>
@endsection
