<!--====== Start Portfolio Section ======-->
<section id="portfolio_section" class="portfolio-area portfolio-area-v1 light-gray-bg pt-130 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title mb-45 wow fadeInUp">
                    <span class="sub-title st-one">Latest Work</span>
                    <h2>Professional Experience</h2>
                    <p>Professional Design Agency to provide solutions</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-filter-button mb-50 wow fadeInLeft">
                    <ul class="filter-btn mb-20">
                        <li data-filter="*" class="active">Show All</li>
                        @forelse ($categories as $category)
                            <li data-filter=".cat-{{$category->id}}">{{$category->name}}</li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="row portfolio-grid">
            @forelse ($projects as $project)
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-{{$project->categoryid}}">
                    <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".1s">
                        <div class="img-holder">
                            <img src="{{asset($project->image)}}" alt="Img">
                            <a href="{{asset($project->image)}}" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="{{route('project.details',$project->id)}}">{{$project->name}}</a>
                            </h3>
                            <a href="#" class="cat-link">{{$project->category->name}}</a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</section><!--====== End Portfolio Section ======-->
