@foreach ($all_course as $v_course )
            <div class="col-lg-6 col-md-6">
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