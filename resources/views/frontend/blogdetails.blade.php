@extends('layouts.frontapp')
@section('title','Blog Details')
@section('section')

    <?php $blogs=App\Blog::orderBy('id','desc')->where('id','!=', $blog->id)->get(); ?>
<!--====== Start Page-banner section ======-->
<section class="page-banner bg_cover position-relative z-1">
    <div class="shape shape-one scene"><span data-depth="1"><img src="{{asset('frontend/assets/images/shape/shape-1.png')}}" alt=""></span></div>
    <div class="shape shape-two scene"><span data-depth="2"><img src="{{asset('frontend/assets/images/shape/shape-2.png')}}" alt=""></span></div>
    <div class="shape shape-three scene"><span data-depth="3"><img src="{{asset('frontend/assets/images/shape/shape-3.png')}}" alt=""></span></div>
    <div class="shape shape-four scene"><span data-depth="4"><img src="{{asset('frontend/assets/images/shape/shape-2.png')}}" alt=""></span></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="page-title text-center">
                    <h1>{{$blog->title}}</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-banner section ======-->
<!--====== Start Blog Details section ======-->
<section class="blog-details-section pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details-wrapper wow fadeInUp">
                    <div class="blog-post-item">
                        <div class="post-thumbnail mb-30">
                            <img src="{{asset($blog->image)}}" alt="">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta">
                                <ul>
                                    <li><span><a href="#" class="cat-link">{{$blog->category->name}}</a></span></li>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">{{$blog->date}}</a></span></li>
                                    <li><span><i class="far fa-comments"></i><a href="#">Comment (5)</a></span></li>
                                </ul>
                            </div>
                            <h3 class="title">{{$blog->heading}}</h3>
                            <p>{!! $blog->description !!}</p>
                            <blockquote class="mb-50">
                                <div class="content">
                                    <h4>{!! $blog->fDescription !!}</h4>
                                    <h5>{{$blog->author}}</h5>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <div class="comments-area mb-70 wow fadeInUp">
                        <h4 class="comments-title">Popular Comments</h4>
                        <ul class="comments-list">
                            <li class="comment mb-45">
{{--                                <div class="comment-avatar">--}}
{{--                                    <img src="{{asset('frontend/assets/images/blog/comment-1.jpg')}}" alt="comment author">--}}
{{--                                </div>--}}
                                <div class="comment-wrap">
                                    <div class="comment-author-content">
                                        <span class="author-name">Randal L. Tomas<span class="date">25 Feb 2022</span></span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                        <a href="#comment-respond" class="reply">Reply<i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment mb-45">
{{--                                <div class="comment-avatar">--}}
{{--                                    <img src="{{asset('frontend/assets/images/blog/comment-2.jpg')}}" alt="comment author">--}}
{{--                                </div>--}}
                                <div class="comment-wrap">
                                    <div class="comment-author-content">
                                        <span class="author-name">Randal L. Tomas<span class="date">25 Feb 2022</span></span>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo</p>
                                        <a href="#comment-respond" class="reply">Reply<i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment mb-45">
{{--                                <div class="comment-avatar">--}}
{{--                                    <img src="{{asset('frontend/assets/images/blog/comment-3.jpg')}}" alt="comment author">--}}
{{--                                </div>--}}
                                <div class="comment-wrap">
                                    <div class="comment-author-content">
                                        <span class="author-name">Randal L. Tomas<span class="date">25 Feb 2022</span></span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                        <a href="#comment-respond" class="reply">Reply<i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="comments-respond mb-35" id="comment-respond">
                        <h4 class="comments-heading">Leave A Message</h4>
                        <form class="comment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Your Full Name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <textarea name="message" class="form_control" placeholder="Comments"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <button class="main-btn arrow-btn">Send Us Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar-widget-area">
                    <div class="widget search-widget mb-30 wow fadeInUp">
                        <form>
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="Search here" name="email" required>
                                <button class="search-btn"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget category-widget mb-30 wow fadeInUp">
                        <h4 class="widget-title">Category</h4>
                        <ul class="category-nav">
                            @forelse($categories as $category)
                            <li><a href="#">{{$category->name}}<span><i class="far fa-arrow-right"></i></span></a></li>
                            @empty
                                <h3>No <Categories></Categories></h3>
                            @endforelse
                        </ul>
                    </div>
                    <div class="widget contact-info-widget bg_cover mb-30 wow fadeInUp" style="background-image: url(assets/images/widget/contact-1.jpg);">
                        <div class="contact-info-box text-center">
                            <div class="icon">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="info">
                                <h4><a href="tel:{{$settings->number1}}">{{$settings->number1}}</a></h4>
                                <h5><a href="mailto:{{$settings->email1}}">{{$settings->email1}}</a></h5>
                                <a href="mailto:{{$settings->email1}}" class="main-btn bordered-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                    <div class="widget recent-post-widget mb-30 wow fadeInUp">
                        <h4 class="widget-title">Recent News</h4>
                        <ul class="recent-post-list">
                            @forelse($blogs as $blog)
                            <li class="post-thumbnail-content">
                                <img src="{{asset($blog->fImage)}}" alt="post image">
                                <div class="post-title-date">
                                    <h6><a href="{{route('blog.details',$blog->id)}}">{{$blog->title}}</a></h6>
                                    <span class="posted-on">By <a href="#">{{$blog->author}}</a></span>
                                </div>
                            </li>
                            @empty
                            <h3>No blogs yet</h3>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Blog Details section ======-->

@endsection
