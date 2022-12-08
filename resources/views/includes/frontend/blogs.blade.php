<!--====== Start Blog Section ======-->
<section id="blogs_section" class="blog-area-v3 pt-30 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-60 wow fadeInUp">
                    <span class="sub-title st-two">Our News & Blog</span>
                    <h2 class="font-45">Get Every Sigle Update
                        Latest News & Tips</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @forelse($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-item mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="post-thumbnail">
                            <img src="{{asset($blog->fImage)}}" alt="post image">
                        </div>
                        <div class="entry-content">
                            <a href="{{route('blog.details',$blog->id)}}" class="icon-btn"><i class="fas fa-arrow-right"></i></a>
                            <h4 class="title"><a href="{{route('blog.details',$blog->id)}}">{{$blog->title}}</a></h4>
                            <p>{!! $blog->fDescription !!} </p>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="far fa-calendar-alt"></i><a
                                                href="#">{{$blog->date}}</a></span></li>
                                    <li><span><i class="far fa-comments"></i><a href="#">Comment (5)</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</section><!--====== End Blog Section ======-->
