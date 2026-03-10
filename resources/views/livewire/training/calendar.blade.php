@php
    use Illuminate\Support\Facades\Storage;
@endphp

<div>
    @section('content')
    <section class="hero-area">
        <div class="page-title-banner">
            <div class="container">
                <div class="content-wrapper">
                    <h2>Training Calendar</h2>
                    <ul class="bread-crumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Training</a></li>
                        <li><a href="#">Calendar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="margin-top: 3rem; margin-bottom: 3rem;">
        <div class="row">
            @forelse ($materials as $material)
                <div class="col-md-6" style="margin-bottom: 8.5rem;">
                    <div class="card " style="height: 100%; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);">
                        <div class="card-body p-5" style="margin: 15px">
                            <h4 class="card-title ml-5 mt-5" style="color: #c00; padding-top: 1.5rem">{{ $material->title }}</h4>
                            <p class="text-muted" style="margin-bottom: 0.75rem;">
                                {{ optional($material->event_date)->format('jS F Y') }}
                            </p>
                            @if ($material->description)
                                <p style="text-align: justify;">{!! nl2br(e(Str::limit($material->description, 150))) !!}</p>
                            @endif
                            @if ($material->attachment)
                                <a class="btn btn-danger" style="margin-top: 0.5rem; margin-bottom: 1.5rem" href="{{ Storage::url($material->attachment) }}" target="_blank" rel="noopener noreferrer">
                                    Download Material
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="lead text-center" style="margin: 2rem 0;">Training calendar materials will appear here once they are published.</p>
                </div>
            @endforelse
        </div>
    </div>
    @endsection
</div>
