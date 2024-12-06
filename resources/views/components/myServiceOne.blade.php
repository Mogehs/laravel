<section class="services-one">
		<div class="services-one_image-layer">
			<div class="absolute inset-0 -z-10 h-full w-full bg-white [background:radial-gradient(125%_125%_at_50%_10%,#fff_40%,#63e_100%)]"></div>
		</div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<div class="sec-title_title">Our Services</div>
					<h2 class="sec-title_heading">We specialize in these <br> Services.</h2>
				</div>
				<div class="sec-title_text">As a premier maintenance services provider, we know you value the best service & so we work hard to solve even the most complicated maintenance issue.</div>
			</div>
			<div class="inner-container">
				<div class="services-one_circle-color"></div>
				<div class="row clearfix">
					<!-- Blocks Column -->
					<div class="services-one_blocks-column col-lg-8 col-md-12 col-sm-12">
						<div class="services-one_blocks-outer">
							<div class="row clearfix">
							@foreach(collect($services)->take(4) as $service)
								<div class="service-block_one col-lg-6 col-md-6 col-sm-12">
									<div class="service-block_one-inner">
										<div class="service-block_one-upper">
											<div class="service-block_one-icon"><img src="assets/images/icons/ac-service.png" alt="" /></div>
											<h5 class="service-block_one-heading"><a href="{{ route('my.ServiceDetails', ['service_id' => $service['service_id']]) }}">{{ $service['service_name'] }}</a></h5>
										</div>
										<div class="service-block_one-text">{{ substr($service['service_description'], 0, 130) }}... See More</div>
									</div>
								</div>
@endforeach
								
							</div>
						</div>
					</div>
					<!-- Video Column -->
					<div class="services-one_video-column col-lg-4 col-md-8 col-sm-12">
						<div class="services-one_video-outer">
							<div class="service-block_one-video skewElem">
								<img src="assets/images/resource/video.png" alt="" />
								<a href="https://www.youtube.com/watch?v=do7aB3efxiY" class="lightbox-video services-one_play"><span class="fa fa-play"><i class="ripple"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Clients One -->
			<div class="clients-one">
				<div class="inner-container">
					<div class="clients-one_slider swiper-container">
						<div class="swiper-wrapper">
							
							<!-- Slide -->
							<div class="swiper-slide">
								<div class="client-image ">
									<a href="#"><img src="assets/images/clients/plumber.png"  width="102px"  alt="" /></a>
								</div>
							</div>

							<!-- Slide -->
							<div class="swiper-slide">
								<div class="client-image ">
									<a href="#"><img src="assets/images/clients/house.png"  width="102px" alt="" /></a>
								</div>
							</div>

							<!-- Slide -->
							<div class="swiper-slide">
								<div class="client-image ">
									<a href="#"><img src="assets/images/clients/electric.png"  width="102px" alt="" /></a>
								</div>
							</div>

							<!-- Slide -->
							<div class="swiper-slide">
								<div class="client-image ">
									<a href="#"><img src="assets/images/clients/ac.png"  width="102px" alt="" /></a>
								</div>
							</div>

							<!-- Slide -->
							<div class="swiper-slide">
								<div class="client-image ">
									<a href="#"><img src="assets/images/clients/house.png" width="102px" alt="" /></a>
								</div>
							</div>

						</div>

						<div class="clients-one_arrow">
							<!-- If we need navigation buttons -->
							<div class="clients-one_slider_button-prev"><img src="assets/images/icons/client-one_prev-arrow.png" alt="" /></div>
							<div class="clients-one_slider_button-next"><img src="assets/images/icons/client-one_next-arrow.png" alt="" /></div>
						</div>

					</div>
				</div>
			</div>
			<!-- Clients One -->

		</div>
	</section>