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
						<div class="map-box" id="map-box">
							
						</div> <!-- .map-box -->
					</div> <!-- .col-md-5 -->
				</div> <!-- .row -->
			</div> <!-- .contact-form -->
			
		</div> <!-- .container -->
	</section> <!-- .portfolio-section -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSGmNbOd874jHdcQEmXwJC6qz6TZkJjtA&callback=initMap">
    </script>
    <script>
    function initMap() {
    var uluru = {lat: 23.7869378, lng: 90.3230889};
    var map = new google.maps.Map(document.getElementById('map-box'), {
      zoom: 12,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
    }
    </script>
    {{-- @endsection --}}
</div>
