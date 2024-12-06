<!DOCTYPE html>
<html>
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
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Sidebar Cart Item -->

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(assets/images/background/page-title_bg.jpg)">
        <div class="auto-container">
			<h2>Our Faq's</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('my.Home') }}">Home</a></li>
				<li>Faq's</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Faq Two -->
	<section class="faq-two">
		<div class="auto-container">
			<div class="inner-container">
				
				<!-- Accordion Box -->
				<ul class="accordion-box">
				@foreach ($faqs as $faq)	
					<!-- Block -->
					<li class="accordion block">
						<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-plus"></span></div>{{ $faq->faq_question }}</div>
						<div class="acc-content">
							<div class="content">
								<div class="text">{{ $faq->faq_answer }}</div>
							</div>
						</div>
					</li>
								
				 @endforeach
				</ul>

			</div>
		</div>
	</section>
	<!-- Faq Two -->

	<!-- Marketing One -->
@include("components.mymarketing")
	<!-- End Marketing One -->
	
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