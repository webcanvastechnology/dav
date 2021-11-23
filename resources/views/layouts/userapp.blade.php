<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description"
        content="The DaVinci Lab Team is dedicated to provide high quality education with the skills and competencies required to thrive in and drive the 21st century world.">
    <meta name="keywords"
        content="Da-Vinci, DaVinci, DaVincilab, Codekick, SuperTeacher, Coding, Computer Programming, CS for kids, Coding for Kids, Physical Computing, Creative Computing, Robotics, STEM education, STEAM Education, Competency based education, Interdisciplinary Approach, NEP 2020, National Education policy on coding, DaVinci Junior, National Coding Olympiad Junior">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/imagelightbox.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css')}}">
    <title>DaVinci Lab</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

    {{-- <div class="preloader">
        <div class="loader">
            <div class="wrapper">
                <div class="circle circle-1"></div>
                <div class="circle circle-1a"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
            </div>
        </div>
    </div> --}}


    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/DaVinci Lab.png" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/DaVinci Lab.png" alt="image">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link active">
                                    Home
                                   
                                </a>
                                
                                   
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link active">
                                   About us
                                   
                                </a>
                                
                                   
                            </li>
                           {{--  <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">
                                            About
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="gallery.html" class="nav-link">
                                            Gallery
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pricing.html" class="nav-link">
                                            Pricing
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="how-to-apply.html" class="nav-link">
                                            How to Apply
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="programs.html" class="nav-link">
                                            Programs
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="enroll.html" class="nav-link">
                                            Enroll
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="timetable.html" class="nav-link">
                                            Timetable
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">
                                            FAQ
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Account
                                            <i class='bx bx-chevron-down'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="login.html" class="nav-link">
                                                    Login
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="register.html" class="nav-link">
                                                    Register
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="error-404.html" class="nav-link">
                                            Error Page
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-of-service.html" class="nav-link">
                                            Terms of Service
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">
                                            Coming Soon
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Teacher
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="teacher.html" class="nav-link">
                                            Teacher
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="teacher-details.html" class="nav-link">
                                            Teacher Details
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Event
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="event.html" class="nav-link">
                                            Event
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="event-details.html" class="nav-link">
                                            Event Details
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                
                                        <a href="{{ route('courses') }}" class="nav-link">
                                            Courses
                                        </a>
                                    
                            </li>
                            <li class="nav-item">
                                
                                        <a href="{{ route('courses') }}" class="nav-link">
                                            Upcoming Events
                                        </a>
                                    
                            </li>
                            
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <div class="others-options d-flex align-items-center">
                            {{-- <div class="option-item">
                                <div class="dropdown language-switcher d-inline-block">
                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span>Language <i class='bx bx-chevron-down'></i></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="assets/img/english.png" class="shadow-sm" alt="flag">
                                            <span>English</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="assets/img/arab.png" class="shadow-sm" alt="flag">
                                            <span>العربيّة</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="assets/img/germany.png" class="shadow-sm" alt="flag">
                                            <span>Deutsch</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="assets/img/portugal.png" class="shadow-sm" alt="flag">
                                            <span>Português</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="assets/img/china.png" class="shadow-sm" alt="flag">
                                            <span>简体中文</span>
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="option-item">
                                @guest
                                @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="default-btn">Login</a>
                                @endif
                                @else
                                <a href="{{ route('logout') }}" class="default-btn" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                @endguest
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <div class="dropdown language-switcher d-inline-block">
                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span>Language <i class='bx bx-chevron-down'></i></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="assets/img/english.png" class="shadow-sm" alt="flag">
                                            <span>English</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="assets/img/arab.png" class="shadow-sm" alt="flag">
                                            <span>العربيّة</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="assets/img/germany.png" class="shadow-sm" alt="flag">
                                            <span>Deutsch</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="assets/img/portugal.png" class="shadow-sm" alt="flag">
                                            <span>Português</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="assets/img/china.png" class="shadow-sm" alt="flag">
                                            <span>简体中文</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="option-item">
                                <a href="#" class="default-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @yield('content')



    <section class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="logo">
                            <h2>
                                <a href="index.html"><img src="assets/img/DaVinci Lab.png" alt="image"></a>
                            </h2>
                        </div>
                        <p>The DaVinci Lab Team is dedicated to provide high quality education with the skills and competencies required to thrive in and drive the 21st century world. </p>
                        {{-- <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact Us</h3>
                        <ul class="footer-contact-info">
                            <li>
                                <i class='bx bxs-phone'></i>
                                <span> Phone</span>
                                <a href="tel:+91 9908442000">+91 9908442000</a>
                               
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <span>Email</span>
                                <a href="">connect@superteacher.in</span></a>
                            </li>
                            <li>
                                <i class='bx bx-map'></i>
                                <span>Address</span>
                                8-107/12, M-park residency, Shilpa Nagar, Nagaram, Hyderabad-500083
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Useful Links </h3>
                        <ul class="quick-links">
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">Our Courses</a>
                            </li>
                            <li>
                                <a href="#">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Get in Touch </h3>
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/SuperTeacherEdu" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/SuperTeacher_ER" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/superteacheredureforms/" target="_blank">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCgkIGCVtehamD_cKyBPIJ3Q" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/superteacher-edu-reforms/" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                        </ul>
                        {{-- <ul class="photo-gallery-list">
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-1.jpg" alt="image">
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-2.jpg" alt="image">
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-3.jpg" alt="image">
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-4.jpg" alt="image">
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-5.jpg" alt="image">
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-6.jpg" alt="image">
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-1.jpg" alt="image">
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-2.jpg" alt="image">
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <img src="assets/img/footer-gallery/footer-gallery-3.jpg" alt="image">
                                    <a href="#" target="_blank" class="link-btn"></a>
                                </div>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright © 2021 DaVinci Lab. All Rights Reserved by
                   
                </p>
            </div>
        </div>
    </div>


    <div class="go-top">
        <i class='bx bx-up-arrow-alt'></i>
    </div>


    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>


    <script src="{{ asset('assets/js/popper.min.js')}}"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('assets/js/jquery.meanmenu.js')}}"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>

    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{ asset('assets/js/imagelightbox.min.js')}}"></script>

    <script src="{{ asset('assets/js/odometer.min.js')}}"></script>

    <script src="{{ asset('assets/js/jquery.appear.min.js')}}"></script>

    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <script src="{{ asset('assets/js/form-validator.min.js')}}"></script>

    <script src="{{ asset('assets/js/contact-form-script.js')}}"></script>

    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>


</html>
