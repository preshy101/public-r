<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">

	<!-- TITLE -->
	<title>Nigerian Institute of Public Relations (NIPR) </title>

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700%7CRoboto:400,400i,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/pe-icon-7-stroke.css')}}">

	<!-- LIBRARIES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css')}}">
	<!-- STYLES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}">
	<link rel="icon" href="{{asset('img/masthead.png')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <style>
        /* #contact:hover {
        background: white;
        color: red;
        border-color: white
    }*/
        nav {
            position: fixed;
            top: 0px;
            }

    .button {
      background-color: #004A7F;
      -webkit-border-radius: 10px;
      border-radius: 10px;
      border: none;
      color: #FFFFFF;
      cursor: pointer;
      display: inline-block;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      -webkit-animation: glowing 1500ms infinite;
      -moz-animation: glowing 1500ms infinite;
      -o-animation: glowing 1500ms infinite;
      animation: glowing 1500ms infinite;
    }
    @-webkit-keyframes glowing {
      0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
      50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
      100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
    }

    @-moz-keyframes glowing {
      0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
      50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
      100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
    }

    @-o-keyframes glowing {
      0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
      50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
      100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
    }

    @keyframes glowing {
      0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
      50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
      100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
    }
    @-webkit-keyframes glowing {
      0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
      50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
      100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
    }

    @-moz-keyframes glowing {
      0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
      50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
      100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
    }

    @-o-keyframes glowing {
      0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
      50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
      100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
    }

    @keyframes glowing {
      0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
      50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
      100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
    }
    </style>

  @livewireStyles
</head>
<body class="home-11">
    @include('livewire.includes.header')
    {{$slot}}
    @yield('content')

    <footer class="site-footer" >
        <div class="contact-info" style="background-color: red">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-box" style="background-color: white; color: red" ><i class="fa fa-map-marker"></i></div>
                        <p>Suite 4, Block A, A R O Plaza, Plot 2105,

                            Herbert Macaulay Way, Wuse, Zone 6, Abuja</p>
                    </div> <!-- .col-md-4 -->
                    <div class="col-md-4">
                        {{-- <div class="icon-box" style="background-color: white; color: red" ><i class="fa fa-phone"></i></div>
                      <br>  <a href="#">0701 038 3277, 0909 436 7076</a> --}}
                    </div> <!-- .col-md-4 -->
                    <div class="col-md-4">
                        {{-- <div class="icon-box" style="background-color: white; color: red" >

                        </div> --}}<br>
                        <ul class="list-inline footer-social">
                            <li><a href="https://web.facebook.com/NIPROFFICIALPAGE?mibextid=LQQJ4d&_rdc=1&_rdr"><i class="fab fa-facebook fa-2x"></i></a></li>
                            <li><a href="https://twitter.com/niprofficial"><i class="fab fa-twitter fa-2x"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/nigerian-institute-of-public-relations-7600b5a5/"><i class="fab fa-linkedin fa-2x"></i></a></li>
                            <li><a href="https://www.instagram.com/niprofficial/"><i class="fab fa-instagram fa-2x"></i></a></li>
                            <li><a href="https://www.youtube.com/@niprofficial"><i class="fab fa-youtube fa-2x"></i></a></li>
                            <li><a href="https://www.tiktok.com/@niprofficial"><i class="fab fa-tiktok fa-2x"></i></a></li>
                        </ul> <!-- .footer-social -->
                    </div> <!-- .col-md-4 -->


                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .cntact-info -->

    </footer> <!-- .site-footer -->
    @livewireScripts

    @include('livewire.includes.footer')
</body>
</html>

