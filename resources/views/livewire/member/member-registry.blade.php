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
        {{-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}  <a href="https://forms.gle/6pDTNGghLYSbjqFG7" target="_blank" class="btn btn-danger-outline" rel="noopener noreferrer">
                <i class="fa fa-info"></i> Complain
                </a>
        </div>
        @endif --}}
        {{-- <form action="{{route('member_registry.search')}}" method="post"> --}}
            {{-- @csrf --}}
            <div class="form-group">
                <input type="text" required name="search" placeholder="search with Practice ID, 0154*** 141***" class="form-control" >
            </div>

            <button id="btn" type="button" class="btn btn-danger btn-lg " onclick="fetchMember()" style="background-color: red">
                <i id="spinner" class="fa fa-spinner " style="visibility: hidden"></i>
                <i id="search" class="fa fa-search"></i> Search
            </button>
        {{-- </form> --}}

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
                    <td>{{$result->ORGANIZATION}}</td>

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
                    <div class="alert alert-success">  <i class="fa-fa-check">  Confirmed</i> </div>
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
        <div id="data-container"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
          const button = document.getElementById('btn');
                const spin = document.getElementById('spinner');
                const search = document.getElementById('search');
            // API endpoint (example: JSONPlaceholder)
            function fetchMember() {
                // Get the value from the input field
                const searchValue = document.querySelector('input[name="search"]').value;
                // const apiUrl = `http://127.0.0.1:8002/api/member/practice/id/${searchValue}`; // Replace with your API URL
                const apiUrl = `https://portal.niprng.org.ng/api/member/practice/id/${searchValue}`; // Replace with live API URL


                button.disabled = true;
                spin.style.visibility = 'visible';
                search.style.visibility = 'hidden';

                // Fetch data http://127.0.0.1:8001/membership/registry
                $.ajax({
                url: apiUrl,
                method: 'GET',
                // data: { query: value },
                success: function(response) {

                button.disabled = false;
                spin.style.visibility = 'hidden';
                search.style.visibility = 'visible';

                console.log('AJAX call successful', response);
                // Process the response here
                if (response.status) {
                displayDataInTable(response);
                } else {
                    let html = `<div class="alert alert-danger">No record found    <a href="https://forms.gle/6pDTNGghLYSbjqFG7" target="_blank" class="btn btn-danger-outline" rel="noopener noreferrer">
                    <i class="fa fa-info"></i> Complain
                    </a></div>`;
                document.getElementById('data-container').innerHTML = html;
                }
                },
                error: function(xhr, status, error) {
                console.error('AJAX call error', error);

                }
            });
            }

            // Function to create table
            function displayDataInTable(userx) {

                let html = '<table class="table table-stripped stripped" border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">';

                // Table headers (customize based on your API's data structure)
                html += '<tr>';
                html += '<th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th> <th>Membership grade</th> <th>Action</th> ';
                html += '</tr>';

                // Table rows
                $.each(userx.member, function(index, user) {
                    html += '<tr>';
                        html += `<td>${user.first_name}</td>`;
                    html += `<td>${user.last_name}</td>`;
                    html += `<td>${user.email}</td>`;
                    html += `<td>${user.phone_number}</td>`;
                    html += `<td>${userx.category.category_name}</td>`; // Nested data example
                    html += ` <td>
                    <a href="https://forms.gle/6pDTNGghLYSbjqFG7" target="_blank" class="btn btn-danger-outline" rel="noopener noreferrer">
                    <i class="fa fa-info"></i> Complain
                    </a></td>`; // Nested data example
                    html += '</tr>';
                    });
                html += '</table>';
                document.getElementById('data-container').innerHTML = html;
            }
        </script>

</div>
<br>
<br>
<br>
@endsection
