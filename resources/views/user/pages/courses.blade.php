@extends('layouts.userapp')

@section('content')

<div class="page-banner-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Class</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Class</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="class-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            @foreach ($all_course as $v_course )
            <div class="col-lg-4 col-md-6">
                <div class="single-class">
                    <div class="class-image">
                        <a href="#">
                            <img src="{{asset('course_image/'.$v_course->course_image)}}" alt="image">
                        </a>
                    </div>
                    <div class="class-content">
                        <div class="price">₹{{ $v_course->price }}</div>
                        <h3>
                            <a href="#">{{ $v_course->course_title }}</a>
                        </h3>
                        <p>{!! $v_course->short_desc !!}</p>
                        <ul class="class-list">
                            <li>
                                <span>Level:</span>
                                {{ $v_course->level }}
                            </li>
                            
                        </ul>
                        <div class="class-btn">
                            <a href="#" class="default-btn">Join Course</a>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers">
                        <i class='bx bx-chevron-left'></i>
                    </a>
                    <a href="#" class="page-numbers">1</a>
                    <span class="page-numbers current" aria-current="page">2</span>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    <a href="#" class="next page-numbers">
                        <i class='bx bx-chevron-right'></i>
                    </a>
                </div>
            </div>
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
@endsection