<!DOCTYPE html>
<html lang="en">
@include("components.myadminheader",['title' => $title ?? 'Default Title'])
<body>
@include("components.myadminhelperheader")
@include("components.myadminsidebar", ['services' => $allServices]);
<main id="main" class="main">
        <div class="pagetitle">
            <h1>Contact</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('my.AdminDashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </nav>
        </div>

        <section class="section contact">
            <div class="row gy-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contacted</h5>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Message</th>
                <th>Received At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->contact_id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->format('d M Y, h:i A') }}</td>
                </tr>
            @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card p-4">
                        <form action="{{ url('/contact') }}" method="POST" class="php-email-form">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Person Email" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
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

    <script src="{{ asset('assets2/js/main.js') }}"></script>
</body>
</html>