<footer class="main-footer">
    <div class="footer_bg-image" style="background-image: url('{{ asset('assets/images/background/footer-bg.jpg') }}')"></div>
    <div class="upper-box">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logoNew.png') }}" width="150px" alt="" title="">
                        </a>
                    </div>
                </div>
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <!-- Subscribe Box -->
                    <div class="subscribe-box">
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Enter Your Email" required>
                                <button type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Widgets Section -->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <h5>YOUR ULTIMATE DESTINATION FOR</h5>
                        <p>Home & Office Maintenance Services</p>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <h5>Services</h5>
                        <ul class="footer-list">
                            <li><a href="#">Air Conditioning</a></li>
                            <li><a href="#">Electrical</a></li>
                            <li><a href="#">Plumbing</a></li>
                            <li><a href="#">Carpentry</a></li>
                            <li><a href="#">Renovation</a></li>
                            <li><a href="#">Cleaning</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget contact-widget">
                        <h5>Contact Us</h5>
                        <ul class="footer-contact_list">
                            <li><span>PH:</span> +92305***</li>
                            <li><span>EM:</span> homemaintainance@gmail.com</li>
                            <li><span>LO:</span> COMSATS University Islamabad, <br> Sahiwal Campus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Widgets Section -->

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="copyright">
                    Copyright &copy; {{ now()->year }} FYP under the supervision of Sir Muhammad Jamil
                </div>
                
                <!-- Social Box -->
                <div class="footer_socials">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
