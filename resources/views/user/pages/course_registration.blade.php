@extends('layouts.userapp')

@section('content')
<?php $find_aud_course=DB::table('aud_category')->where('aud_id',$sub_id)->first(); ?>
<section class="login-area ptb-100">
    <div class="container">
        <div class="login-form">
            <h2>Course Registration</h2>
            <form method="post" name="user_form" action="{{ route('postregistration-course') }}">
                @csrf()
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="required">Name:</label>
                            <input type="text" class="form-control" id="p_name" placeholder="Enter Name"
                                required="" name="name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="required">School / Organization Name:</label>
                            <input type="text" class="form-control" id="p_name"
                                placeholder="Enter School / Organization Name" required="" name="org_name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="required">City:</label>
                            <input type="text" class="form-control" id="p_name" placeholder="Enter Your City"
                                required="" name="city">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="required">Email:</label>
                            <input type="email" class="form-control" id="p_email" placeholder="Enter your Email"
                                required="" name="email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="required">Phone Number:</label>
                            <input type="text" class="form-control" id="p_phone"
                                placeholder="Enter Phone Number" name="phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                @if($sub_id==0 )
                <input type="hidden" required class="form-control " name="course_id"
                    placeholder="Fill Course Name" value="{{$find_course->id}}">
                <input type="hidden" required class="form-control" name="sub_course_id"
                    placeholder="Fill Course Name" value="0">
                    <input type="hidden" required class="form-control" name="fees" placeholder="Fill Fees"
                    value="{{$find_course->price}}">
                    <input type="hidden" class="form-control" id="myInput" placeholder="Number Of Participants"
                        name="number_of_participants" value="1">
                @else
                <input type="hidden" required class="form-control" name="course_id"
                    placeholder="Fill Course Name" value="{{$find_course_details->id}}">
                <input type="hidden" required class="form-control" name="sub_course_id"
                    placeholder="Fill Course Name" value="{{$find_aud_course->aud_id}}">
                    <input type="hidden" required class="form-control" name="fees" placeholder="Fill Fees"
                    id="amount" value="{{$find_aud_course->price}}">
                {{-- <input type="hidden" required class="form-control" name="fees2" placeholder="Fill Fees"
                    id="price"> --}}
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">

                            <label class="required">Number Of Participants</label>
                            <input type="number" class="qty" id="qty" placeholder="Number Of Participants"
                                name="number_of_participants" min="{{ $find_aud_course->aud_min }}" max="{{ $find_aud_course->aud_max }}" value="{{ $find_aud_course->aud_min }}">

                           
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                @endif
               
                                        
           
                
                 

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="required">Course Name</label>
                            <input type="text" class="form-control" id="p_subject"
                                placeholder="Subjects You Teach" name="class_title"
                                value="{{$find_course_details->course_title}}" readonly="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    



                </div>
          
                <div class="form-group">
                    <div id="success"></div>
                    <div class="redtext">
                        <button type="submit" class="btn bg-yellow">Submit</button>
                    </div>
                </div>
            </form>
            {{-- <form>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">

                    <label>Email or phone</label>
                    <input type="text" class="form-control" placeholder="Email or phone">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="Password">
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkme">
                            <label class="form-check-label" for="checkme">Remember me</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                        <a href="#" class="lost-your-password">Forgot your password?</a>
                    </div>
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="important-text">
                <p>Don't have an account? <a href="register.html">Register now!</a></p>
            </div> --}}
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".my-activity").click(function (event) {
            var total = 0,
                str_mod = '';

            $(".my-activity:checked").each(function () {
                var str = $(this).val();
                var res = str.split(':');
                total += parseInt(res[0]);



                str_mod = str_mod + res[1] + ", ";



            });

            if (total == 0) {
                $('#price').val('0');
                $('#amount1').val('');

            } else {
                $('#price').val(total);
                $('#amount1').val(str_mod);


            }
            //$('#qty').val();
            update_amounts($('#qty').val());
        });
    });

</script>

<script type="text/javascript">
    $(document).ready(function () {

        //update_amounts();
        $('.qty').keyup(function () {
            update_amounts(this.value);
        });
        $('.qty').keydown(function () {
            update_amounts(this.value);
        });
    });



    function update_amounts(value) {


        //var qty = $(this).find('option:selected').val();
        const price = parseInt($('#price').val());
        const amount = (parseInt(value) * price)

        if (value) {
            $('#amount').val('' + amount);
        }


        //just update the total to sum  
        //$('.total').text(sum);
    }

</script>


@endsection