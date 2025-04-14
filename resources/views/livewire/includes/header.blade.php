
	<!-- META -->



	{{-- <!-- preloader -->
	<div class="corporex-preloader">
		<div class="spinner-wrapper">
			<div class="spinner"></div>
		</div><!-- .spinner-wrapper -->
	</div> <!-- .corporex-preloader -->
	 --}}


	<header class="site-header fixed-top" >
		{{-- <div class="top-bar clearfix" id="" style="height: 200px;"> --}}
	<img src="{{asset("./frontend/img/banner.jpeg")}}" style=" width: 100%" alt="" srcset="">
		{{-- </div> --}}
		<div class="top-bar clearfix" style="background-color: red">
			<div class="container">

				<ul class="list-inline pull-left quick-contact">
					<li><a wire:navigate href="/contact-us" ><i class="fa fa-edit"></i> <span>Contact Us</span></a>

					</li>
					<li>

					{{-- <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-book"></i>  <span>Newsletter</span></a> --}}
                        {{-- Model for Newsletter --}}
					<div class="modal corporex-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Subscribe Us</h4>
                                        </div> <!-- .modal-header -->
                                        <div class="modal-body">
                                                <form class="subscription-form"  >
                                                    <div class="form-group">
                                                        <label class="sr-only" for="subscriber-name">Name</label>
                                                        <input wire:model='sub' type="text" name="subscriber-name" id="subscriber-name" class="form-control" placeholder="Your name">
                                                    </div> <!-- .form-group -->
                                                    <div class="form-group">
                                                        <label class="sr-only" for="subscriber-email">Email</label>
                                                        <input type="text" name="subscriber-email" id="subscriber-email" class="form-control" placeholder="Your email">
                                                    </div> <!-- .form-group -->

                                        </div> <!-- .modal-body -->
                                        <div class="modal-footer">
                                            <button wire:click.prevent='create' class="btn btn-main">Submit</button>
                                                </form> <!-- .subscription-form -->
                                        </div> <!-- .modal-footer -->
                                    </div> <!-- .modal-content -->
                                </div> <!-- .modal-dialog -->
                		</div> <!-- col-lg-3 col-md-6 -->
					</li>
					<li><a target="_blank" href="https://portal.niprng.org.ng/member/register" ><i class="fa fa-user"></i> <span>Become a Member</span></a></li>

					<li>
                        {{-- <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-support"></i> <span>Volunteer</span></a> --}}
						<div class="modal corporex-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							{{-- model for volunteer --}}
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Become a Volunteer</h4>
									</div> <!-- .modal-header -->
									<div class="modal-body">
											<form class="">
												<div class="form-group">
													<label class="sr-only" for="subscriber-name">First Name</label>
													<input wire:model='sub' type="text" name="volunteer-name" id="subscriber-name" class="form-control" placeholder="Your name">
												</div> <!-- .form-group -->
												<div class="form-group">
													<label class="sr-only" for="subscriber-last-name">Last Name</label>
													<input wire:model='sub' type="text" name="volunteer-last-name" id="subscriber-name" class="form-control" placeholder="Your name">
												</div> <!-- .form-group -->
												<div class="form-group">
													<label class="sr-only" for="subscriber-email">Email</label>
													<input type="text" name="subscriber-email" id="volunteer-email" class="form-control" placeholder="Your email">
												</div> <!-- .form-group -->
												<div class="form-group">
														 <p>Are you a Member <input class="pl-3" type="checkbox"></p>
												</div> <!-- .form-group -->
												<div class="form-group">
													<label class="sr-only" for="subscriber-email">Reasons to Volunteer </label>
													<textarea type="checkbox" rows="5" cols="5" name="reason" id="volunteer-email" class="form-control">
													</textarea>
												</div> <!-- .form-group -->

									</div> <!-- .modal-body -->
									<div class="modal-footer">
										<button wire:click.prevent='' class="btn btn-main">Submit</button>
											</form> <!-- .subscription-form -->
									</div> <!-- .modal-footer -->
								</div> <!-- .modal-content -->
							</div> <!-- .modal-dialog -->
					</div> <!-- col-lg-3 col-md-6 -->
					</li>
					<li>
                        {{-- <li> --}}
                            {{-- election link --}}
                            <a target="_blank" class="button" href="https://elections.niprng.org.ng/" ><i class="fas fa-vote-yea"></i> <span>Elections Portal</span></a></li>
                        {{-- <a class="" href="{{route('member.registry')}}"><i class="fa fa-files-o"></i> Membership Register </a></li> --}}
				</ul> <!-- .quick-contact -->

				<ul class="list-inline pull-right top-bar-social">
					<li><a href="https://web.facebook.com/NIPROFFICIALPAGE?mibextid=LQQJ4d&_rdc=1&_rdr"><i class="fab fa-facebook "></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/niprofficial"><i class="fab fa-twitter "></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/nigerian-institute-of-public-relations-7600b5a5/"><i class="fab fa-linkedin "></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/niprofficial/"><i class="fab fa-instagram "></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/@niprofficial"><i class="fab fa-youtube "></i></a></li>
                        <li><a target="_blank" href="https://www.tiktok.com/@niprofficial"><i class="fab fa-tiktok "></i></a></li>
				</ul> <!-- .top-bar-menu -->

				<ul class="list-inline pull-right top-bar-menu">
					{{-- <li><a target="_blank" class="button"  href="{{ route('certificate.show') }}">Certificates</a></li> --}}
					<li><a target="_blank" href="https://portal.niprng.org.ng/member/login">Login</a></li>
					{{-- <li><a href="#">Sitemap</a></li> --}}
				</ul> <!-- .top-bar-menu -->
			</div> <!-- .container -->
		</div> <!-- .top-bar -->
		<nav class="navbar  corporex-navbar navbar-01"  style="padding-top: 1%; text-transform: unset; padding-bottom: 1%">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						<i class="fa fa-bars"></i>
					</button>

					<a class="navbar-brand" href="/" style="text-transform: unset; ">
						{{-- <img src="{{asset('img/masthead.png')}}"width=70 alt="NIPR logo"> --}}
						<img style="width: 150px;" src="{{asset('./img/20240121_131747.png')}}" alt="" srcset="">
					</a>

				</div> <!-- .navbar-header -->

				<div class="collapse navbar-collapse navbar-items" id="navbar-items">
					<ul class="nav navbar-nav navbar-right">
						<li class="{{(Route::is('home'))?"active":''}} dropdown menu-large">
							<a  href="/" role="button" style="text-transform: unset" aria-haspopup="false" aria-expanded="true">Home</a>

						</li>

						<li class="{{(Route::is('about-us.history', 'about-us.vision', 'about-us.ethics', 'about-us.council' ))?"active":''}} dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: unset" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
							<ul class="dropdown-menu" style="text-transform: unset">
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" href="#"style="text-transform: unset" aria-expanded="false">Management ></a>
									<ul class="dropdown-menu" style="text-transform: unset">
										<li>
											<a href="/about-us/management/composition" class="dropdown-toggle"   style="text-transform: unset" >Council </a>
											{{-- <ul class="dropdown-menu" style="text-transform: unset">
												<li>
													<a  wire:navigate  href="/about-us/management/composition" style="text-transform: unset"   class="dropdown-toggle" data-toggle="dropdown">Composition</a>
												</li>
												<li>
													<a  wire:navigate  href="/about-us/management/council-resolution" style="text-transform: unset"   class="dropdown-toggle" data-toggle="dropdown">Council Resolution</a>
												</li>
											</ul> <!-- .dropdown-menu --> --}}
										</li>
										<li>
											<a href="/about-us/management/chapters" style="text-transform: unset" class="dropdown-toggle" >Chapters</a>
										</li>

									</ul> <!-- .dropdown-menu -->
									    <a  href="/about-us" style="text-transform: unset">Our History</a>
									    <a  href="/about-us/vision-and-mission" style="text-transform: unset">Vision & Mission</a>
									    <a  href="/about-us/ethics"style="text-transform: unset"> Code of Ethics</a>
									    <a  href="{{route('faqs')}}" tabindex="-1" style="text-transform: unset;"> FAQ</a>
									    {{-- <a wire:navigate href="/about-us/faq"class="disabled" tabindex="-1" style="text-transform: unset"> FAQ</a> --}}

								</li>
							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="
						{{(Route::is('student.professional-certificate', 'student.professional-diploma',
						 'student.professional-admission', 'student.result', 'student.requirements',
						 'student.study-centre', 'student.curriculum' ))?"active":''}}
						dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: unset;" aria-expanded="false">Training</a>
							<ul class="dropdown-menu" style="text-transform: unset">
								<li>
									<a style="text-transform: unset; "
									{{-- wire:navigate href="/training/masterclass" class="dropdown-toggle" data-toggle="dropdown">Masterclasses</a>  --}}
									wire:navigate href="{{route('training.masterclass')}}" class="dropdown-toggle" data-toggle="dropdown">Masterclasses</a>

								</li>
								<li>
									<a style="text-transform: unset;"
									{{-- wire:navigate href="/training/mcpd" class="dropdown-toggle" data-toggle="dropdown">MCPD</a>  --}}
									wire:navigate href="{{route('training.mcpd')}}" class="dropdown-toggle" data-toggle="dropdown">MCPD</a>
								</li>
								<li>
									<a style="text-transform: unset; "
									{{-- wire:navigate href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Conferences ></a>  --}}
									wire:navigate href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Conferences ></a>
									<ul class="dropdown-menu" style="text-transform: unset; ">
										<li>
											<a style="text-transform: unset;"
											{{-- wire:navigate href="/training/conference/directors-conference-and-retreat" class="dropdown-toggle" data-toggle="dropdown">Directors Conference and Retreat</a>  --}}
											wire:navigate href="{{route('training.conference.retreat')}}" class="dropdown-toggle" data-toggle="dropdown">Directors Conference and Retreat</a>
										</li>
										<li>
											<a
											{{-- wire:navigate href="/training/conference/pr-practitioner-in-tertiary-institution" style="text-transform: unset; color:gray" class="dropdown-toggle" data-toggle="dropdown">Conference for PR Practitioners in Tertiary Institutions</a> --}}
											wire:navigate href="{{route('training.conference.practitioner')}}" style="text-transform: unset;" class="dropdown-toggle" data-toggle="dropdown">Conference for PR Practitioners in Tertiary Institutions</a>
										</li>

									</ul> <!-- .dropdown-menu -->
								</li>
								<li>
									<a style="text-transform: unset;"
									{{-- wire:navigate href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Annual Lectures ></a>  --}}
									wire:navigate href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Annual Lectures ></a>
									<ul class="dropdown-menu" style="text-transform: unset; ">
										<li>
											<a
											{{-- wire:navigate href="/training/annual-lecture/sam-epelle-memorial-gold-lecture" style="text-transform: unset; color:gray" class="dropdown-toggle" data-toggle="dropdown">Sam Epelle Memorial Gold Lecture</a> --}}
											wire:navigate href="{{route('training.lecture.sam-epelle')}}" style="text-transform: unset;" class="dropdown-toggle" data-toggle="dropdown">Sam Epelle Memorial Gold Lecture</a>
										</li>

										<li>
											<a
											{{-- wire:navigate href="/training/annual-lecture/Igwe-nnaemeka-alfred-achebe-peace-and-reconciliation-annual-lecture-series" style="text-transform: unset; color:gray" class="dropdown-toggle" data-toggle="dropdown">Igwe Nnaemeka Alfred Achebe Peace & <br> Reconciliation Annual Lecture Series</a> --}}
											wire:navigate href="{{route('training.lecture.igwe')}}" style="text-transform: unset;" class="dropdown-toggle" data-toggle="dropdown">Igwe Nnaemeka Alfred Achebe Peace & <br> Reconciliation Annual Lecture Series</a>
										</li>

										<li>
											<a
											{{-- wire:navigate href="/training/annual-lecture/his-highness-aminu-ado-bayero-national-integration-annual-lecture-series" style="text-transform: unset; color:gray" class="dropdown-toggle" data-toggle="dropdown">His Highness, Aminu Ado Bayero National <br> Integration Annual Lecture Series</a> --}}
											wire:navigate href="{{route('training.lecture.raymond')}}" style="text-transform: unset; " class="dropdown-toggle" data-toggle="dropdown">Raymond Dokpesi Annual Lecture Series</a>
										</li>



									</ul> <!-- .dropdown-menu -->
								</li>
							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="
						{{(Route::is('student.professional-certificate', 'student.professional-diploma',
						 'student.professional-admission', 'student.result', 'student.requirements',
						 'student.study-centre', 'student.curriculum' ))?"active":''}}
						dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: unset" aria-expanded="false">Education </a>
							<ul class="dropdown-menu">
								<li>
									<a style="text-transform: unset; color:gray"
									{{-- wire:navigate href="/student/curriculum" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Education Advisory Board ></a> --}}
									wire:navigate href="#" class="dropdown-toggle" data-toggle="dropdown"   aria-expanded="false">Education Advisory Board ></a>
									<ul class="dropdown-menu">
										<li><a
											{{-- wire:navigate href="/education/advisory-board/mandate"style="text-transform: unset">Mandate </a></li> --}}
											wire:navigate href="#"style="text-transform: unset; color:gray">Mandate </a></li>
										<li><a
											{{-- wire:navigate href="/education/advisory-board/composition"style="text-transform: unset; color:gray">Composition </a></li>  --}}
											wire:navigate href="#"style="text-transform: unset; color:gray">Composition </a></li>
										<li><a
											{{-- wire:navigate href="/education/advisory-board/committees"style="text-transform: unset; color:gray">Committees</a></li>   --}}
											wire:navigate href="#"style="text-transform: unset; color:gray">Committees </a></li>
									</ul> <!-- .dropdown-menu -->
								</li>
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: unset"> Examinations ></a>
									<ul class="dropdown-menu">
										{{-- <li><a  wire:navigate href="/student/professional-certificate"style="text-transform: unset">Professional Certificate</a></li>
										<li><a  wire:navigate href="/student/professional-diploma"style="text-transform: unset">Professional Diploma</a></li>
										<li><a wire:navigate href="/student/professional-admission"style="text-transform: unset">Professional Admission</a></li> --}}
										{{-- <li><a wire:navigate href="/student/result"style="text-transform: unset">Results</a></li> --}}


										<li><a
											{{-- wire:navigate href="/education/examination/cpr"style="text-transform: unset; color:gray">CPR</a></li> --}}
											target="_blank"	href="https://portal.niprng.org.ng/exam-registration"style="text-transform: unset">All Exams</a></li>
										<li>

										<li><a
											{{-- wire:navigate href="/education/examination/qualifying-examination"style="text-transform: unset; color:gray">Qualifying Examination</a></li>  --}}

											href="{{route('education.publication')}}"style="text-transform: unset; ">Exams Information</a></li>
										<li><a
											href="{{route('education.exams.result')}}"style="text-transform: unset; "> Result </a>
                                        </li>
									</ul> <!-- .dropdown-menu -->
								</li>

								<li>
									<a style="text-transform: unset"  href="/education/study-center" class="dropdown-toggle" >Study Centers</a>
								</li>

								<li>
									<a style="text-transform: unset; color:gray" wire:navigate href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Finishing School ></a>
									<ul class="dropdown-menu">
										<li><a
											{{-- wire:navigate href="/education/finishing-school/lms"style="text-transform: unset; color:gray">LMS</a></li> --}}
											wire:navigate href="#"style="text-transform: unset; color:gray">LMS</a></li>
										<li><a
											{{-- wire:navigate href="/education/finishing-school/faculty"style="text-transform: unset; color:gray">Faculty</a></li>  --}}
											wire:navigate href="#"style="text-transform: unset; color:gray">Faculty</a></li>
									</ul> <!-- .dropdown-menu -->
								</li>

							</ul> <!-- .dropdown-menu -->
						</li>
						<li class="
						{{(Route::is('member.information', 'member.upgrade', 'member.categery',
						  ))?"active":''}}
						dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: unset" aria-expanded="false">Membership</a>
							<ul class="dropdown-menu">
								<li>
									<a target="_blank"
									href="https://portal.niprng.org.ng/member/register" style="text-transform: unset" >New application</a>
								</li>
								<li>
									<a
									{{-- target="_blank" --}}
									wire:navigate
									 href="/membership/upgrade"
									 {{-- href="https://portal.niprng.org.ng/member/membership-upgrade"  --}}
									 style="text-transform: unset" >Membership Upgrade </a>
								</li>

								<li>
									<a target="_blank" href="https://portal.niprng.org.ng/member/recertification" style="text-transform: unset" >Recertification</a>

								</li>
								<li>
									<a  href="/membership/information" style="text-transform: unset" >Membership Information</a>

								</li>
								<li>
									<a target="_blank" href="{{route('member.registry')}}" style="text-transform: unset" >Membership Register</a>

								</li>
								{{-- <li>
									<a target="_blank" href="{{route('member_registry.view')}}" style="text-transform: unset" >Membership Register Upload</a>
								</li> --}}


							</ul> <!-- .dropdown-menu -->
						</li>

						<li class="dropdown {{(Route::is('resources.event'))?"active":''}}">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: inherit" aria-expanded="false">Events</a>
							<ul class="dropdown-menu" style="text-transform: unset">
							    <li>
									<a target="_blank" href="https://portal.niprng.org.ng/events" style="text-transform: unset" >Register For Events</a>
								</li>
							    <li>
									<a wire:navigate href="/resources/up-coming-events" style="text-transform: unset" >Upcoming Events</a>
								</li>
							    <li>
									<a  href="https://nss.niprng.org.ng/" style="text-transform: unset;" >National Spokespersons Summit</a>
								</li>
							   <li>
								   <a target="_blank" href="https://nprweek.niprng.org.ng/" style="text-transform: unset" >Annual NPRWeek</a>
							   </li>

							   <li>
								   <a wire:navigate href="#" style="text-transform: unset; color:gray" >National Spokespersons Awards</a>
							   </li>
							   <li>
								   <a wire:navigate href="#" style="text-transform: unset; color:gray" >National Reputation Summit</a>
							   </li>
							   <li>
								   <a wire:navigate href="#" style="text-transform: unset; color:gray" >REBIRTH Nigeria</a>
							   </li>
							   <li>
								   <a wire:navigate href="#" style="text-transform: unset; color:gray" >NIPR Diamond Jubilee </a>
							   </li>

						   </ul> <!-- .dropdown-menu -->
						</li>

						<li class=" dropdown
							{{(Route::is('news.posts','news.posts.view'))?"active":''}} ">

								 <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: inherit" aria-expanded="false">News</a>
						{{-- <li class="
						    {{(Route::is('contactus'))?"active":''}} "><a wire:navigate href="/contact-us" style="text-transform: unset">Contact</a></li> --}}
							 <ul class="dropdown-menu">
								<li><a  href="/news/posts"style="text-transform: unset">NIPR News </a></li>
								<li><a  href="/news/newslink"style="text-transform: unset;">Newslinks </a></li>
								<li>
									<a  href="{{route('news.pressRelease')}}" style="text-transform: unset;">Press Releases</a>
								</li>
								<li>
									<a  href="{{route('news.publication')}}" style="text-transform: unset;">Publications</a>
								</li>
							</ul>
						</li>
                        <li class="{{(Route::is('resources.image','resources.image.view','resources.video'
						  ))?" active":''}} dropdown">
                            <a  href="#" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Gallery </a>
                            <ul class="dropdown-menu">
                                <li><a href="/downloadable/images"style="text-transform: unset">Photo</a></li>
                                <li><a href="/downloadable/videos"style="text-transform: unset">Videos</a></li>
                            </ul> <!-- .dropdown-menu -->
                        </li>

                        <li class="{{(Route::is('resources.event.view','resources.downloadable',
						  ))?" active":''}} dropdown menu-large">
							<a  href="/downloadable/downloadable" role="button" style="text-transform: unset" aria-haspopup="false" aria-expanded="true">Downloadable</a>

						</li>

                        {{-- <li class="dropdown menu-large
						{{(Route::is('resources.image','resources.image.view','resources.event.view','resources.downloadable','resources.video'
						  ))?" active":''}} ">
							<a  href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: inherit" aria-expanded="false">Downloadable</a> --}}
                                {{-- <ul class="dropdown-menu" style="text-transform: unset">
									 <li>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: unset" aria-expanded="false"> Publications ></a>
										<ul class="dropdown-menu" style="text-transform: unset">

                                    <li>
                                        <a wire:navigate href="#" style="text-transform: unset" aria-expanded="false">Books ></a>
										<ul class="dropdown-menu">
											<li><a wire:navigate href="/downloadable/publications/books"style="text-transform: unset">Rebooting Nigeria 2.0</a></li>
										</ul>
                                    </li>

									<li>
										<a wire:navigate href="#" style="text-transform: unset; color:gray">Occasional Publications</a>
									</li>
									<li>
										<a wire:navigate href="#" style="text-transform: unset; color:gray">Working Papers</a>
									</li>
									</ul>
									</li>
                                    <li>
                                        <a wire:navigate href="/downloadable/downloadable" style="text-transform: unset" class="dropdown-toggle" data-toggle="dropdown">Other Resources</a>
                                    </li>
                                </ul> <!-- .dropdown-menu -->
						</li>--}}

							<li
						class="dropdown
						    {{(Route::is('contactus'))?"active":''}} "
							><a wire:navigate href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="text-transform: inherit; " aria-expanded="false">NIPR Hubs</a>

							<ul class="dropdown-menu" style="text-transform: unset">
								<li>
									<a wire:navigate href="{{route('hub.aviation.show')}}" style="text-transform: unset; " >Aviation Hub</a>
								</li>
								<li>
									<a wire:navigate href="{{route('hub.energy.show')}}" style="text-transform: unset; " >Energy Hub</a>
								</li>
								<li>
									<a wire:navigate href="#" style="text-transform: unset; color:gray" >Maritime Hub</a>
								</li>
								<li>
									<a wire:navigate href="#" style="text-transform: unset; color:gray" >Enterprise Hub</a>
								</li>
								<li>
									<a wire:navigate href="{{route('hub.young.show')}}" style="text-transform: unset; " >PR Young Professionals Hub</a>
								</li>
								<li>
									<a wire:navigate href="#" style="text-transform: unset ; color:gray">PR Professionals in Tertiary <br>Institutions Hub</a>
								</li>

							</ul> <!-- .dropdown-menu -->

						</li>
					</ul> <!-- .nav navbar-nav -->
				</div> <!-- .collapse navbar-collapse -->

			</div> <!-- .container -->
		</nav> <!-- .navbar -->
	</header> <!-- .site-header -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
