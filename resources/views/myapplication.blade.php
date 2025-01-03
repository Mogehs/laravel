<!DOCTYPE html>
<html lang="en">
@include('components.myheader', ['title' => $title ?? 'Default Title'])
<style>
    .service-request-container {
        background-color: white;
        padding: 30px;
        border-radius: 8px;
        max-width: 600px;
        margin: auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .message {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 10px;
    }

    .btn-navigate {
        background-color: #C69D33;
        color: white;
        padding: 12px 25px;
        font-size: 1rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
    }

    .btn-navigate:hover {
        background-color: #a67c29;
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

    input[type="text"],
    textarea,
    select {
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
<section class="page-title" style="background-image:url(assets/images/background/page-title_bg.jpg)">
    <div class="auto-container">
        <h2>Join Us</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('my.Home') }}">Home</a></li>
            <li>Application</li>
        </ul>
    </div>
</section>



<h3 class="p-5">Service Providers</h3>
@if(count($providers) !=0)
<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gap-2">
        @foreach($providers as $provider)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$provider->user->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$provider->user->country}}</h6>
                    <p class="card-text">{{$provider->user->about}}</p>
                    <a href="{{ route('service-provider.detail', ['id' => $provider->user->id]) }}" class="card-link">View Details & Order</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<div class="text-black p-5">No Provider</div>
@endif


<!-- End Page Title -->
@if(session('success'))
<div class="alert alert-success pt-4">
    {{ session('success') }}
</div>
@endif

<div class="service-request-container" style="margin: 4rem 20rem;">

    @if($application)
    @if($application->application_status == 'pending')
    <p class="message" style="margin:4rem 0rem;">Your application is under review. Check back later!</p>
    @elseif($application->application_status == 'approved')
    <p class="message" style="margin:4rem 0rem;">Congratulations! Your application has been approved.</p>
    <a href="{{route('provider.dashboard',['id' => Auth::id()])}}"><button class="btn-navigate">Go to Dashboard</button></a>
    @elseif($application->application_status == 'rejected')
    <p class="message">Your previous application was rejected.</p>
    <h2 class="form-heading">Apply To Be A Service Provider</h2>
    <a href="{{route('service-application-form')}}"><button class="btn-submit">Join Us Now!</button></a>
    @endif
    @else
    <p class="message">You have not applied yet. Fill out the form below to get started!</p>
    <h2 class="form-heading">Apply To Be A Service Provider</h2>
    <a href="{{route('service-application-form')}}"><button class="btn-submit">Join Us Now!</button></a>

    @endif
</div>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>



@include('components.mymarketing')

@include('components.myfooter')

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