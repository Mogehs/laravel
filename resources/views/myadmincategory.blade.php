<!DOCTYPE html>
<html lang="en">
@include("components.myadminheader", ['title' => $title ?? 'Default Title'])

<body>
@include("components.myadminhelperheader")
@include("components.myadminsidebar");

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add New Service</h1>
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
                        <form method="POST" action="{{ route('add.AdminServices') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Service Title -->
                            <div class="row mb-3">
                                <label for="service-title" class="col-sm-4 col-form-label">Title</label>
                                <div class="col-sm-20">
                                    <input type="text" class="form-control" name="service_name" id="service-title" required>
                                </div>
                            </div>

                            <!-- Service Details -->
                            <div class="row mb-3">
                                <label for="service-details" class="col-sm-4 col-form-label">Service Details</label>
                                <div class="col-sm-20">
                                    <textarea class="form-control" style="height: 100px" name="service_description" id="service-details" required></textarea>
                                </div>
                            </div>

                            <!-- Service Picture 1 -->
                            <div class="row mb-3">
                                <label for="service-picture-1" class="col-sm-4 col-form-label">Service Picture 1</label>
                                <div class="col-sm-20">
                                    <input class="form-control" type="file" name="service_img1" id="service-picture-1" required>
                                </div>
                            </div>

                            <!-- Service Picture 2 -->
                            <div class="row mb-3">
                                <label for="service-picture-2" class="col-sm-4 col-form-label">Service Picture 2</label>
                                <div class="col-sm-20">
                                    <input class="form-control" type="file" name="service_img2" id="service-picture-2" required>
                                </div>
                            </div>

                            <!-- Service Picture 3 (Logo Image) -->
                            <div class="row mb-3">
                                <label for="service-picture-3" class="col-sm-4 col-form-label">Service Logo Picture</label>
                                <div class="col-sm-20">
                                    <input class="form-control" type="file" name="service_img3" id="service-picture-3">
                                </div>
                            </div>

                            <!-- Service Price -->
                            <div class="row mb-3">
                                <label for="service-price" class="col-sm-4 col-form-label">Price Of Service</label>
                                <div class="col-sm-20">
                                    <input type="text" class="form-control" name="service_price" id="service_price" required>
                                </div>
                            </div>

                            <!-- Service Sub 1 -->
                            <div class="row mb-3">
                                <label for="service-sub1" class="col-sm-4 col-form-label">Sub Service 1</label>
                             <div class="col-sm-20">
                                <input type="text" class="form-control" name="service_sub1" id="service-sub1">
                                    </div>
                                </div>

                            <!-- Service Sub 2 -->
                            <div class="row mb-3">
                                <label for="service-sub2" class="col-sm-4 col-form-label">Sub Service 2</label>
                                <div class="col-sm-20">
                                    <input type="text" class="form-control" name="service_sub2" id="service-sub2">
                                </div>
                            </div>

                            <!-- Service Sub 3 -->
                            <div class="row mb-3">
                                <label for="service-sub3" class="col-sm-4 col-form-label">Sub Service 3</label>
                                <div class="col-sm-20">
                                    <input type="text" class="form-control" name="service_sub3" id="service-sub3">
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Add The Service</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->
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
</html>
