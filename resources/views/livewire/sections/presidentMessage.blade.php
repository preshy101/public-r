{{-- President Message --}}
@if (($president != null)) 
   <section class="about-section section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img-block">
                <img class="img-responsive rounded" 
                
					src="{{Storage::url($president->image)}}"  
                     style="height: 475px; border-radius: 2%"  alt="about image">  
                
              
            </div> <!-- .col-md-6 img-block -->
            <div class="col-md-6 content-block">
                <h2><span>Meet the president </span> 
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
        @if (count($team)> 0)
        <section class="team-section team-02 mt-0 section-block" style="padding-top: 0px">
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
                     {{--  
                    <ul class="social-links">
                      <li><a href="#" class="facebook-link"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter-link"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-plus-link"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul> <!-- .social-links --> 
                    --}}

                </div> <!-- .member-info -->
            </div> <!-- col-lg-3 col-md-6 -->

            @endforeach
             
            
        </div> <!-- .row -->
        <center> <a class="btn btn-main "  wire:navigate href="/team-members">See More</a> </center> 
    </div> <!-- .container -->
</section> <!-- .team-section -->
@endif