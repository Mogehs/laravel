<!DOCTYPE html>
<html>
@include('components.myheader')

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(assets/images/background/testimonial-page.jpg)">
        <div class="auto-container">
			<h2>Testimonial</h2>    
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('my.Home') }}">Home</a></li>
				<li>Testimonial</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
	<!-- Testimonial Four -->
	<section class="testimonial-four">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Testimonial Block One -->
				@foreach($testimonials as $testimonial)
				<div class="testimonial-block_three col-lg-4 col-md-6 col-sm-12">
					<div class="testimonial-block_three-inner">
						<div class="testimonial-block_three-author" style = "margin-bottom:18px;">
							<img src="assets/images/resource/author-1.jpg" alt=""  />
							<span class="testimonial-block_three-quote fa-solid fa-quote-left fa-fw"></span>
						</div>
						<div class="testimonial-block_three-content">
							<h5 class="testimonial-block_three-heading"> {{ $testimonial->name }}</h5>
						</div>
						<div class="testimonial-block_three-text">
						{{ $testimonial->testimonial }}
                    </div>
					</div>
				</div>
				@endforeach


			

			</div>

			<!-- Pagination Outer -->
			<div class="pagination-outer text-center">
				<ul class="pagination">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#"><span class="fa-solid fa-arrow-right fa-fw"></span></a></li>
				</ul>
			</div>

		</div>
	</section>

	<!-- End Testimonial Four -->

	<!-- Marketing One -->
@include('components.mymarketing')

	<!-- End Marketing One -->
	
	<!-- Footer Style -->
@include ('components.myfooter')
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