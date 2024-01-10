
    <div>
        <section class="hero-area">
            <div class="page-title-banner" >
                <div class="container">
                    <div class="content-wrapper">
                        <h2> News  </h2>
                        <ul class="bread-crumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/news/posts">News</a></li>
                            <li><a href="#">{{$post->title}}</a></li>
                        </ul>
                    </div> <!-- .content-wrapper -->
                </div> <!-- .container -->
            </div> <!-- .page-title-banner -->
        </section> <!-- .hero-area -->
        <br>
        <br>
        <section class="blog-section blog-post-01 page-content">
            <div class="container">
                
                <div class="row">
                    @if ($post)  
                        
                    <div class="col-md-8 blog-posts">
                        <div class="post-wrapper post-standard">
                            <div class="image-wrapper">
                                <img class="img-responsive" 
                                src="{{Storage::url($post->image)}}" 
                                alt="news image 00">
                            </div> <!-- .image-wrapper -->
                            <div class="post-content">
                                <h2 class="entry-title"><a href="#">{{$post->title}}</a></h2>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i><a href="#">{{$post->author->name}}</a></li>
                                    <li><i class="fa fa-clock-o"></i>{{$post->published_at->diffForHumans()}}</li>
                                    <li><i class="fa fa-folder-open"></i>
                                        @foreach ($post->categories as $cat)  
                                        <a class="badge badge-pill " style="background: {{$cat->bg_color}}; color:{{$cat->text_color}}" href="#">
                                            {{$cat->title}}
                                        </a>
                                        @endforeach
                                    </li>
                                    <li><i class="fa fa-comments"></i><a href="#">{{$post->getReadingTime() }} minute read</a></li>
                                </ul>
                                <p>
                                    {!!$post->body!!}
                                </p> 
                            </div> <!-- .post-content -->
                        </div> <!-- .post-wrapper post-overlay --> 
                        
                       
                    </div> <!-- .col-md-8 -->
                  
                    @else
    
                    <div class="col-md-8 blog-posts">
                        <p class="lead">No News yet</p>
                    </div>
    
                    @endif
                    <div class="col-md-4 sidebar">
                        <div class="widget widget-search">
                            <h3 class="widget-title">Search</h3>
                            <form>
                                <input class="form-control" type="search" name="search-box" id="search-box" placeholder="Search ..">
                                <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div> <!-- .widget widget-search -->
                
                        <div class="widget widget-recent-posts">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="img-list">
                                @if ($recentPosts)
                                @foreach ($recentPosts as $item) 
                                    <li class="clearfix">
                                    <img class="img-responsive"  
                                    src="{{Storage::url($item->image)}}"  alt="post thumbnail">
                                    <div class="content-wrapper">
                                        <h4>
                                            <a  wire:navigate href="/news/posts/{{$item->slug}}">{{$item->title}} </a>
                                        </h4>
                                        <p>{{$item->published_at->diffForHumans()}}</p>
                                    </div> <!-- .content-wrapper -->
                                </li>
                                @endforeach
                                @else
                                    <small>No post yet</small>
                                @endif
                                
                                 
                            </ul>
                        </div><!-- .widget widget-recent-posts -->
                        
                        <div class="widget widget-tags">
                            <h3 class="widget-title">Popular Tags</h3>
                            <ul>
                                @if ($categories)
                                    @foreach ($categories as $item)
                                    <li><a href="#">{{$item->title}}</a></li>
                                        
                                    @endforeach
                                @else
                                    <small>No category yet</small>
                                @endif
                                
                            </ul>
                        </div> <!-- .widget widget-tags -->
                
                        <div class="widget widget-social-links">
                            <h3 class="widget-title">Follow us</h3>
                            <ul>
                                <li class="facebook-link"><a href="https://www.facebook.com/profile.php?id=100004381365825&mibextid=AEUHqQ"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter-link"><a href="#https://x.com/nipr_hq?s=11&t=9HmMeHB4scZXQG4gvZuypA"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus-link"><a href="https://www.linkedin.com/in/niprhq/"><i class="fa fa-linkedin"></i></a></li>
                                {{-- <li class="youtube-link"><a href="#"><i class="fa fa-instagram"></i></a></li> --}}
                                <li class="youtube-link"><a href="https://www.instagram.com/nipr_hq"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- .widget widget-social-links -->
                
                        <div class="widget widget-gallery">
                            <h3 class="widget-title">Photo Gallery</h3>
                            <ul class="list-inline photo-gallery clearfix">
                                @if ($gallery)
                                    @foreach ($gallery as $item)
                                        @foreach ($item->image as $img) 
                                        <li><a class="gallery-img" href="#"><img class="img-responsive" src="{{Storage::url($img)}}" alt="gallery photo"></a></li>
                                        @endforeach
                                    @endforeach
                                @else
                                    <small>No content yet</small>
                                @endif
                                
                            </ul> <!-- .footer-social -->
                        </div> <!-- .widget widget-gallery -->
                
                         
                    </div> <!-- .col-md-4 -->
                </div> <!-- .row -->
            </div> <!-- .container -->
        </section> <!-- .portfolio-section -->
    
    </div>
 