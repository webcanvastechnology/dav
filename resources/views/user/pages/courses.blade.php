@extends('layouts.userapp')

@section('content')

<div class="page-banner-area item-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Courses</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Courses</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="class-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="row filter-card">
                    <div class="rounded shadow overflow-hidden sticky-bar" style="padding-bottom: 10px">
                        <div class="sidebar-title">
                            <p>Grade</p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border rounded">
                                <h2 class="accordion-header" id="grade">
                                    <button class="accordion-button border-0 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        <div class="row align-items-center">
                                            <div class="col-md-12" style="color: black">
                                                Select Grade
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="grade" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        <ul class="list-unstyled sidebar-nav mb-0">
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades K - 2</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 3 -5</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 6 - 8</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 9 - 12</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-title">
                            <p>Topics</p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border rounded">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#topic1" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">CS Foundation</div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="topic1" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        <ul class="list-unstyled sidebar-nav mb-0">
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades K - 2</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 3 -5</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 6 - 8</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 9 - 12</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border rounded mt-2">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#topic2" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">CS Discovery</div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="topic2" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        <ul class="list-unstyled sidebar-nav mb-0">
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Computing Devices and Components</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 3 -5</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 6 - 8</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 9 - 12</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border rounded mt-2">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button border-0 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#topic3" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">CS Expedition</div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="topic3" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        <ul class="list-unstyled sidebar-nav mb-0">
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades K - 2</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 3 -5</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 6 - 8</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 9 - 12</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-title">
                            <p>Tools</p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border rounded">
                                <h2 class="accordion-header" id="grade">
                                    <button class="accordion-button border-0 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tools" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        <div class="row align-items-center">
                                            <div class="col-md-12" style="color: black">
                                                Select Tools
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="tools" class="accordion-collapse border-0 collapse" aria-labelledby="grade"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted">
                                        <ul class="list-unstyled sidebar-nav mb-0">
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades K - 2</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 3 -5</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 6 - 8</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>Grades 9 - 12</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
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
                </div>
            </div>
            {{-- <div class="col-lg-12 col-md-12">
                <div class="pagination-area">

                    {{ $all_course->links() }}
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
@endsection
