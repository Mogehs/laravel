<!DOCTYPE html>
<html>
@include('components.myheader', ['title' => $title ?? 'Default Title'])



<style>
        .service-request-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            margin-bottom: 3rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-heading {
            text-align: center;
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
<section class="page-title" style="background-image:url('{{ asset('assets/images/background/page-title_bg.jpg') }}')">
    <div class="auto-container">
        <h2>Provider Details</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('my.Home') }}">Home</a></li>
            <li>Details</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<div class="container" style="padding: 2rem;">
    <div class="card">
        <div class="card-header">
            <h2>{{ $user->name }}</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">Bio</h5>
            <p class="card-text">{{ $user->about ?? 'No bio available' }}</p>

            <h5 class="card-title">Contact</h5>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone ?? 'N/A' }}</p>

            <h5 class="card-title">Address</h5>
            <p>{{ $user->address ?? 'Address not provided' }}</p>
        </div>
    </div>
</div>

<div class="service-request-container"> 
    <h2 class="form-heading">Service Request Form</h2>
    <form method="POST" action="{{ route('add.Booking', $service['service_id']) }}" class="service-request-form">
        @csrf

        <input type="hidden" name="service_provider_id" value="{{ $service_provider->id }}">

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

<!-- Marketing One -->
@include("components.mymarketing")
<!-- End Marketing One -->

<!-- Footer Style -->
@include('components.myfooter')


</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>

<!-- JavaScript Files -->
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
