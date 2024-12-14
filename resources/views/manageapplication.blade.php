<!DOCTYPE html>
<html lang="en">
@include("components.myadminheader", ['title' => $title ?? 'Service Provider Applications'])

<body>
@include("components.myadminhelperheader")
@include("components.myadminsidebar")

<main id="main" class="main">

<div class="pagetitle">
    <h1>Service Provider Applications</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('my.AdminDashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Service Provider Applications</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Applications</h5>
                    <!-- Table -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">User Name</th>
                                <th scope="col">Service</th>
                                <th scope="col">Experience</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Location</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($applications as $application)
                            <tr>
                                <td>{{ $application->user->name }}</td>
                                <td>{{ $application->service->service_name }}</td>
                                <td>{{ $application->experience }}</td>
                                <td>{{ $application->reason }}</td>
                                <td>{{ $application->location }}</td>
                                <td>
                                    <span class="badge 
                                        @if($application->application_status == 'pending') bg-warning 
                                        @elseif($application->application_status == 'approved') bg-success 
                                        @elseif($application->application_status == 'rejected') bg-danger 
                                        @endif">
                                        {{ ucfirst($application->application_status) }}
                                    </span>
                                </td>
                                <td>
                                    <!-- Update Status Form -->
                                    <form action="{{ url('/service-provider-applications/' . $application->id . '/update-status') }}" method="POST" class="d-inline">
                                        @csrf
                                        <select name="application_status" class="form-select form-select-sm d-inline-block w-auto" required>
                                            <option value="pending" {{ $application->application_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="approved" {{ $application->application_status == 'approved' ? 'selected' : '' }}>Approved</option>
                                            <option value="rejected" {{ $application->application_status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- End Table -->
                </div>
            </div>
        </div>
    </div>
</section>

</main>
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
