<!DOCTYPE html>
<html lang="en">
@include("components.myadminheader",['title' => $title ?? 'Default Title'])

<body>
@include("components.myadminhelperheader");
@include("components.myadminsidebar", ['services' => $allServices])


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Update The Service</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('my.AdminDashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-15">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Service Details</h5>
                    
                      <!-- General Form Elements -->
<form method="POST" action="{{ route('updated.AdminServices', ['service_id' => $service->service_id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- Service Title -->
    <div class="row mb-3">
        <label for="service-title" class="col-sm-4 col-form-label">Title</label>
        <div class="col-sm-20">
            <input type="text" class="form-control" name="service_name" id="service-title" value="{{ old('service_name', $service->service_name) }}" required>
        </div>
    </div>

    <!-- Service Details -->
    <div class="row mb-3">
        <label for="service-details" class="col-sm-4 col-form-label">Service Details</label>
        <div class="col-sm-20">
            <textarea class="form-control" style="height: 100px" name="service_description" id="service-details" required>{{ old('service_description', $service->service_description) }}</textarea>
        </div>
    </div>

    <!-- Service Picture 1 -->
    <div class="row mb-3">
        <label for="service-picture-1" class="col-sm-4 col-form-label">Service Picture 1</label>
        <div class="col-sm-20">
            <input class="form-control" type="file" name="service_img1" id="service-picture-1">
            <img src="{{ asset('storage/'.$service->service_img1) }}" alt="Service Image 1" class="mt-2" width="100">
        </div>
    </div>

    <!-- Service Picture 2 -->
    <div class="row mb-3">
        <label for="service-picture-2" class="col-sm-4 col-form-label">Service Picture 2</label>
        <div class="col-sm-20">
            <input class="form-control" type="file" name="service_img2" id="service-picture-2">
            <img src="{{ asset('storage/'.$service->service_img2) }}" alt="Service Image 2" class="mt-2" width="100">
        </div>
    </div>

    <!-- Service Picture 3 (Logo Image) -->
    <div class="row mb-3">
        <label for="service-picture-3" class="col-sm-4 col-form-label">Service Logo Picture</label>
        <div class="col-sm-20">
            <input class="form-control" type="file" name="service_img3" id="service-picture-3">
            @if($service->service_img3)
                <img src="{{ asset('storage/'.$service->service_img3) }}" alt="Service Logo" class="mt-2" width="100">
            @endif
        </div>
    </div>

    <!-- Service Price -->
    <div class="row mb-3">
        <label for="service-price" class="col-sm-4 col-form-label">Price Of Service</label>
        <div class="col-sm-20">
            <input type="text" class="form-control" name="service_price" id="service_price" value="{{ old('service_price', $service->price) }}" required>
        </div>
    </div>

    <!-- Service Sub 1 -->
    <div class="row mb-3">
        <label for="service-sub1" class="col-sm-4 col-form-label">Sub Service 1</label>
        <div class="col-sm-20">
            <input type="text" class="form-control" name="service_sub1" id="service-sub1" value="{{ old('service_sub1', $service->service_sub1) }}">
        </div>
    </div>

    <!-- Service Sub 2 -->
    <div class="row mb-3">
        <label for="service-sub2" class="col-sm-4 col-form-label">Sub Service 2</label>
        <div class="col-sm-20">
            <input type="text" class="form-control" name="service_sub2" id="service-sub2" value="{{ old('service_sub2', $service->service_sub2) }}">
        </div>
    </div>

    <!-- Service Sub 3 -->
    <div class="row mb-3">
        <label for="service-sub3" class="col-sm-4 col-form-label">Sub Service 3</label>
        <div class="col-sm-20">
            <input type="text" class="form-control" name="service_sub3" id="service-sub3" value="{{ old('service_sub3', $service->service_sub3) }}">
        </div>
    </div>

    <!-- Submit Button -->
    <div class="row mb-3">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Update The Service</button>
        </div>
    </div>

</form><!-- End General Form Elements -->
<form method="POST" action="{{ route('delete.AdminServices', ['service_id' => $service->service_id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?');">
        Delete Service
    </button>
</form>

                    </div>
                </div>
            </div>
<div class="col-lg-15">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Order Details</h5>
        @if($orders->isEmpty())
    <p>No orders for this service.</p>
@else
<table class="table">
    <thead>
        <tr>
            <th scope="col">Order ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Service Date</th>
            <th scope="col">Service Preferred Date</th> <!-- New Column -->
            <th scope="col">Service Time</th> <!-- New Column -->
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <th scope="row">{{ $order->booking_id }}</th>
            <td>{{ $order->user ? $order->user->email : 'N/A' }}</td>
            <td>{{ $order->service_date }}</td>
            <td>{{ $order->service_preffer_date }}</td> <!-- Display Service Preferred Date -->
            <td>{{ $order->service_time }}</td> <!-- Display Service Time -->
            <td>{{ $order->status }}</td>
            <td>
                <!-- Done Button -->
                <form action="{{ route('update.myAdminOrderStatus', [ $order->booking_id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Completed">
                    <button type="submit" class="btn btn-success" style="height:30px; width:70px; padding:0;" 
                            @if($order->status != 'Pending') disabled @endif>
                        <span style="color:white; font-size:0.8rem;">Done</span>
                    </button>
                </form>

                <!-- Rejected Button (Only enabled if status is Pending) -->
                <form action="{{ route('update.myAdminOrderStatus', [ $order->booking_id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Cancelled">
                    <button type="submit" class="btn btn-danger" style="height:30px; width:80px; padding:0;" 
                            @if($order->status != 'Pending') disabled @endif>
                        <span style="color:white; font-size:0.8rem;">Rejected</span>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
        @endif

    </div>
</div>


</div>
        </div>
    </section>

</main><!-- End #main -->
@include('components.myadminfooter')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="{{ asset('assets2/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets2/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets2/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets2/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('assets2/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets2/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets2/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets2/js/main.js') }}"></script>
</body>
