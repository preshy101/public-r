<div>
      {{-- News --}}
      @if (count($posts) > 0)
       
      <section class="blog-section blog-style-04 section-block">
		<div class="container">
			<div class="title-block">
				<h2>Latest News</h2>
				<p>
					Stay up to date with us on our amazing news feeds
				</p>
			</div> <!-- .title-block -->
			<div class="row">
                @foreach ($posts as $index => $item)
                    @if ($index <= 2)
						
				<div class="col-md-4">
					<div class="post-wrapper" >
						<div class="image-wrapper" >
							<img class="img-responsive" 
                            style="border-radius: 2%; height: 240px; width: 100%"
                            src="{{Storage::url($item->image)}}" 
                            alt="blog image 01">
						</div> <!-- .image-wrapper -->
						<div class="post-content">
							<ul class="post-meta" style="word-wrap: break-word;word-break: break-all;">
								<li>{{$item->published_at->diffForHumans()}}</li>
								<li >
                                    @foreach ($item->categories as $cat)  
                                    <a class="badge badge-pill " style="word-wrap: break-word; background: {{$cat->bg_color}}; color:{{$cat->text_color}}" href="#">
                                        {{$cat->title}}
                                    </a>
                                    @endforeach
                                </li>
							</ul>
							<h3><a wire:navigate href="/news/posts/{{$item->slug}}">{{$item->title}}</a></h3>
							<p>
								{!!$item->getExcept()!!}
							</p>
							<a class="btn-open" wire:navigate href="/news/posts/{{$item->slug}}">Read More</a>
						</div> <!-- .post-content -->
					</div> <!-- .post-wrapper -->
				</div> <!-- .col-md-4 -->
					@endif
            
                 @endforeach
			</div> <!-- .row -->
			<div class="btn-container">
				<a wire:navigate class="btn btn-narrow" href="/news/posts">View All</a>
			</div>
			
		</div> <!-- .container -->
	</section> <!-- .blog-section -->   

    @endif

</div>