<!--====== Start Header Section ======-->
<header class="theme-header transparent-header">
    <!-- header Navigation -->
    <div class="header-navigation navigation-style-v1">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <div class="primary-menu">
                <div class="site-branding">
                    <a href="{{route('front.index')}}" class="brand-logo"><img src="{{asset($settings->image)}}"
                                                                               style="height:44px;width:157px"
                                                                               alt="Site Logo"></a>
                </div>
                <div class="nav-menu">
                    <!-- Navbar Close -->
                    <div class="navbar-close"><i class="far fa-times"></i></div>
                    <!-- Nav Search -->
                    <div class="nav-search">
                        <form>
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="Search Here" name="email"
                                       required>
                                <button class="search-btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item"><a href="{{route('front.index')}}">Home</a>
                            </li>
                            <li class="menu-item"><a href="{{route('front.index')}}#services_section">Services</a>
                            </li>
                            <li class="menu-item"><a href="{{route('front.index')}}#portfolio_section">Portfolio</a>
                            </li>
                            <li class="menu-item"><a href="{{route('front.about')}}" class="nav-link">About Us</a>
                            </li>
                            <li class="menu-item"><a href="{{route('front.index')}}#blogs_section" class="nav-link">Blogs</a>
                            </li>
                            <li class="menu-item"><a href="{{route('front.contact')}}" class="nav-link">Contact</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="header-right-nav">
                    <ul>
                        <li class="bar-item"><a href="#"><img src="{{asset('frontend/assets/images/dot.png')}}"
                                                              alt="dot"></a></li>
                        <li class="navbar-toggle-btn">
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== End Header Section ======-->
