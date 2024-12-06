<!DOCTYPE html>
<html lang="en">


    @include('components.myheader')
    <!-- Add additional metadata if needed -->


<body>
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/services-page.jpg') }})">
        <div class="auto-container">
            <h2>Our Services</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('my.Home') }}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>	
    </section>
    <!-- End Page Title -->

    <!-- Services Three -->
    <section class="services-three">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($services as $service)
                    <!-- Service Block One -->
                    <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="service-block_one-inner">
                            <div class="service-block_one-upper">
                                <div class="service-block_one-icon">
                                    <img src="{{ asset('assets/images/icons/ac-service.png') }}" alt="Service Icon" />
                                </div>
                                <h5 class="service-block_one-heading">
                                    <a href="{{ route('my.ServiceDetails', ['service_id' => $service['service_id']]) }}">
                                        {{ $service['service_name'] }}
                                    </a>
                                </h5>
                            </div>
                            <div class="service-block_one-text">
                                {{ Str::limit($service['service_description'], 130) }}... <a href="{{ route('my.ServiceDetails', ['service_id' => $service['service_id']]) }}">See More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Services Three -->

    <!-- Marketing One -->
    @include('components.mymarketing')
    <!-- End Marketing One -->

    <!-- Footer Style -->
    @include('components.myfooter')

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="flaticon-close-1"></span></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required>
                <button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
            </div>
        </form>
    </div>
    <!-- End Search Popup -->

    <!-- Back to Top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS Scripts -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/backtotop.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/nav-tool.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/js/color-settings.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
