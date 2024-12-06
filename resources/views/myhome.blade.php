<!DOCTYPE html>
<html>
<head>

@include('components.myheader', ['title' => $title ?? 'Default Title'])

	

	<!-- Slider One -->
	<section class="slider-one">
		<div class="main-slider swiper-container " style="background-color:black; padding: 10px;">
			<div class="swiper-wrapper">

				<!-- Slide -->
				<div class="swiper-slide">
					<div class="slider-one_image-layer" style="background-image:url(assets/images/main-slider/1.jpg)"></div>
					<div class="auto-container">
						<div class="upper-box d-flex justify-content-between align-items-center flex-wrap">
							<h1 class="slider-one_heading"> Restoring Homes, <br> Renewing Comfort.</h1>
							<div class="slider-one_circle"><img src="assets/images/main-slider/circleLogoNew.png" width="200px" alt="" /></div>
						</div>
						<div class="lower-box">
							<div class="row clearfix">
								<div class="column col-lg-3 col-md-12 col-sm-12">
									<div class="slider-one_text">Efficient Solutions for Every Corner</div>
									<div class="slider-one_button">
										<a class="theme-btn discover-btn" href="#">Discover Projects</a>
									</div>
								</div>
								<div class="column col-lg-9 col-md-12 col-sm-12">
									<div class="slider-one_image"><img src="assets/images/main-slider/image-1.png" alt="" /></div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- Slide -->
				<div class="swiper-slide">
					<div class="slider-one_image-layer" style="background-image:url(assets/images/main-slider/1.jpg)"></div>
					<div class="auto-container">
						<div class="upper-box d-flex justify-content-between align-items-center flex-wrap">
							<h1 class="slider-one_heading">Restoring Homes,<br> Renewing Comfort.</h1>
							<div class="slider-one_circle"><img src="assets/images/main-slider/circleLogoNew.png" width="200px" alt="" /></div>
						</div>
						<div class="lower-box">
							<div class="row clearfix">
								<div class="column col-lg-3 col-md-12 col-sm-12">
									<div class="slider-one_text">Efficient Solutions for Every Corner</div>
									<div class="slider-one_button">
										<a class="theme-btn discover-btn" href="#">Discover Projects</a>
									</div>
								</div>
								<div class="column col-lg-9 col-md-12 col-sm-12">
									<div class="slider-one_image"><img src="assets/images/main-slider/image-2.png" alt="" /></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="swiper-slide">
					<div class="slider-one_image-layer" style="background-image:url(assets/images/main-slider/1.jpg)"></div>
					<div class="auto-container">
						<div class="upper-box d-flex justify-content-between align-items-center flex-wrap">
							<h1 class="slider-one_heading">Restoring Homes, <br> Renewing Comfort.</h1>
							<div class="slider-one_circle"><img src="assets/images/main-slider/circleLogoNew.png" width="200px" alt="" /></div>
						</div>
						<div class="lower-box">
							<div class="row clearfix">
								<div class="column col-lg-3 col-md-12 col-sm-12">
									<div class="slider-one_text">Efficient Solutions for Every Corner</div>
									<div class="slider-one_button">
										<a class="theme-btn discover-btn" href="#">Discover Projects</a>
									</div>
								</div>
								<div class="column col-lg-9 col-md-12 col-sm-12">
									<div class="slider-one_image"><img src="assets/images/main-slider/image-3.png" alt="" /></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="slider-one-arrow">
				<!-- If we need navigation buttons -->
				<div class="main-slider-prev"><img src="assets/images/main-slider/slider-prev_arrow.png" alt="" /></div>
				<div class="main-slider-next"><img src="assets/images/main-slider/slider-next_arrow.png" alt="" /></div>

				<!-- If we need pagination -->
				<div class="main-slider_pagination"></div>

			</div>
		</div>
	</section>
	<!-- End Main Slider Section -->

    <!-- Welcome One -->
	<section class="welcome-one">
		<div class="welcome-one_circle"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_icon">
					<img src="assets/images/icons/logoAgain.png" width="80px" alt="" />
				</div>
				<div class="sec-title_title">Welcome to Home Maintenance</div>
				<h2 class="sec-title_heading">Your Trusted Partner in Home Maintenance Excellence</h2>
			</div>
			<div class="row clearfix">
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<h6 class="welcome-one_subtitle">Who We Are</h6>
					<p> We are a trusted provider of comprehensive home maintenance services.</p>
					<p>Our expert team is dedicated to ensuring your home is safe, efficient, and comfortable through quality repairs and upkeep.</p>
					<div class="middle-box">
						<div class="row clearfix">
							<!-- Column -->
							<div class="column col-lg-6 col-md-12 col-sm-12">
								<div class="welcome-one_counter">
									<div class="welcome-one_counter-count"><span class="odometer" data-count="24"></span> &ensp; Working Hours</div>
									<div class="welcome-one_counter-count"><span class="odometer" data-count="10"></span> &ensp; awards</div>
									<div class="welcome-one_counter-count"><span class="odometer" data-count="50"></span> &ensp; Projects Done</div>
								</div>
							</div>
							<!-- Column -->
							<div class="column col-lg-6 col-md-12 col-sm-12">
								<div class="welcome-one_image">
									<img src="assets/images/resource/welcome-1.png" alt="" />
								</div>
							</div>
						</div>
					</div>
					<div class="welcome-one_options d-flex align-items-center flex-wrap">
						<div class="welcome-one_button">
							<a href="about.php" class="theme-btn btn-style-two">
								<span class="btn-wrap">
									<span class="text-one">more about us</span>
									<span class="text-two">more about us</span>
								</span>
							</a>
						</div>
						<div class="welcome-one_phone">
							<span class="fa fa-phone"></span>
							<a href=>+34640225587</a>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<h6 class="welcome-one_subtitle">What We Do</h6>
					<p> We are a trusted provider of comprehensive home maintenance services.</p>
					<p>Our expert team is dedicated to ensuring your home is safe, efficient, and comfortable through quality repairs and upkeep.</p>
					<p>We specialize in providing tailored solutions to address all your home maintenance needs, from minor repairs to major renovations. With a commitment to excellence and customer satisfaction, we ensure that every task is handled with precision and care. Our skilled professionals use the latest tools and techniques to deliver reliable and long-lasting results.

Whether it's plumbing, electrical work, HVAC servicing, or general upkeep, we take pride in being your one-stop solution for maintaining a well-functioning and inviting home. Trust us to protect your investment and enhance your living space with services designed to keep your home in peak condition all year round.
</p>

<p>Let us take the stress out of home maintenance so you can focus on what matters most—enjoying your home to the fullest.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Welcome One -->

	<!-- Services One -->
@include('components.myServiceOne',['services' => $services])
	<!-- End Services One -->


	<!-- Progress One -->
	<section class="progress-one">
		<div class="progress-one_image-layer" style="  background-image :url(assets/images/background/progress-one_bg.jpg); height:50rem; "></div>
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Progress One Content Column -->
				<div class="progress-one_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="progress-one_content-outer">
						<!-- Sec Title -->
						<div class="sec-title light">
							<div class="sec-title_title">overall Maintenance progress</div>
							<h2 class="sec-title_heading">Making Home Maintenance Hassle-Free</h2>
							<div class="sec-title_text">Our Highest Service Rating</div>
						</div>

						<!-- Skills -->
						<div class="skills">

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Air Conditioning</div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="95"></div>
										<div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div>
									</div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Electrical</div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="98"></div>
										<div class="count-box"><span class="count-text" data-speed="2000" data-stop="98">0</span>%</div>
									</div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Renovation</div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="84"></div>
										<div class="count-box"><span class="count-text" data-speed="2000" data-stop="84">0</span>%</div>
									</div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Plumbing</div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="100"></div>
										<div class="count-box"><span class="count-text" data-speed="2000" data-stop="100">0</span>%</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

				<!-- Progress One Images -->
				<div class="progress-one_images-column col-lg-6 col-md-12 col-sm-12">
					<div class="progress-one_images-outer wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="row clearfix">
							<div class="progress-one_image skewElem col-lg-6 col-md-6 col-sm-6">
								<img src="assets/images/resource/electrician-progress.jpg"  alt="" />
							</div>
							<div class="progress-one_image skewElem col-lg-6 col-md-6 col-sm-6">
								<img src="assets/images/resource/plumber-progress.jpg" alt="" />
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Progress One -->
	<section class="news-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_icon">
					<img src="assets/images/icons/logoAgain.png" width="80px" alt="" />
				</div>
				<div class="sec-title_title">News & Updates</div>
				<h2 class="sec-title_heading">Recent Articles</h2>
			</div>
	<!-- News One -->
	@include('components.myBlogsShow',['blogs' => $blogs])
	<!-- End News One -->
	</div>
	</section>
	<!-- CTA One -->
	<section class="cta-one">
		<div class="cta-one_pattern-layer" style="background-image :url(assets/images/background/cta-one_bg.png)"></div>
		<div class="auto-container">
			<h1 class="cta-one_heading">Stay Connected</h1>
			<div class="cta-one_text">Stay connected with our team and never miss an update</div>
			<div class="cta-one_button">
				<a class="cta-one_community" href="{{route('my.Contact')}}">
					<span></span>
					<div class="content">
						Join our community
					</div>
				</a>
			</div>
		</div>
	</section>
	<!-- End CTA One -->

	@include('components.mymarketing')

    @include('components.myfooter')


    	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="flaticon-close-1"></span></button>
		<form method="post" action="https://uniqthemes.com/php/antilia/blog.php">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
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

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/backtotop.js"></script>
<script src="assets/js/odometer.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/ScrollToPlugin.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>

<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/jquery.marquee.min.js"></script>
<script src="assets/js/color-settings.js"></script>
<script src="assets/js/script.js"></script>


</body>

</html>