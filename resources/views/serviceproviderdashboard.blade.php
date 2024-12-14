<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title ?? 'Default Title' }}</title>
    <meta content="@yield('description', '')" name="description">
    <meta content="@yield('keywords', '')" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets2/img/faviconNew.png') }}" rel="icon">
    <link href="{{ asset('assets2/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets2/css/style.css') }}" rel="stylesheet">


    </head>

<body style="overflow-x: hidden;">

  <div class="container-fluid p-3">
    <a class="navbar-brand" href="{{route('my.Home')}}"><h1><b>Back To Site </b></h1></a>
  </div>

        
<section class="section profile row" style="width:100vw; padding:10px">

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
            <th scope="col">Order Date</th>
            <th scope="col">Service Preferred Date</th>
            <th scope="col">Service Time</th>
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
            <td>{{ $order->service_preffer_date }}</td> 
            <td>{{ $order->service_time }}</td> 
            <td>{{ $order->status }}</td>
            <td>
                
                <form action="{{ route('update.myAdminOrderStatus', [ $order->booking_id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Completed">
                    <button type="submit" class="btn btn-success" style="height:30px; width:70px; padding:0;" 
                            @if($order->status != 'Pending') disabled @endif>
                        <span style="color:white; font-size:0.8rem;">Accept</span>
                    </button>
                </form>

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
                <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                        </li>

                        <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <h5 class="card-title">About</h5>
                        <p class="small fst-italic">{{ auth()->user()->about ?? 'No bio available.' }}</p>

                        <h5 class="card-title">Profile Details</h5>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Full Name</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->name }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Experience</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->company ?? 'Not Specified' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Job</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->job?? 'Not Specified' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Location</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->country ?? 'Not Specified' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Address</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->address ?? 'Not Specified' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Phone</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->phone ?? 'Not Specified' }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Email</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->email }}</div>
                        </div>

                        </div>

                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                        <!-- Profile Edit Form -->
                        <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Full Name -->
                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                            <div class="col-md-8 col-lg-9">
                            <input name="name" type="text" class="form-control" id="fullName" value="{{ auth()->user()->name }}">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                            <div class="col-md-8 col-lg-9">
                            <input name="email" type="email" class="form-control" id="email" value="{{ auth()->user()->email }}">
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                            <div class="col-md-8 col-lg-9">
                            <input name="phone" type="text" class="form-control" id="phone" value="{{ auth()->user()->phone }}">
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                            <div class="col-md-8 col-lg-9">
                            <input name="address" type="text" class="form-control" id="address" value="{{ auth()->user()->address }}">
                            </div>
                        </div>

                        <!-- Country -->
                        <div class="row mb-3">
                            <label for="country" class="col-md-4 col-lg-3 col-form-label">Location</label>
                            <div class="col-md-8 col-lg-9">
                            <input name="country" type="text" class="form-control" id="country" value="{{ auth()->user()->country }}">
                            </div>
                        </div>

                        <!-- Job -->
                        <div class="row mb-3">
                            <label for="job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                            <div class="col-md-8 col-lg-9">
                            <input name="job" type="text" class="form-control" id="job" value="{{ auth()->user()->job }}">
                            </div>
                        </div>

                        <!-- Company -->
                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Experience</label>
                            <div class="col-md-8 col-lg-9">
                            <input name="company" type="text" class="form-control" id="company" value="{{ auth()->user()->company }}">
                            </div>
                        </div>

                        <!-- About -->
                        <div class="row mb-3">
                            <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                            <div class="col-md-8 col-lg-9">
                            <textarea name="about" class="form-control" id="about" style="height: 100px">{{ auth()->user()->about }}</textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                        </form>
                        <!-- End Profile Edit Form -->
                    </div>


                        <div class="tab-pane fade pt-3" id="profile-change-password">
                        <!-- Change Password Form -->
                        <form action="{{ route('profile.password.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="current_password" type="password" class="form-control" id="currentPassword">
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="new_password" type="password" class="form-control" id="newPassword">
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="new_password_confirmation" type="password" class="form-control" id="renewPassword">
                            </div>
                            </div>

                            <div class="text-center">
                            <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                        <!-- End Change Password Form -->
                        </div>

                    </div><!-- End Bordered Tabs -->
                    </div>
                </div>
                </div>


</section>


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