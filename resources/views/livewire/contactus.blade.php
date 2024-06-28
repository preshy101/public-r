<div>
    {{-- @section('content') --}}
    <section class="hero-area">
		<div class="page-title-banner" >
			<div class="container"  >
				<div class="content-wrapper">
					<h2>Contact Us</h2>
					<ul class="bread-crumb" >
						<li><a href="/">Home</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div> <!-- .content-wrapper -->
			</div> <!-- .container -->
		</div> <!-- .page-title-banner -->
	</section> <!-- .hero-area -->

    <section class="contact-section page-content" style="padding-top: 50px">
		<div class="container">
			<div class="contact-form-block">
				<div class="row">
					<div class="col-md-7 form-block">
						<h2>Contact Us</h2>
						<div class="form-message">
							<p></p>
						</div> <!-- .form-message -->
						<form >
							<div class="row">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    <button type="button" class="close"  data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <i class="fa fa-thumbs-up"></i>
                                    <strong>Great!</strong> {{ session('success')}}
                                </div>
                                @endif
								<div class="col-md-12">
									<div class="form-group">
										<label for="author" class="sr-only">Name:</label>
										<input wire:model='name' required class="form-control" type="text" name="author" id="author" placeholder="Name *">
									@error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div> <!-- .form-group -->
									<div class="form-group">
										<label for="email" class="sr-only">Email:</label>
										<input wire:model='email' required class="form-control" type="email" name="email" id="email" placeholder="Email *">
                                    @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div> <!-- .form-group -->
									<div class="form-group">
										<label for="phone" class="sr-only">Phone:</label>
										<input wire:model='phone' required class="form-control" type="text" name="phone" id="phone" placeholder="Phone">
                                    @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div> <!-- .form-group -->
									<div class="form-group">
										<label for="url" class="sr-only">Category:</label>
										<select wire:model='website' required class="form-control" type="url" name="url" id="url" placeholder="Website">
										<option value="">Select Option</option>
										<option value="Normal">Normal</option>
										<option value="Urgent">Urgent</option>
										<option value="Critical">Critical</option>

										</select>
                                    @error('website')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div> <!-- .form-group -->

									<div class="form-group">
										<label for="comment" class="sr-only">Comment:</label>
										<textarea wire:model='message'required class="form-control" name="comment" id="comment" placeholder="Write your comment here *"></textarea>
                                    @error('message')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div> <!-- .form-group -->
									<button wire:click.prevent='create' class="btn btn-main">Submit</button>
								</div> <!-- .col-md-6 -->
								<div class="col-md-6">

								</div> <!-- .col-md-6 -->
							</div> <!-- .row -->
						</form>
					</div> <!-- .col-md-7 -->
					<div class="col-md-5 map-block">
						<div class="contact-options section-block">

						<div class="icon-box"><i class="fa fa-map-marker"></i></div>
						<h3>Address</h3>
						<b>Lagos: </b><p> 5, Tokunbo Ali Street Off Toyin Street, Ikeja Lagos</p>
						<b>Abuja: </b><p> Suite 4 Block A, A.R.O Plaza. Herbert Macaulay Way, Zone 6, Wuse Abuja</p><br>
					</div> <!-- .col-md-4 -->
					<center> <h3>Location</h3></center>
						<div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.967901217171!2d7.454044873701481!3d9.06668869099613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b21024f44a9%3A0x77fdac9f826a85d5!2sA.R.O%20Plaza!5e0!3m2!1sen!2sng!4v1719573383620!5m2!1sen!2sng" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div> <!-- .map-box -->
					</div> <!-- .col-md-5 -->
				</div> <!-- .row -->
			</div> <!-- .contact-form -->

		</div> <!-- .container -->
	</section> <!-- .portfolio-section -->
     
    {{-- @endsection --}}
</div>
