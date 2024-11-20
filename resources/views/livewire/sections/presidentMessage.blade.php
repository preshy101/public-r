{{-- President Message --}}
@if (($president != null))
   <section class=" section-block" >
    <div class="container">
        <div class="row" >
            <div class="col-md-6 img-block">
                <img class="img-responsive rounded"

					src="{{Storage::url($president->image)}}"
                     style="height: 475px; border-radius: 2%"  alt="about image">


            </div> <!-- .col-md-6 img-block -->
            <div class="col-md-6 content-block">
                <h2 style="color: red; text-transform: unset"><span style="color: black; font-size: 25px">Meet the President </span> <br>
                    {{($president != null)?$president->title: "Mr President"}}
                </h2>
                <p>

                    {{($president != null)?$president->description:""}}
                </p>
                <p>
                    {{ ($president != null)?$president->note: "" }}
                </p>

                        <a class="btn btn-main" wire:navigate href="/team-members">Read More</a>

                    </div> <!-- .col-md-6 -->
                </div> <!-- .row -->
            </div> <!-- .container -->
        </section> <!-- .about-section -->
        @else

                {{-- src="{{asset('img/unseen-histories-G2vxuMlATxA-unsplash.jpg')}}" --}}
        @endif
        {{-- Our Team --}}
        @if (count($team)>= 1)
        <section class="team-section team-01 mt-0 section-block" style="padding-top: 0px">
            <div class="container">
                <div class="title-block">
                    <h2>Our Team</h2>
                    <p>
                a collective of passionate professionals committed to innovation, collaboration, and delivering excellence in every endeavor.
            </p>
        </div> <!-- .title-block -->
        <div class="row">
            @foreach ($team as $item)
            <div class="col-lg-3 col-md-6">
                <div class="img-wrapper">
                    <img class="img-responsive"
					src="{{Storage::url($item->image)}}"
                    width="400" style="height: 415px; border-radius: 2%"
                     alt="team member 01">
                </div> <!-- .img-wrapper -->
                <div class="member-info" style="background-color: red; color: white" >
                    <h4>{{$item->title}} <small>{{$item->description}}</small></h4>
                    @php
                       $eLinks = explode(",",$item->fullText);
                    //    $eLinks = strip_tags($tLinks);
                       $eLinkLength = count($eLinks);
                       $eLinkLength = $eLinkLength - 1;
                    @endphp
                    <ul class="social-links">
                        {{-- @php
                            dd($eLinkLength);
                        @endphp --}}
                        {{-- @for ($k = 0 ; $k < $eLinkLength; $k++)
                        @php
                            $Links = explode("|",$eLinks[$k]);
                            $icon = strip_tags($Links[0]);
                            $sLink = strip_tags($Links[1]);
                            @endphp
                        @if($icon == 'F')
                        <li><a href="{{$sLink}}"class="
                            facebook-link"><i class="fab fa-facebook"></i></a>
                        </li>
                            @elseif ($icon == 'X')
                        <li><a href="{{$sLink}}"class="twitter-link"><i class="fab fa-twitter"></i>
                        </a>
                        </li>
                            @elseif ($icon == 'I')
                        <li><a href="{{$sLink}}"
                            class="google-plus-link"><i class="fab fa-instagram"></i></a></li>
                            @elseif ($icon == 'L')
                        <li><a href="{{$sLink}}"
                            class="linkedin-link"><i class="fab fa-linkedin"></i></a></li>
                            @endif
                        @endfor --}}

                    </ul> <!-- .social-links -->


                </div> <!-- .member-info -->
            </div> <!-- col-lg-3 col-md-6 -->

            @endforeach


        </div> <!-- .row -->
        <center> <a class="btn btn-main "  wire:navigate href="/team-members">See More</a> </center>
    </div> <!-- .container -->
</section> <!-- .team-section -->
@endif
