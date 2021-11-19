@extends('layouts.userapp')

@section('content')
<div class="main-banner">
    <div class="main-banner-item">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="main-banner-content">
                               
                                <h1>“Everyone has <br> a Da Vinci within”
                                </h1>
                                <span>Believe in yourself. Let it out to create wonders !</span>
                                
                                <p>DaVinci Lab provides the best learning experience in coding, physical computing and STEM education. It is founded under the core principles of competency based learning and interdisciplinary approach. DaVinci Lab is backed by a well-designed curriculum, scientific assessment framework and team of talented academicians and trainers.</p>
                                <div class="banner-btn">
                                    <a href="#" class="default-btn">
                                        Learn More
                                    </a>
                                    <a href="#" class="optional-btn">
                                        Find Out More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-banner-image">
                                <img src="assets/img/main-banner/education-girl.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-banner-shape">
        <div class="banner-bg-shape">
            <img src="assets/img/main-banner/banner-bg-shape-1.png" alt="image">
        </div>
        <div class="shape-1">
            <img src="assets/img/main-banner/banner-shape-1.png" alt="image">
        </div>
        <div class="shape-2">
            <img src="assets/img/main-banner/banner-shape-2.png" alt="image">
        </div>
        <div class="shape-3">
            <img src="assets/img/main-banner/banner-shape-3.png" alt="image">
        </div>
        <div class="shape-4">
            <img src="assets/img/main-banner/banner-shape-4.png" alt="image">
        </div>
    </div>
</div>


<section class="who-we-are ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="who-we-are-image">
                    <img src="assets/img/who-we-are/who-we-are.jpg" alt="image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="who-we-are-content">
                    <span>Who We Are</span>
                    <h3>SuperTeacher Team</h3>
                    <p>Society is evolving rapidly, and so do the skills required to thrive in it. DaVinci Lab is a flagship program of SuperTeacher Edureforms Pvt Ltd - a team of seasoned academicians and educators who are dedicated to provide educational training and support aligned to 21st-century requirements. We believe there should be no hard line between academic skills and real-life skills. With a strong team to do research and development and specialists to create the best possible experience and value for our clients, we are known for conducting high-quality training for both teachers and students.
                    </p>
                    
                   {{--  <ul class="who-we-are-list">
                        <li>
                            <span>1</span>
                            Homelike Environment
                        </li>
                        <li>
                            <span>2</span>
                            Quality Educators
                        </li>
                        <li>
                            <span>3</span>
                            Safety and Security
                        </li>
                        <li>
                            <span>4</span>
                            Play to Learn
                        </li>
                    </ul> --}}
                    <div class="who-we-are-btn">
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="who-we-are-shape">
        <img src="assets/img/who-we-are/who-we-are-shape.png" alt="image">
    </div>
</section>


<section class="class-area bg-fdf6ed pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Courses</span>
            <h2>Course Categories</h2>
            <span>Our Courses are divided into four categories</span>
        </div>
        <div class="row">
            @foreach ($all_category as $v_category )
                
            
            <div class="col-lg-3 col-md-6">
                <div class="single-class">
                    {{-- <div class="class-image">
                        <a href="#">
                            <img src="assets/img/class/class-1.jpg" alt="image">
                        </a>
                    </div> --}}
                    <div class="class-content">
                        
                        <h3>
                            <a href="#">{{ $v_category->category_name }}</a>
                        </h3>
                        <p>{!! $v_category->category_desc  !!} </p>
                           
                            
                        
                        
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    <div class="class-shape">
        <div class="shape-1">
            <img src="assets/img/class/class-shape-1.png" alt="image">
        </div>
        <div class="shape-2">
            <img src="assets/img/class/class-shape-2.png" alt="image">
        </div>
    </div>
</section>
<!--Popular Courses -->
<section class="class-area bg-fdf6ed pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            
            <h2>Popular Courses</h2>
            
        </div>
        <div class="row">
            @foreach ($all_course as $v_course )
                
            
            <div class="col-lg-4 col-md-6">
                <div class="single-class">
                    <div class="class-image">
                        <a href="#">
                            <img src="{{asset('regular_course_image/'.$v_course->course_image)}}" alt="image">
                        </a>
                    </div>
                    <div class="class-content">
                        <div class="price">₹{{ $v_course->price }}</div>
                        <h3>
                            <a href="{{URL::to('course-details/'.$v_course->id) }}">{{ $v_course->course_title }}</a>
                        </h3>
                        <p>{!! $v_course->short_desc !!}</p>
                        <ul class="class-list">
                            <li>
                                <span>Level:</span>
                                {{ $v_course->level }}
                            </li>
                            
                           
                        </ul>
                        <div class="class-btn">
                            <a href="{{URL::to('course-details/'.$v_course->id) }}" class="default-btn">Join Course</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           {{--  <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-class">
                    <div class="class-image">
                        <a href="#">
                            <img src="assets/img/class/class-3.jpg" alt="image">
                        </a>
                    </div>
                    <div class="class-content">
                        <div class="price">₹590</div>
                        <h3>
                            <a href="#">Middle</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                        <ul class="class-list">
                            <li>
                                <span>Age:</span>
                                11-14 Year
                            </li>
                            <li>
                                <span>Time:</span>
                                8-10 AM
                            </li>
                            
                        </ul>
                        <div class="class-btn">
                            <a href="#" class="default-btn">Join Class</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="class-shape">
        <div class="shape-1">
            <img src="assets/img/class/class-shape-1.png" alt="image">
        </div>
        <div class="shape-2">
            <img src="assets/img/class/class-shape-2.png" alt="image">
        </div>
    </div>
</section>



{{-- <section class="value-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="value-image">
                    <img src="assets/img/value/value-1.png" alt="image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="value-item">
                    <div class="value-content">
                        <span>Our Core Values</span>
                        <h3>We are Refunding Early Childcare Education</h3>
                    </div>
                    <div class="value-inner-content">
                        <div class="number">
                            <span>01</span>
                        </div>
                        <h4>Active Learning</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="value-inner-content">
                        <div class="number">
                            <span class="bg-2">02</span>
                        </div>
                        <h4>Safe Environment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="value-inner-content">
                        <div class="number">
                            <span class="bg-3">03</span>
                        </div>
                        <h4>Fully Equipment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="value-shape">
        <div class="shape-1">
            <img src="assets/img/value/value-shape-1.png" alt="image">
        </div>
        <div class="shape-2">
            <img src="assets/img/value/value-shape-2.png" alt="image">
        </div>
        <div class="shape-3">
            <img src="assets/img/value/value-shape-3.png" alt="image">
        </div>
    </div>
</section> --}}


<section class="teacher-area bg-ffffff pt-100 pb-70">
    <div class="container-fluid">
        <div class="section-title">
            <span>Our Mentors</span>
            <h2>Advisory Board</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-teacher">
                    <div class="image">
                        <img src="assets/img/teacher/teacher-1.jpg" alt="image">
                        <ul class="social">
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
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Dr. Piyush Gupta</h3>
                        <span>Academic Coordinator - CSC Academy</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-teacher">
                    <div class="image">
                        <img src="assets/img/teacher/teacher-2.jpg" alt="image">
                        <ul class="social">
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
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Veena Raizada</h3>
                        <span>Academic Consultant
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-teacher">
                    <div class="image">
                        <img src="assets/img/teacher/teacher-3.jpg" alt="image">
                        <ul class="social">
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
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Priestly Herbart</h3>
                        <span>Principal
                            Milkyway High School, Hyderabad
                            </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-teacher">
                    <div class="image">
                        <img src="assets/img/teacher/teacher-4.jpg" alt="image">
                        <ul class="social">
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
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Smith Broke</h3>
                        <span>Entrepreneur</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonials-area pt-100 pb-100">
    <div class="container">
        <div class="section-title">
            <span>Testimonials</span>
            <h2>What Students Say</h2>
        </div>
        <div class="testimonials-slides owl-carousel owl-theme">
            @foreach ($all_testimonial as $v_testimonial )
                
           
            <div class="testimonials-item">
                <div class="testimonials-item-box">
                    <div class="icon">
                        <i class='bx bxs-quote-left'></i>
                    </div>
                    <p>{!! $v_testimonial->educator_msg !!}</p>
                    <div class="info-box">
                        <h3>{{ $v_testimonial->educator_name }}</h3>
                        <span>{{ $v_testimonial->educator_designation }},
                            {{ $v_testimonial->educator_org }}</span>
                    </div>
                </div>
                <div class="testimonials-image">
                    <img src="assets/img/testimonials/testimonials-1.png" alt="image">
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>


<section class="event-area bg-ffffff pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Events</span>
            <h2>Upcoming Events</h2>
        </div>
        <div class="event-box-item">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="event-image">
                        <a href="#"><img src="assets/img/event/event-1.png" alt="image"></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="event-content">
                        <h3>
                            <a href="#">Annual Cultural Programme</a>
                        </h3>
                        <ul class="event-list">
                            <li>
                                <i class='bx bx-time'></i>
                                8:00 AM - 10:00 PM
                            </li>
                            <li>
                                <i class='bx bxs-map'></i>
                                New York 56 Glassford Street Glasgow
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event-date">
                        <h4>12</h4>
                        <span>September</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-box-item">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="event-image">
                        <a href="#"><img src="assets/img/event/event-2.png" alt="image"></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="event-content">
                        <h3>
                            <a href="#">World Kids Day</a>
                        </h3>
                        <ul class="event-list">
                            <li>
                                <i class='bx bx-time'></i>
                                8:00 AM - 10:00 PM
                            </li>
                            <li>
                                <i class='bx bxs-map'></i>
                                New York 56 Glassford Street Glasgow
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event-date">
                        <h4>18</h4>
                        <span>January</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-box-item">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="event-image">
                        <a href="#"><img src="assets/img/event/event-3.png" alt="image"></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="event-content">
                        <h3>
                            <a href="#">World Drawing Day</a>
                        </h3>
                        <ul class="event-list">
                            <li>
                                <i class='bx bx-time'></i>
                                8:00 AM - 10:00 PM
                            </li>
                            <li>
                                <i class='bx bxs-map'></i>
                                New York 56 Glassford Street Glasgow
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event-date">
                        <h4>25</h4>
                        <span>March</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-box-item">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="event-image">
                        <a href="#"><img src="assets/img/event/event-4.png" alt="image"></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="event-content">
                        <h3>
                            <a href="#">Teachers Day</a>
                        </h3>
                        <ul class="event-list">
                            <li>
                                <i class='bx bx-time'></i>
                                8:00 AM - 10:00 PM
                            </li>
                            <li>
                                <i class='bx bxs-map'></i>
                                New York 56 Glassford Street Glasgow
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event-date">
                        <h4>30</h4>
                        <span>April</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>News and Blog</span>
            <h2>Latest News</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                    <div class="blog-image">
                        <a href="#">
                            <img src="assets/img/blog/blog-1.jpg" alt="image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <ul class="post-meta">
                            <li>
                                <span>By Admin:</span>
                                <a href="#">Jack John</a>
                            </li>
                            <li>
                                <span>Date:</span>
                                25 Dec 2021
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Red Green Color Blindness</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                        <div class="blog-btn">
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                    <div class="blog-image">
                        <a href="#">
                            <img src="assets/img/blog/blog-2.jpg" alt="image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <ul class="post-meta">
                            <li>
                                <span>By Admin:</span>
                                <a href="#">Glims Bond</a>
                            </li>
                            <li>
                                <span>Date:</span>
                                26 Dec 2021
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">8 Ways to Learning Lesson</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                        <div class="blog-btn">
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-blog-item">
                    <div class="blog-image">
                        <a href="#">
                            <img src="assets/img/blog/blog-3.jpg" alt="image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <ul class="post-meta">
                            <li>
                                <span>By Admin:</span>
                                <a href="#">Smith Broke</a>
                            </li>
                            <li>
                                <span>Date:</span>
                                27 Dec 2021
                            </li>
                        </ul>
                        <h3>
                            <a href="blog-details.html">Full-Day Session With Activities</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                        <div class="blog-btn">
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection