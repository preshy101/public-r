@extends('welcome')

@section('content')
<style>
    .my-image-style {
  /* --- This shifts the perspective to the right --- */
  transform: perspective(700px) rotateY(-15deg);

  /* --- This adds the drop shadow --- */
  filter: drop-shadow(10px 10px 15px rgba(0, 0, 0, 0.5));

  /* --- This makes the effect look smoother --- */
  transition: all 0.3s ease;
}

/* (Optional) Add a hover effect to see it in action */
.my-image-style:hover {
  transform: perspective(600px) rotateY(0deg);
  filter: drop-shadow(5px 5px 10px rgba(0, 0, 0, 0.3));
}
</style>
<div class="container py-5">

    <h1 class="mb-4">Tribute in Honour of Chief Frank Tamuno-Koko</h1>

    <div class="row">
        <!-- Left column: tribute form -->
        <div class="col-lg-5 col-md-6">
            <div class="card mb-4">
                <div class="card-body mt-5 pt-5">
                    <br>
    <br>
    <br>
    <br>
                    Kindly drop a tribute in honour of Chief Frank Tamuno-Koko, former Chairman Fellowship Advisory Board and a Distinguished Fellow of NIPR who passed away on Thursday, 6th November, 2025.
                    <br>
                    The late Tamuno-Koko, an elder statesman was indeed a strong voice in the PR industry who for decades of active practice made immense contributions towards the growth and development of the Institute.

                    <p class="card-text">Share your memories, condolences or messages in honour of Chief Frank Tamuno-Koko.</p>
                    </div> <!-- .form-group -->
						<a target="_blank" href="https://forms.gle/oFnyrAMtKZjY9tmh7" class="btn btn-main">Fill a Tribute</a>
			</div>
                    <!-- Note: the form posts to a placeholder route. Replace `route('tribute.submit')` with your actual route or wire this up to a Livewire component. -->

            </div>

        <!-- Right column: picture -->
        <div class="col-lg-7 col-md-6">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h4 class="card-title pb-5 mb-5">In Memoriam</h4>
                    <!-- Replace the src with the correct path to the tribute image in `public/img` or elsewhere -->
                    <img src="{{ asset('img/chief_frank.jpeg') }}" alt="Chief Frank Tamuno-Koko" class=" my-image-style img-fluid rounded" style="max-height:420px; object-fit:cover;">
                    <br>
                    <br>
                    <p class="mt-3 text-muted mt-5 pt-5">Photo: Chief Frank Tamuno-Koko</p>
                </div>
            </div>
        </div>

            </div>
            <br>
            <br>
            <br>
            <br>
        </div>


@endsection
