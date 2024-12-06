<!DOCTYPE html>
<html>
@include('components.myheader', ['title' => $title ?? 'Default Title'])


	<!-- Page Title -->
	<section class="page-title" style="background-image:url('{{ asset('assets/images/background/blog-page.jpg') }}')">
    <div class="auto-container">
        <h2>Blog Detail</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('my.Home') }}">Home</a></li>
            <li>Blog Detail</li>
        </ul>
    </div>
</section>

    <!-- End Page Title -->

	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Content Side -->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <!-- News Detail -->
                <div class="news-detail">
                    <div class="inner-box">
                        <!-- Post Info -->
                        <div class="post-info">
                            <div class="post-inner">
                                <div class="post-image">
                                    <img src="{{ asset('assets/images/resource/author-1.jpg') }}" alt="" />
                                </div>
                                By: <span>Muneeb</span>
                            </div>
                        </div>
                        <div class="upper-image">
                            <img src="{{$blog['link']}}" alt="" />
                            <img src="{{$blog['link']}}" alt="" />
                        </div>
						
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon fa-regular fa-calendar fa-fw"></span>18 Jan 2024</li>
                                <li><span class="icon fa-solid fa-comments fa-fw"></span>Comments (03)</li>
                            </ul>
							<h3>{{ $blog['subject'] ?? 'Default Title' }}</h3>
							<p>{{ $blog['details'] ?? 'No content available' }}</p>
                            <p>Don’t worry, we’ve got you covered! In this blog post, we’ll introduce you to The Home Team, your go-to solution for the best AC services in Pakistan.</p>

                            <h3>Why Choose The Home Team for AC Services?</h3>
                            <p>{{$blog['why_choose_the_home_team'] }}</p>

                            <blockquote>
                                Keep your space cool and comfortable with our air conditioning services. We offer installation, repair, and maintenance of air conditioning systems to ensure optimal performance and energy efficiency.
                            </blockquote>
                            <p>In today’s world, sustainability is more important than ever...</p>
                            <div class="two-column">
                                <div class="row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <div class="image">
                                            <img src="{{$blog['link']}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>Conclusion</h3>
                                        <p>{{ $blog['conclusion'] }}</p>
                                    </div>
                                </div>
                            </div>

                           
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


	<!-- Marketing One -->
    @include('components.mymarketing')

	<!-- End Marketing One -->
	
	<!-- Footer Style -->
    @include('components.myfooter')


	<!-- Search Popup -->
	<div class="search-popup">
    <div class="color-layer"></div>
    <button class="close-search"><span class="flaticon-close-1"></span></button>
    <form method="POST" action="">
        @csrf
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required>
            <button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
        </div>
    </form>
</div>

	<!-- End Search Popup -->
	
</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

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