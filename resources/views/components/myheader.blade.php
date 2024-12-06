<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Default Title' }}</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="{{ asset('assets/css/color-switcher-design.css') }}" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="{{ asset('assets/css/color-themes/default-color.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Anybody:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/images/faviconNew.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/faviconNew.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- End Preloader -->
    
    <!-- Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <!-- Cursor End -->
    
    <!-- Main Header -->
    <header class="main-header">
        
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        
                        <div class="header-top_text">Making Home Maintenance Hassle-Free</div>

                        <div class="right-box d-flex align-items-center flex-wrap">
                            <!-- Info List -->
                            <ul class="header-top_list">
                                <li>
                                    <span class="icon"><img src="{{ asset('assets/images/icons/phone.png') }}" alt="" /></span>
                                    <a href="tel:+92305******">+92305*******</a>
                                </li>
                            </ul>
                            <!-- Social Box -->
                            <div class="header_socials">
                                <span>Follow Us :</span>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        
                        <div class="logo-box">
                            <div class="logo"><a href="{{ route('my.Home') }}"><img src="{{ asset('assets/images/logoNew.png') }}" width="150px" alt="" title=""></a></div>
                            <div class="logo-2"><a href="{{ route('my.Home') }}"><img src="{{ asset('assets/images/newlogo2.png') }}" width='150px' alt="" title=""></a></div>
                        </div>
                        
                        <div class="nav-outer">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ route('my.Home') }}">Home</a></li>
                                        <li><a href="{{ route('my.About') }}">About</a></li>
                                        <li><a href="{{ route('my.Faq') }}">FAQ's</a></li>
                                        <li><a href="{{ route('my.Testimonial') }}">Testimonial</a></li>
                                        <li><a href="{{ route('my.Services') }}">Services</a></li>
                                        <li><a href="{{ route('my.Blogs') }}">Blog</a></li>
                                        <li><a href="{{ route('my.Contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        
                        <!-- Main Menu End-->
                        <div class="outer-box d-flex align-items-center flex-wrap">
                            
                            <!-- Search Btn -->
                            <!-- <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div> -->
                            
                            <!-- Button Box -->
                          
                            
                           <!-- Button Box -->
                        @if(!auth()->check())
                            <div class="header_button-box">
                                <a href="{{ route('my.Login') }}" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Log In</span>
                                        <span class="text-two">Log In</span>
                                    </span>
                                </a>
                            </div>
                            <div class="header_button-box">
                                <a href="{{ route('my.Contact') }}" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Get In Touch</span>
                                        <span class="text-two">Get In Touch</span>
                                    </span>
                                </a>
                            </div>
                            @else
                            <div class="header_button-box">
                                <a href="{{ route('my.Logout') }}" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Log Out</span>
                                        <span class="text-two">Log Out</span>
                                    </span>
                                </a>
                            </div>
                      
                        @endif

                        @if(auth()->check() && auth()->user()->is_admin)
                            <div class="header_button-box">
                                <a href="{{ route('my.AdminDashboard') }}" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Admin Panel</span>
                                        <span class="text-two">Admin Panel</span>
                                    </span>
                                </a>
                            </div>
                        @endif

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Upper-->
        
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-close-1"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('my.Home') }}"><img src="{{ asset('assets/images/mobile-logo.png') }}" alt="" title=""></a></div>
                <div class="menu-outer">
                    <!-- Mobile Menu Will Come Automatically Via Javascript / Same Menu as in Header -->
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
    
    </header>
    <!-- End Main Header -->


