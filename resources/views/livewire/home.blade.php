

<div>
	{{-- @section('content') --}}
    {{-- Slider --}}
	{{-- @if (count($slide) > 0)
     <section class="hero-area">
		<div id="corporex-slider" class="corporex-slider corporex-slider-03 carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				@if ($slide != null)
				@foreach ($slide as $index => $item)
				<li data-target="#corporex-slider" data-slide-to="{{$index}}" class="{{( $index == 0 )? 'active':'' }}"></li>

				@endforeach

			</ol> <!-- .carousel-indicators -->

			<div class="carousel-inner">

				@foreach ($slide as $index => $item)
				<div class="item caption-left gradient-left-dark {{( $index == 0 )? 'active':'' }}" >
					<img class="slider-bg img-responsive"
					src="{{Storage::url($item->image)}}"
					alt="slider image 01">
					<div class="container">

						<div class="carousel-caption">
							<h1 class="h1-extra">
							 <!-- <span>N.I.P.R</span> -->
								{{$item->title}}</h1>
							<p class="lead" style="color: white;">
								{!!$item->description!!}
							</p>
							<!-- <a class="btn btn-main" href="#">learn more</a> -->
						</div> <!-- .carousel-caption -->
					</div> <!-- .container -->
				</div> <!-- .item -->
				@endforeach

			</div> <!-- .carousel-inner -->

			<!-- Controls -->
  			<a class="left carousel-control" href="#corporex-slider" role="button" data-slide="prev">
  				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  				<span class="sr-only">Previous</span>
  			</a> <!-- .carousel-control -->

  			<a class="right carousel-control" href="#corporex-slider" role="button" data-slide="next">
  				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  				<span class="sr-only">Previous</span>
  			</a> <!-- .carousel-control -->
		@endif
	</div> <!-- .carousel -->
	</section> <!-- .hero-area -->
	<!-- Slideshow container -->
	@endif --}}

	{{-- Partnership --}}

    <div class="modal fade bd-example-modal-lg" id="myModalz" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

          <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title " style="color: red" id="exampleModalLongTitle">SPECIAL DIAMOND ANNIVERSARY PUBLICATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body p-3 " >
                <p class="lead">
                    From Strength to Brilliance: 60 Years of Public Relations Practice in Nigeria <br>
                </p>
                <p>
                    The Nigerian Institute of Public Relations is pleased to announce a call for papers for an
                    upcoming publication titled "From Strength to Brilliance: 60 Years of Public Relations
                    Practice in Nigeria." This publication aims to provide a comprehensive understanding of
                    the evolution, challenges, and achievements of public relations in Nigeria over the past
                    60 years.
                    <br>
                    The relevance of public relations practice in Nigeria cannot be overstated, as it plays a
                    vital role in shaping perceptions, managing reputations, and influencing public opinion.
                    This publication seeks to explore the growth and impact of public relations in Nigeria,
                    shedding light on its journey from strength to brilliance.
                    <br>
                    We invite researchers, scholars, practitioners, and industry experts to submit original
                    research articles, case studies, and conceptual papers that explore diverse aspects of
                    public relations practice in Nigeria.
                </p>
                <ol> <strong>Objectives of the special publication:</strong>
                   <li>To showcase the milestones and achievements of NIPR throughout its diamond
                    anniversary years.
                    </li>
                    <li>
                    To explore the evolution and growth of public relations in Nigeria, emphasizing the
                    contributions of NIPR and its members.
                    </li>
                    <li>
                        To highlight the impact of public relations in various sectors of Nigerian society and
                        the positive influence of NIPR.
                    </li>
                    <li>
                        To emphasize NIPR's role in advocating for professional standards, ethics, and
                    continuous learning within the PR community.
                    </li>
                    <li>
                        To envision the future of public relations in Nigeria and the evolving role of NIPR in
                    shaping that future.
                    </li>
                    <li>
                        To inspire and educate current and aspiring PR professionals, students, academics,
                    and industry stakeholders on the role of public Relations in national development.
                    </li>

                    </ol>
        <br>
                    <ol class="pl-5" >
                      <strong>Scope </strong> <br>
                        Topics of interest include, but are not limited to:
                    <li>
                         Historical analysis of key milestones in public relations practice in Nigeria
                            <ol style="list-style-type: circle">
                                <li>Discuss the historical context leading to the establishment of NIPR.</li>
                                <li>Highlight the vision, mission, and objectives of NIPR's founding members.</li>
                                <li>Explore the challenges faced during the formative years and how they were
                                overcome.</li>
                                <li>
                                    Trace the growth and development of public relations as a profession in Nigeria
                                through personal accounts and reminisces of its members.
                                </li>
                                <li>
                                    Examine the key milestones, initiatives, and contributions made by NIPR and its
                                members.
                                </li>
                            </ol>
                        </li><br>
                    <li>
                        The role of public relations in nation-building and promoting socio-economic
                        development.
                        <ol style="list-style-type: circle">
                            <li>
                                Explore the role of public relations in various sectors in Nigeria, such as
                                government, business, NGOs, and the media.
                            </li>
                                <li>
                                    Showcase successful PR campaigns and case studies that highlight the impact of
                                    PR and or NIPR.
                                </li>
                                <li>
                                    Discuss the societal benefits brought about by effective PR strategies in Nigeria.
                                </li>
                                <li>
                                    Discuss the role of NIPR in advancing national development and particularly the
                                    Public Relations landscape in Nigeria.
                                </li>
                        </ol>

                    </li><br>
                    <li>
                        Ethical considerations and challenges in public relations practice in Nigeria.
                        <ol style="list-style-type: circle">
                            <li>Examine the imperative of ethical revolution in modern public relations practice
                                with relevant case studies from across the globe
                            </li>
                            <li>
                                Highlight NIPR's advocacy efforts in promoting professionalism, excellence and
                                    high ethical standards in Public Relations practice.
                            </li>
                            <li>
                                Examine the development and enforcement of codes of conduct and professional
                                    development programmes in Nigeria.
                            </li>
                            <li>
                                Discuss collaborations and partnerships that aim to improve the quality and
                                reputation of the PR profession.
                            </li>
                        </ol>

                    </li><br>
                    <li>
                        The impact of digital media and technology on public relations strategies in Nigeria.
                        <ol style="list-style-type: circle">
                            <li>
                                Discuss emergence and adoption rates of Digital Media in Nigeria.
                            </li>
                            <li>
                                Traditional PR Strategies: Overview of traditional methods and challenges.
                            </li>
                            <li>
                                Examine the Impact of Digital Media on tradional PR strategies in terms of
                        changes in communication, audience behavior, and media landscape.
                            </li>
                            <li>
                                Discuss the transformation of PR Strategies: Integration of digital channels, data
                        analytics, and storytelling.
                            </li>
                            <li>Examine the challenges: Digital literacy, privacy, and crisis management
                        considerations.
                            </li>
                            <li>
                                Explore some case studies in Nigeria: Examples of successful digital PR
                                campaigns and lessons learned.
                            </li>
                            <li>
                                Discuss future trends: Predictions and strategies for adapting to technological
                                                changes.
                            </li>
                        </ol>
                    </li>
                    <br>
                    <li>
                        Crisis management and reputation building in the Nigerian context.
                        <ol style="list-style-type: circle">
                            <li>
                                Discuss issues in crisis management in Nigeria: the nature of crises in Nigeria,
                                including political, economic, and social dimensions.
                            </li>
                            <li>
                                Explore the significance of reputation in Nigerian society, business, and
                            governance.
                            </li>
                            <li>
                                Analyze best practices and case studies of effective crisis response in Nigeria.
                            </li>
                            <li>
                                Discuss approaches for cultivating a positive reputation through transparency,
                                accountability, and stakeholder engagement.
                            </li>
                            <li>
                                Examine some unique challenges faced in crisis management and reputation
                                building within the Nigerian context, such as cultural factors, media landscape,
                                and regulatory environment.
                            </li>
                            <li>
                                Future Directions: Propose strategies for enhancing crisis resilience and
                                reputation management in Nigeria's evolving socio-political landscape.
                            </li>
                        </ol>
                    </li>
                    <br>
                    <li>
                        Public relations and corporate social responsibility in Nigeria.
                        <ol style="list-style-type: circle">
                            <li>
                                Discuss corporate social responsibility (CSR) and its relationship with public
                                relations (PR) in Nigeria.
                            </li>
                            <li>
                                Examine CSR from a PR perspective within the Nigerian context.
                            </li>
                            <li>
                                Overview of CSR initiatives undertaken by Nigerian companies highlighting the
                                role of PR in shaping CSR strategies and communication.
                            </li>
                            <li>
                                Analysis of how CSR activities influence relationships with stakeholders, including
                                communities, employees, and investors.
                            </li>
                            <li>
                                Importance of transparent and authentic communication in CSR efforts.
                            </li>
                            <li>
                                Address cultural, social, and economic factors affecting CSR implementation in
                                Nigeria.
                            </li>
                            <li>
                                Examine CSR as a strategic PR tool for reputation enhancement and brand
                                differentiation.
                            </li>
                            <li>
                                Discuss successful CSR campaigns and partnerships in Nigeria highlighting the
                                lessons learned from challenges and failures in CSR communication.
                            </li>
                            <li>
                                Analyse emerging trends in CSR and PR integration and make recommendations
                                for maximizing the impact of CSR on public relations outcomes in Nigeria.
                            </li>
                        </ol>
                    </li>
                    <br>
                    <li>
                        The intersection of public relations and politics in Nigeria.
                        <ol style="list-style-type: circle">
                            <li>
                                Define the intersection of public relations (PR) and politics in Nigeria and its
                                significance.
                            </li>
                            <li>
                                Explore the historical and contemporary role of PR in shaping political narratives,
                                election campaigns, and governance.
                            </li>
                            <li>
                                Analyze PR tactics used by political parties, candidates, and government
                            agencies in Nigeria, including media relations, social media campaigns, and
                            image management.
                            </li>
                            <li>
                                Discuss how PR activities influence public perception, voter behavior, and
                            political outcomes in Nigeria.
                            </li>
                            <li>
                                Address ethical dilemmas and challenges related to PR practices in Nigerian
                            politics, such as misinformation, propaganda, and manipulation.
                            </li>
                            <li>
                                Evaluate the role of regulatory bodies and accountability mechanisms in
                            overseeing PR activities within the political sphere.
                            </li>
                            <li>
                                Examine notable PR campaigns and controversies in Nigerian politics to illustrate
                            key concepts and dynamics.
                            </li>
                            <li>
                                Discuss emerging trends and potential developments at the intersection of PR
                            and politics in Nigeria.
                            </li>
                        </ol>
                    </li><br>
                    <li>
                        Public relations education and professional development in Nigeria.
                        <ol style="list-style-type: circle">
                            <li>
                                Examine NIPR's commitment to building capacity and promoting continuous
                                learning for PR professionals.
                            </li>
                            <li>
                                Explore training programs, seminars, conferences, and networking opportunities
                                organised by NIPR.
                            </li>
                            <li>
                                Include success stories of PR professionals who have benefited from NIPR's
                                capacity-building initiatives.
                            </li>
                        </ol>
                    </li><br>
                    <li>
                        NIPR and the Future of Public Relations in Nigeria:
                        <ol style="list-style-type: circle">
                            <li>Explore the challenges and opportunities awaiting NIPR and the PR profession in
                            Nigeria.</li>
                            <li> Discuss the importance of adapting to technological advancements and global PR
                            trends.</li>
                            <li>
                                Highlight the envisioned role of NIPR in shaping the future of public relations in
                                Nigeria.
                            </li>
                        </ol>
                    </li>

                    </ol>
                    <br>
                    <p>
                                     <strong> Guidelines for Contributors </strong><br>
                    Submissions should please follow the guidelines outlined below:
                    <li> Manuscripts should be written in English and should not exceed 6,000 words.</li>
                    <li>All submissions should be original and not previously published or under
                    consideration elsewhere.</li>
                    <li>Papers should be formatted according to the guidelines specified by the American
                    Psychological Association (APA) referencing style.</li>
                    <li>Abstracts should be submitted along with the full manuscript and should not exceed
                    250 words.</li>
                    <li>
                        We specially invite submission of iconic photographs that commorate any historical
                    moment in the annals of public relations practice in Nigeria. All photographs and graphs
                    to be submitted as saperate documents, numbered and their position clearly marked
                    within the paper
                    </li>
                    <li>
                        Submissions should be sent via email to  "<a href="mailto:vpresident@niprng.org.ng">vpresident@niprng.org.ng</a> and copy
                    <a href="mailto:dandaura@gmail.com">dandaura@gmail.com</a>" with the subject line: "Submission: From Strength to Brilliance
                    Publication."
                    </li><br>
                    <strong>
                    Important Dates:
                    </strong>
                    <li>Deadline for submission of draft manuscript: 20th May 2024</li>
                    <li>Notification of acceptance/corrections: 25th May 2024</li>
                    <li>Final manuscript submission: 30th May 2024</li>
                    <li>Publication release: 29th June 2024</li> <br>
                    <i>
                    For further inquiries, please contact the editorial team at: <a href="mailto:vpresident@niprng.org.ng">vpresident@niprng.org.ng</a>
                    and copy <a href="mailto:dandaura@gmail.com">dandaura@gmail.com</a>.
                    </i>

                    <blockquote>
                       <strong> Professor Emmanuel Samu Dandaura, fnipr</strong>
                      <small>  Editor-in-Chief, Vice President and Vice Chairman of NIPR Council.</small>
                    </blockquote>
                    <br>
                    <a href="{{asset('docs/publication/DIAMOND_SPECIAL_PUBLICATION_CALL_FOR_PAPERS.pdf')}}" target="_blank" rel="noopener noreferrer" class="btn btn-danger"><i class="fa fa-download">Download</i></a>

                </p>
                </div>
            </div>
        </div>
      </div>

	<section class="intro-section intro-08 section-block" style="padding-bottom: 0%; padding-top: 2%">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-12" style="padding-top: 8px">
				<p>Premium Partners:</p>
				</div>
				<div class="col-md-10 col-sm-12" style="margin-bottom: 0%; ">
			<marquee>
				<a href="http://www.hensekgroup.com" target="_blank" rel="noopener noreferrer"><img width="150px" style="margin-right: 35px;" src="{{asset('./img/hensek_logo.png')}}" alt="" srcset=""></a>
				<a href="https://ng.usembassy.gov" target="_blank" rel="noopener noreferrer"><img width="60px" style="margin-right: 35px;" height="60px" src="{{asset('./img/usm-nigeria-seal.png')}}" alt="" srcset=""></a>
				<a href="https://ogunstate.gov.ng" target="_blank" rel="noopener noreferrer"><img width="60px" style="margin-right: 35px;" height="60px" src="{{asset('./img/partner.png')}}" alt="" srcset=""></a>
			</marquee>
				</div>
			</div>
		</div>
	</section>

    {{-- Key Features --}}
	<section class=" intro-08 section-block" style="padding-bottom: 0%; padding-top: 0%">
		{{-- <div class="container"> --}}
			<div class="row">
			<div class="col-lg-8 content-block" style="padding-left: 5%;
			{{-- padding-right: 5%;  --}}
			text-align: justify; margin-bottom: 2%
			text-justify: inter-word;">

				{{-- <h2 style="text-transform: unset">

				  Nigerian Institute Of Public Relations (NIPR)
				</h2>
				 <center>
					<p class="lead">
						{{($welcome != null)?$welcome->description:""}}
					</p>
				 </center> --}}

				<img src="{{asset('./img/OurHistory.jpg')}}"style="width:100%" alt="" srcset="">

				<p  style="width: 500px"
				> {!!($welcome != null)?$welcome->fullText:""!!} </p>
				{{-- <div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;">
						<div class="icon-box" ><h3 style="color: red; height: 348;"><i class="pe-7s-rocket"></i> <b style="text-transform: capitalize"> Mission and Vision</b> </h3> </div>
						<div class="content-wrapper" >

							<p style=" height: 348;">
								 <li> To be the leading regional public relations organisation.</li>
								<li> To unite the PR profession and bring all persons / organisations under a common banner.</li>
								<li> To represent the industry on PR issues so as to establish growth for the profession as a whole.</li>
								<li> To enhance the image of public relations in Nigeria</li>
							</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
				<div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;" >
						<div class="icon-box"><h3 style="color: red; text-transform: capitalize"><i class="pe-7s-id"></i> Up Comming Event  </h3></div>
						<div class="content-wrapper" >

							<p style=" height: 348;">
								 NIPR determine what standards of knowledge
								 and skills are to be attained by Public Relations practitioners. For high standards of practice.
								 The Institute must from time to time upgrade its Code of Professional Conduct.
								 The decree empowers the Council to make byelaws and other rules
							</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
				<div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;">
						<div class="icon-box"><h3 style="color: red; text-transform: capitalize"><i class="pe-7s-medal"></i> Certification</h3></div>
						<div class="content-wrapper" >
							<p style=" height: 348;">
								Elevate your expertise and credibility with our range of industry-recognized certifications, empowering you to stay ahead in today's competitive landscape,
							and introducing a learning management system to foster and breed excellence across every level
						<br>
						<br>

						</p>
						</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 --> --}}

				<div class="row blog-posts">
					<br>
					<h3 style="color: red; text-transform: unset" class="entry-title"><a style="color: red; text-transform: unset" href="https://portal.niprng.org.ng/events">Upcoming Events</a></h3>
					<br>
					@if($events)
					@foreach ($events as $item)
					<div class="col-md-4" style="margin-bottom: 0%">
						<div class="post-wrapper post-grid" style="background-color: white; margin-bottom: 0px; height: 446px">
							<div class="image-wrapper">
								<img class="img-responsive"
								height="176px"
								style="height: 176px; image-rendering: auto; width: 100%"
								src="{{Storage::url($item->image)}}" alt="event image 00">
							</div> <!-- .image-wrapper -->
							<div class="post-content">
								<ul class="post-meta">
									{{-- <li>{{$item->created_at->diffForHumans()}}</li> --}}
									<li><i class="fab fa-time"></i>{{date('d-m', strtotime($item->startDate))}} - {{ date('d-m-Y', strtotime($item->endDate))}}
										</li>
								</ul>
								<h3 style="text-transform: unset" class="entry-title"><a href="/resources/up-coming-events/{{$item->id}}">{{$item->title}}</a></h3>
								<div class="entry-content">
									<p>
										{{-- {{$item->description}} --}}
										{!! Str::words($item->description, 10, ' ...') !!}
									</p>
								</div>
								<a class="btn-open" style="text-transform: unset" href="{{$item->version}}">Register</a>
							</div> <!-- .post-content -->
						</div> <!-- .post-wrapper -->
					</div> <!-- .col-md-4 -->
					@endforeach
					@endif
				</div> <!-- .row -->
				<div class="row">
				<a class="btn btn-main" wire:navigate href="/resources/up-coming-events">See More</a>
			</div>
		</div> <!-- .col-md-8 img-block -->


			<div class="col-lg-4  ">
			<div style="border-radius: 2%; " id="corporex-slider" class="corporex-slider corporex-slider-03 carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">

					@if (count($post) > 0)
					@foreach ($post as $index => $item)
					<li data-target="#corporex-slider" data-slide-to="{{$index}}" class="{{( $index == 0 )? 'active':'' }}"></li>
					@endforeach

				</ol> <!-- .carousel-indicators -->

				<div style="border-radius: 2%; padding-right: 5%; padding-left: 5%" class="carousel-inner">

					@foreach ($post as $index => $item)
					<div style="border-radius: 2%" class="item caption-left gradient-left-dark {{( $index == 0 )? 'active':'' }}" >
						<img class="slider-bg img-responsive"

						src="{{Storage::url($item->image)}}"
						alt="slider image 01">
						<div class="container">

							<div class="carousel-caption" style="color: white;">
								<h6 class="h1-extra" style="color: #f5f5f5;font-size: 30px;">
								 <!-- <span>N.I.P.R</span> -->
								 {{-- {!! Str::words($item->title, 4, ' ...') !!}  --}}
								<br><br>
								<br>
								<br>
								<br>
								<br>
								<br>

								 <a class="btn btn-main" wire:navigate href="/news/posts/{{$item->slug}}">see more</a>

							</h6>
							<small class="lead" style="color: white ;font-size: 15px;">
								{!! Str::words($item->title, 10, ' ...') !!}
							</small>
							</div> <!-- .carousel-caption -->
						</div> <!-- .container -->
					</div> <!-- .item -->
					@endforeach

				</div> <!-- .carousel-inner -->

				<!-- Controls -->
				  <a class="left carousel-control" href="#corporex-slider" role="button" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
				  </a> <!-- .carousel-control -->

				  <a class="right carousel-control" href="#corporex-slider" role="button" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
				  </a> <!-- .carousel-control -->
			@endif
			</div> <!-- .carousel -->
			</div>

		</div> <!-- .row -->


			<div class="row feature-set" style="padding-left: 5%; padding-right: 5%;">
				{{-- <div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;">
						<div class="icon-box" ><h3 style="color: red; height: 348;"><i class="pe-7s-rocket"></i> <b style="text-transform: capitalize"> Mission and Vision</b> </h3> </div>
						<div class="content-wrapper" >

							<p style=" height: 348;">
								 <li> To be the leading regional public relations organisation.</li>
								<li> To unite the PR profession and bring all persons / organisations under a common banner.</li>
								<li> To represent the industry on PR issues so as to establish growth for the profession as a whole.</li>
								<li> To enhance the image of public relations in Nigeria</li>
							</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 -->
				<div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;" >
						<div class="icon-box"><h3 style="color: red; text-transform: capitalize"><i class="pe-7s-id"></i> Professionalism  </h3></div>
						<div class="content-wrapper" >

							<p style=" height: 348;">
								 NIPR determine what standards of knowledge
								 and skills are to be attained by Public Relations practitioners. For high standards of practice.
								 The Institute must from time to time upgrade its Code of Professional Conduct.
								 The decree empowers the Council to make byelaws and other rules
							</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 --> --}}
				{{-- <div class=" col-md-12 col-lg-4" >
					<div class="item-wrapper" style=" height: 348;">
						<div class="icon-box"><h3 style="color: red; text-transform: capitalize"><i class="pe-7s-medal"></i> Certification</h3></div>
						<div class="content-wrapper" >
							<p style=" height: 348;">
								Elevate your expertise and credibility with our range of industry-recognized certifications, empowering you to stay ahead in today's competitive landscape,
							and introducing a learning management system to foster and breed excellence across every level
						<br>
						<br>

						</p>
						</div> <!-- .content-wrapper -->
					</div> <!-- .item-wrapper -->
				</div> <!-- .col-sm-4 --> --}}
			</div> <!-- .row -->
		{{-- </div> <!-- .container --> --}}
	</section> <!-- .about-section -->

	@include('livewire.sections.presidentMessage')

    {{-- Statistics --}}
	<section class="fun-facts-section fun-facts-01 section-block" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 facts-block" style=" height: 150px;">
                    {{-- <h2><span>Professionalism at its best</span>Our excellent records preceeds us</h2>
					<p>
						With a track record of excellence, our commitment to quality and innovation is reflected in our records,
						showcasing a history of successful partnerships and satisfied clients
					</p>    --}}
                        {{-- <div class="col-xs-12 col-md-3">
                            <i class="pe-7s-user " style="font-size: 50px;"></i>
							<h3 style="text-transform: capitalize"><span class="counter">15455</span>Students</h3>
						</div> <!-- .col-xs-6 --> --}}
						<div class="col-xs-12 col-md-3">
                            <i class="pe-7s-users" style="font-size: 50px;"></i>
							<h3 style="text-transform: capitalize"><span class="counter">7464</span>Members</h3>
						</div> <!-- .col-xs-6 -->
						<div class="col-xs-12 col-md-3">
                            <i class="pe-7s-note" style="font-size: 50px;"></i>
							<h3 style="text-transform: capitalize"><span class="counter">5</span>NIPR hubs</h3>
						</div> <!-- .col-xs-6 -->
						<div class="col-xs-12 col-md-3">
                            <i class="pe-7s-camera" style="font-size: 50px;"></i>
							<h3 style="text-transform: capitalize"><span class="counter">36</span>Chapters</h3>
						</div> <!-- .col-xs-6 -->
				</div> <!-- .col-md-6 -->
				{{-- <div class="col-md-5 col-md-offset-1 facts-block">


				</div> <!-- .col-md-6 --> --}}
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .split-section -->

    {{-- FAQ --}}
	@if(count($faq)>0)
    <section class="accordion-section"
	{{-- style="background:#f5f5f5;" --}}
	>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-group corporex-accordion accordion-style-01 radial" id="accordion" style="background-color: white; height: 391px">
                        @foreach ($faq as $index => $item)
						<div class="panel"
						{{-- style="background:#f5f5f5;" --}}
						>
                            <div class="panel-heading {{($index == 0)? 'active':''}}">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsez{{$index}}">
                                       {{$item->title}}
                                    </a>
                                </h4><!-- .panel-title -->
                            </div> <!-- .panel-heading -->
                            <div id="collapsez{{$index}}" class="panel-collapse collapse {{($index == 0)? 'in':''}}">
                                <div class="panel-body">
                                    <p>
                                        {{ $item->description}}
                                    </p>
                                </div> <!-- .panel-body -->
                            </div> <!-- .panel-collapse -->
                        </div> <!-- .panel panel-default -->
						@endforeach

                    </div> <!-- .panel-group -->
                </div> <!-- .col-md-6 -->
                <div class="col-md-6">
                    <div class="image-wrapper">
                        <img class="img-responsive"
						style="height: 550px"
						src="{{asset('./img/simone-secci-49uySSA678U-unsplash.jpg')}}" alt="hand shake image">
                    </div> <!-- .img-wrapper -->
                </div> <!-- .col-md-6 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .accordion-section -->
	@endif
    {{-- Testimony --}}
	@if(count($testimony) > 0)
	<section class="testimonial-section section-block" style="background-color: url({{asset('../img/testimonial-bg-1.jpg')}}) center no-repeat" >
		<div class="container" >
			<div class="title-block white"  >
				<h2>Endorsements</h2>
				<p>

				</p>
			</div> <!-- .title-block -->
			<div class="testimonial-carousel" id="testimonial-carousel">
				@foreach ($testimony as  $item)


				<div class="testimonial-item">
					<div class="content-wrapper">
						<div class="image-wrapper">
							<img class="img-responsive"
							src="{{Storage::url($item->image)}}"
							style="width:72px; height: 72px;" alt="quote author 01"></div>
						<blockquote>
							{{ $item->description }}
						</blockquote>
						<h4 style="text-transform: unset">{{$item->title}}
							{{-- <small>Web Designer</small> --}}
						</h4>
					</div> <!-- .content-wrapper -->
				</div> <!-- .col-md-4 -->

				@endforeach

			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .testimonial-section -->
@endif
    {{-- News --}}
	@include('livewire.sections.news')

    {{-- Subscribe --}}
	{{-- @endsection --}}
	{{-- <section class="partner-section partner-02 section-block">
		<div class="container">
			<div class="title-block">
				<h2>Our Partners</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore mollit anim id est laborum.
				</p>
			</div> <!-- .title-block -->
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="image-wrapper">
						<img src="http://via.placeholder.com/140x80" alt="partner image">
					</div> <!-- .image-wrapper -->
				</div> <!-- .col-md-3 -->

			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .partner-section -->
 --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {

        var interval = setTimeout(function() {
            $('#myModalz').modal('show');
  }, 3000)
    });
</script>
</div>
