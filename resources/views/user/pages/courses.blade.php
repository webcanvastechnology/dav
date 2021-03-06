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
                                            
                                           
                                            @foreach($all_grade as $v_grade)

                                            
                                            
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" name="grade" id="{{$v_grade->grade_id}}" value="{{$v_grade->grade_id}}"/>
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>{!! $v_grade->grade_name !!}</p>
                                                    </div>
                                                </div>
                                            </li>
                                           
                                            @endforeach
                                           
                                           
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
                                            @foreach($all_foundation as $v_foundation)
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" name="foundation" value="{{$v_foundation->cs_foundation_id}}"/>
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>{!! $v_foundation->cs_foundation_name !!}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach

                                            
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
                                            @foreach($all_discover as $v_discover)
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" name="discover" value="{{$v_discover->cs_discover_id}}" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>{!! $v_discover->cs_discover_name !!}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            
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
                                            @foreach($all_expediion as $v_expediion)
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" name="expediion" value="{{$v_expediion->cs_expediion_id}}"/>
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>{!! $v_expediion->cs_expediion_name !!}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            
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
                                            @foreach($all_tools as $v_tools)
                                            <li class="navbar-item custom-navbar-item">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-2">
                                                        <input class="form-check-input" type="checkbox" name="tools" value="{{$v_tools->tools_id}}" />
                                                    </div>

                                                    <div class="col-md-10 col-sm-10 col-10">
                                                        <p>{!! $v_tools->tools_name !!}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-9">
                <div class="row"  id="course">
            @foreach ($all_course as $v_course )
            <div class="col-lg-6 col-md-6">
                <div class="single-class">
                    <div class="class-image">
                        <a href="#">
                            <img src="{{asset('regular_course_image/'.$v_course->course_image)}}" alt="image">
                        </a>
                    </div>
                    <div class="class-content">
                        <div class="price">???{{ $v_course->price }}</div>
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
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

var getfilters = function (grade,foundation,discover,expediion,tools) {
  console.log(grade);
  $.ajax({
    type: 'POST',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: '/get-filter',
    data: {
      "grade": grade,"foundation":foundation,"discover":discover,"expediion":expediion,"tools":tools,
      "_token": "{{ csrf_token() }}"
    },
    error: function(e) {
      console.log(e.responseText);
    },
    success: function (data) {
      
      
      $('#course').html(data)
    }
  });
};

$(document).ready(function() {
    $('input[type="checkbox"]').on('change', function(event) {
      event.preventDefault();
      var grade = [];
      var foundation = [];
      var discover = [];
      var expediion = [];
      var tools = [];
     
      $.each($("input[name='grade']:checked"), function() {            
        grade.push($(this).val());
      });

      $.each($("input[name='foundation']:checked"), function() {            
        foundation.push($(this).val());
      });

      $.each($("input[name='discover']:checked"), function() {            
        discover.push($(this).val());
      });
      $.each($("input[name='expediion']:checked"), function() {            
        expediion.push($(this).val());
      });
      $.each($("input[name='tools']:checked"), function() {            
        tools.push($(this).val());
      });
  
      $('#myResponse').html(); 
      getfilters(grade,foundation,discover,expediion,tools);
    });
  });
</script>

@endsection
