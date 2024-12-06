<!DOCTYPE html>
<html lang="en">
@include("components.myadminheader",['title' => $title ?? 'Default Title'])
<body>
@include("components.myadminhelperheader")
@include("components.myadminsidebar", ['services' => $allServices]);

<main id="main" class="main">

<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item">Users</li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          <img src="{{ asset('assets2/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
          <h2 style="color:white;">{{ auth()->user()->name }}</h2>
          <h3>{{ auth()->user()->job ?? 'Not Specified' }}</h3>
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

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
                <div class="col-lg-3 col-md-4 label">Company</div>
                <div class="col-lg-9 col-md-8">{{ auth()->user()->company ?? 'Not Specified' }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Job</div>
                <div class="col-lg-9 col-md-8">{{ auth()->user()->job?? 'Not Specified' }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Country</div>
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
                <label for="country" class="col-md-4 col-lg-3 col-form-label">Country</label>
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
                <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
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
  </div>
</section>

</main><!-- End #main -->
@include('components.myadminfooter')

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