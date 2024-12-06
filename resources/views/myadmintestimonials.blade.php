<!DOCTYPE html>
<html lang="en">
@include("components.myadminheader",['title' => $title ?? 'Default Title'])
<body>
@include("components.myadminhelperheader")
@include("components.myadminsidebar", ['services' => $allServices]);
    <main id="main" class="main">
    <div class="pagetitle">
  <h1>Testmonials</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('my.AdminDashboard') }}">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Testimonials</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Testimonials</h5>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum quaerat, veritatis officiis illum
            sequi, impedit necessitatibus quod repellendus animi voluptatum tempore nesciunt quisquam nobis fugit
            facere dicta illo ratione eaque.</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>Username</th>
                <th>Service</th>
                <th>Message</th>
                <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($testimonials as $testimonial)
           

              <tr>
                <td>{{ $testimonial->name}}</td>
                <td>{{ $testimonial->service }}</td>
                <td>{{ $testimonial->testimonial }}</td>
                <td>{{ $testimonial->created_at->format('Y-m-d') }}</td>
                <td><form action="{{ route('delete.testimonial',[$testimonial->testimonials_id])}}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this testimonial?')">
                Delete
            </button>
        </form>
                </td>
              </tr>
 @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

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





</html>