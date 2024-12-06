<!DOCTYPE html>
<html>
@include('components.myheader', ['title' => $title ?? 'Default Title'])

	
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="close-button">
					<span class="fa-solid fa-xmark fa-fw"></span>
				</div>
				<div class="sidebar-textwidget">
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Sidebar Cart Item -->

	<!-- Page Title -->
    <section class="page-title" style="background-image: url('assets/images/background/about-page.jpg'); background-size: cover; background-position: center;">
    <div class="auto-container">
        <h2>About our Company</h2>
        <ul class="bread-crumb clearfix">
        <li><a href="{{ route('my.Home') }}">Home</a></li>
        <li><a href="{{ route('my.About') }}">About</a></li>
        </ul>
    </div>
</section>

    <!-- End Page Title -->

	<!-- Welcome Two -->
	<section class="welcome-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<div class="sec-title_title">Welcome to Home Maintenance</div>
					<h2 class="sec-title_heading">Your Trusted Partner <br> in Home Maintenance<br>Excellence</h2>
				</div>
				<div class="circle_image">
					<img src="assets/images/main-slider/circleLogoNew.png" width="200px" alt="" />
				</div>
			</div>
			<div class="row clearfix">
				<!-- Column -->
				<div class="welcome-two_content-column col-lg-5 col-md-12 col-sm-12">
					<div class="welcome-two_content-outer">
						<p>Welcome to Home Maintenance, your trusted partner for home maintenance solutions. We specialize in providing quality repairs and services to keep your home in top condition.</p>
						<p>With 10 years of experience, we offer a comprehensive range of services, including plumbing, electrical work, HVAC maintenance, painting, carpentry, and more.</p>
						<ul class="welcome-two_list">
							<li>Our mission is to make home maintenance <br> hassle-free. </li>
							<li>Contact us today for reliable and  professional <br> service that you can trust.</li>
							<li>Keeping Your Home in Great Shape</li>
						</ul>
						<div class="welcome-two_author">
							Muhammad Jamil <span>Founder Of The Company</span>
						</div>
						<div class="welcome-two_signature">
							<img src="assets/images/icons/signature.png" alt="" />
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="welcome-two_image-column col-lg-7 col-md-12 col-sm-12">
					<div class="welcome-two_image-outer">
						<div class="welcome-two_image skewElem">
							<img src="assets/images/resource/welcome-3.jpg" alt="" />
						</div>
						<div class="welcome-two_experiance" data-parallax='{"y" : 40}'>
							<img src="assets/images/resource/welcome-4.jpg" alt="" />
							<div class="welcome-two_experiance-count">
								<div class="count-box">
									<span class="count-text" data-speed="3000" data-stop="10">0</span><sub>+</sub>
								</div>
								<i>Years of <br> Experience</i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Welcome One -->



	<!-- Services One -->
    @include('components.myServiceOne')

	<!-- End Services One -->


	<!-- Marketing One -->
@include("components.mymarketing")

	<!-- End Marketing One -->

	<!-- Progress One -->
	<section class="progress-one">
		<div class="progress-one_image-layer" style="background-image:url(assets/images/background/progress-one_bg.jpg); height:50rem;"></div>
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
								<img src="assets/images/resource/plumber-progress.jpg" alt="" />
							</div>
							<div class="progress-one_image skewElem col-lg-6 col-md-6 col-sm-6">
								<img src="assets/images/resource/electrician-progress.jpg" alt="" />
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Progress One -->

	<!-- CTA One -->
	<section class="cta-one style-two">
		<div class="cta-one_pattern-layer" style="background-image:url(assets/images/background/cta-one_bg.png)"></div>
		<div class="auto-container">
			<h1 class="cta-one_heading">Stay Connected</h1>
			<div class="cta-one_text">Stay connected with our team and never miss an update</div>
			<div class="cta-one_button">
				<a class="cta-one_community" href="contact.html">
					<span></span>
					<div class="content">
						Join our community
					</div>
				</a>
			</div>
		</div>
	</section>
	<!-- End CTA One -->

	<!-- Footer Style -->
    @include('components.myfooter')

	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="flaticon-close-1"></span></button>
		<form method="post" action="https://uniqthemes.com/html/antilia/blog.html">
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