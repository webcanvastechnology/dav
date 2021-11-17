@extends('layouts.userapp')

@section('content')

<div class="page-banner-area item-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Class Details</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Class Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="class-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="class-details-desc">
                    <div class="class-desc-image">
                        <img src="{{asset('course_image/'.$find_course->course_image)}}" alt="image">
                    </div>
                    <div class="tab class-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li>
                                        <a href="#">
                                            Description
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Teacher
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Lesson
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Cost
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="class-desc-content">
                                            {!! $find_course->long_desc !!}
                                            {{-- <ul class="requirements-list">
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Aliquam sit amet mi vitae turpis gravida vulputate.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Proin a orci nec sapien condimentum imperdiet.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Suspendisse viverra lectus eu augue efficitur pulvinar.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Mauris a purus ut mauris sodales ultrices.
                                                </li>
                                            </ul> --}}
                                        </div>
                                    </div>
                                    <div class="tabs_item">
                                        <div class="class-desc-content">
                                            <h3>Education Lessons</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <h3>English Lesson Class</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <h3>Requirements</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <ul class="requirements-list">
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Aliquam sit amet mi vitae turpis gravida vulputate.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Proin a orci nec sapien condimentum imperdiet.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Suspendisse viverra lectus eu augue efficitur pulvinar.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Mauris a purus ut mauris sodales ultrices.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tabs_item">
                                        <div class="class-desc-content">
                                            <h3>Education Lessons</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <h3>English Lesson Class</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <h3>Requirements</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <ul class="requirements-list">
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Aliquam sit amet mi vitae turpis gravida vulputate.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Proin a orci nec sapien condimentum imperdiet.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Suspendisse viverra lectus eu augue efficitur pulvinar.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Mauris a purus ut mauris sodales ultrices.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tabs_item">
                                        <div class="class-desc-content">
                                            <h3>Education Lessons</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <h3>English Lesson Class</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <h3>Requirements</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                            <ul class="requirements-list">
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Aliquam sit amet mi vitae turpis gravida vulputate.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Proin a orci nec sapien condimentum imperdiet.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Suspendisse viverra lectus eu augue efficitur pulvinar.
                                                </li>
                                                <li>
                                                    <i class='bx bx-check'></i>
                                                    Mauris a purus ut mauris sodales ultrices.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="class-details-information">
                    <h3>Information</h3>
                    <ul>
                        <li>
                            <span>Student:</span>
                            25
                        </li>
                        <li>
                            <span>Lectures:</span>
                            6
                        </li>
                        <li>
                            <span>Time:</span>
                            9AM - 11:30AM
                        </li>
                        <li>
                            <span>Learn Day:</span>
                            Monday, Wednesday
                        </li>
                        <li>
                            <span>Language:</span>
                            English
                        </li>
                    </ul>
                </div>
                <div class="class-newsletter">
                    <div class="newsletter-content">
                        <h3>Subscribe to Our Newsletter</h3>
                    </div>
                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL"
                            required autocomplete="off">
                        <button type="submit">Subscribe</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="related-class">
                    <h3>Audience Category</h3>
                    <?php if($status==1){ ?>

                        <?php $auds = json_decode($find_course->audience_category ); ?>
                        @if (is_array($auds))
                    <div class="row">
                        

                @foreach($auds as $aud)
                <?php $find_aud=DB::table('aud_category')->where('aud_id',$aud)->first(); ?>
                 
                        <div class="col-lg-4 col-md-6">
                            <div class="single-class">
                                <div class="class-image">
                                    <a href="#">
                                        <img src="{{asset('course_image/'.$find_course->course_image)}}" alt="image">
                                    </a>
                                </div>
                                <div class="class-content">
                                    <div class="price">₹{{$find_aud->price}}</div>
                                    <h3>
                                        <a href="#">{{$find_aud->aud_name}}</a>
                                    </h3>
                                    <p>{!! $find_aud->aud_short_desc !!}</p>
                                    {{-- <ul class="class-list">
                                        <li>
                                            <span>Duration:</span>
                                            {{$find_aud->duration}}
                                        </li>
                                       
                                    </ul> --}}
                                    <div class="class-btn">
                                        <a href="{{URL::to('regular-registration/'.$find_course->id.'/'.$find_aud->aud_id) }}" class="default-btn">Join Class</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                <!-- Item 3 -->
                @endif

                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection