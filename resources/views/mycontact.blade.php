
<!DOCTYPE html>
<html>

@include('components.myheader')
	<!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(assets/images/background/contact-page.jpg)">
        <div class="auto-container">
			<h2>Contact Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('my.Home') }}">Home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Contact One -->
	<section class="contact-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
			@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
				<div class="sec-title_title">CONTACT INFO</div>
				<h2 class="sec-title_heading">Get in touch!</h2>
				<div class="sec-title_text">Get in touch for expert home maintenance solutions tailored to your needs! <br> tailored to your needs!</div>
			</div>
			<div class="row clearfix">
				
				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="contact-info-block_inner">
						<span class="contact-info-block_icon fa-solid fa-location-dot fa-fw"></span>
						<h4 class="contact-info-block_heading">Address</h4>
						<div class="contact-info-block_text">COMSATS University Islamabad.</div>
					</div>
				</div>
				
				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="contact-info-block_inner">
						<span class="contact-info-block_icon fa fa-envelope"></span>
						<h4 class="contact-info-block_heading">Email</h4>
						<div class="contact-info-block_text"><a href="mailto:needhelp@company.com">homemaintenance@company.com</a></div>
					</div>
				</div>
				
				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="contact-info-block_inner">
						<span class="contact-info-block_icon fa-solid fa-clock fa-fw"></span>
						<h4 class="contact-info-block_heading">Service Time</h4>
						<div class="contact-info-block_text">24/7</div>
					</div>
				</div>
				
				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="contact-info-block_inner">
						<span class="contact-info-block_icon fa-solid fa-phone fa-fw"></span>
						<h4 class="contact-info-block_heading">Phone</h4>
						<div class="contact-info-block_text"><a href=>+920305***</a></div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact One -->
	
	<!-- Map One -->
	<section class="map-one">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109823.23880860656!2d73.01233416987185!3d30.66279832522011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b62cd8405a6d%3A0x6cce79c0f78cbfb7!2sSahiwal%2C%20Sahiwal%20District%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1715680122653!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

		
	</section>
	<!-- End Map One -->


	
	<!-- Contact Form One -->
	<section class="contact-form-one" id="contact">
    <div class="auto-container">
        <div class="inner-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">CONTACT US</div>
                <h2 class="sec-title_heading">Have questions? <br> Get in touch!</h2>
            </div>

            <!-- Default Form -->
            <div class="contact-form">
                <form method="POST" action="{{ route('my.SubmitMyContact') }}" id="contact-form">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="txtname" placeholder="Name" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="txtphone" placeholder="Phone" required="">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="email" name="txtemail" placeholder="Email" required="">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="txtmessage" placeholder="How can we help you? Feel free to get in touch"></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                            <div class="button-box">
                                <button class="theme-btn btn-style-three" type="submit">
                                    <span class="btn-wrap">
                                        <span class="text-one">Get in Touch</span>
                                        <span class="text-two">Get in Touch</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Default Form -->
        </div>
    </div>
</section>
	<!-- End Contact Form One -->

	<!-- Marketing One -->
@include('components.mymarketing')

	<!-- End Marketing One -->
	
	<!-- Footer Style -->
    @include ('components.myfooter')

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
<script src="assets/js/validate.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/jquery.marquee.min.js"></script>
<script src="assets/js/color-settings.js"></script>
<script src="assets/js/script.js"></script>


</body>


</html>