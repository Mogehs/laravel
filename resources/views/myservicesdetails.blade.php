
<!DOCTYPE html>
<html>

@include("components.myheader")

<style>
        .service-request-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-heading {
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 2rem;
            font-weight: bold;
            color: #C69D33;
            margin-bottom: 20px;
        }

        .service-request-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        textarea {
            resize: vertical;
        }

        button.btn-submit {
            background-color: #C69D33;
            color: white;
            padding: 12px 25px;
            font-size: 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        button.btn-submit:hover {
            background-color: #a67c29;
        }
    </style>
    <style>
        .testimonial-container {
            background-color: white;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
            text-align: center;
        }

        .testimonial-heading {
            font-size: 2rem;
            font-weight: bold;
            color: #C69D33;
            margin-bottom: 15px;
        }

        .testimonial-subheading {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            font-size: 1rem;
            font-weight: bold;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid #ddd;
            margin-top: 8px;
        }

        .btn-submit {
            background-color: #C69D33;
            color: white;
            font-size: 1rem;
            padding: 12px 25px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-submit:hover {
            background-color: #a67c29;
        }
    </style>

<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/service-detail-page.jpg') }})">
    <div class="auto-container">
        <h2>Service Detail</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('my.Home') }}">Home</a></li>
            <li>Service Detail</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Service Detail -->
<section class="service-detail">
    <div class="auto-container">
        <div class="inner-container">
            <div class="service-detail_color-circle"></div>
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="service-detail_content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="service-detail_content">
                        <!-- Feature Block -->
                        <div class="feature-block">
                            <div class="feature-block_inner">
                                <div class="feature-block_icon">
                                <img src="{{ asset('storage/'.$service->service_img3) }}" alt="Service Image logo">
                                </div>
                                <h3>{{ $service['service_name'] }}</h3>
                                
                            </div>
                        </div>

                        <div class="service-detail_image skewElem">
                        <img src="{{ asset('storage/' . $service->service_img1) }}" alt="Service Image 2">

                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="service-detail_image-column col-lg-5 col-md-10 col-sm-12">
                    <div class="service-detail_image-two skewElem">
                    <img src="{{ asset('storage/' . $service->service_img2) }}" alt="Service Image 1">
                    </div>
                </div>
            </div>
            <p>{{ $service['service_description'] }}</p>
            <!-- <ul class="service-detail_list">
                <li>Comprehensive Air Conditioner Maintenance & Repairs</li>
                <li>Safe Process & Original Parts Used</li>
                <li>Experienced & Well-trained Technicians</li>
                <li>Customized Doorstep Service</li>
                <li>Excellent Customer Support</li>
            </ul> -->

            <div class="service-detail_video">
                <img src="{{ asset('assets/images/resource/service-3.jpg') }}" alt="" />
                <a href="https://www.youtube.com/watch?v=YS3PwmOQ1Fc" class="lightbox-video services-one_play"><span class="fa fa-play"><i class="ripple"></i></span></a>
            </div>

            <!-- Accordion Box -->
            <ul class="accordion-box">
                <!-- Loop through the sub-services -->
                @foreach (['service_sub1', 'service_sub2', 'service_sub3'] as $subServiceField)
                    @if ($service->$subServiceField)
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer">
                                    <span class="icon icon-plus fa fa-plus"></span>
                                    <span class="icon icon-minus fa fa-minus"></span>
                                </div>
                                {{ strtoupper(substr($service->$subServiceField, 0, 10)) }} <!-- Display first 3 letters -->
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <!-- Display full sub-service name -->
                                        <strong> {{ $service->$subServiceField }}</strong>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!-- End Service Detail -->

<!-- CTA Two -->
<div class= "row">
<div class="service-request-container"> 
    <h2 class="testimonial-heading">Service Request Form</h2>
    <form method="POST" action="{{ route('add.Booking', $service['service_id']) }}" class="service-request-form">
        @csrf
        <!-- Name Input -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>

        <!-- Address Input -->
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter your address" required>
        </div>

        <!-- Description Input -->
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="requirements" rows="4" placeholder="Describe your requirements" required></textarea>
        </div>

        <!-- Date Input -->
        <div class="form-group">
            <label for="service_date">Preferred Service Date:</label>
            <input type="date" id="service_date" name="service_date" required>
        </div>

        <!-- Time Input -->
        <div class="form-group">
            <label for="service_time">Preferred Service Time:</label>
            <input type="time" id="service_time" name="service_time" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn-submit">Book Service Now</button>
    </form>
</div>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Testimonial Form -->
 <div class="row">
<div class="testimonial-container">
        <div class="testimonial-form">
            <h2 class="testimonial-heading">We'd Love to Hear Your Feedback!</h2>
            <p class="testimonial-subheading">Tell us what you think about our services.</p>
            
            <form action="{{route('my.Testimonial')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="name">Service You Get</label>
                    <input type="text" id="name" name="service" class="form-control" placeholder="Write Service Here" required>
                </div>
                <div class="form-group">
                    <label for="testimonial">Your Testimonial</label>
                    <textarea id="testimonial" name="testimonial" class="form-control" rows="5" placeholder="Write your testimonial..." required></textarea>
                </div>
				

                <button type="submit" class="btn-submit">Submit Testimonial</button>
            </form>
        </div>
</div>
</div>
<!-- End CTA Two -->

<!-- Footer Style -->
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