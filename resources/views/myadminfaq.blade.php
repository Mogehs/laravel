<!DOCTYPE html>
<html lang="en">
@include("components.myadminheader",['title' => $title ?? 'Default Title'])
<body>
@include("components.myadminhelperheader")
@include("components.myadminsidebar", ['services' => $allServices]);
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Frequently Asked Questions</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('my.AdminDashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Frequently Asked Questions</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section faq">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card basic">
                        <div class="card-body">
                            <h5 class="card-title">FAQS</h5>
@foreach($faqs as $faq)
                            <div>
                                <h6>{{$faq->faq_question}}</h6>
                                <p>{{$faq->faq_answer}}</p>
                               <a href="{{route('del.faq',['faq_id' => $faq->faq_id])}}"> <button type="button" class="btn btn-danger">Delete</button></a>
                            </div>
@endforeach
                            

                          

                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <!-- F.A.Q Group 2 -->
                    <div class="card p-3">
                        <!-- General Form Elements -->
                        <form action="{{ url('/') }}/myAdminFaq" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="service-title" class="col-sm-4 col-form-label" style="color:white;">New Question</label>
                                <div class="col-sm-20">
                                    <input type="text" class="form-control" name="question" id="service-title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="service-details" class="col-sm-4 col-form-label" style="color:white;">Answer</label>
                                <div class="col-sm-20">
                                    <textarea class="form-control" style="height: 100px" name="answer" id="service-details"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Add The FAQ</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->
                    </div><!-- End F.A.Q Group 2 -->

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

