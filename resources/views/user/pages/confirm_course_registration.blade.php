@extends('layouts.userapp')

@section('content')

<section class="login-area ptb-100">
    <div class="container">
        <div class="login-form">
            <h2>Course Confirm</h2>
            <form method="post" name="user_form"  action="{{ url('regular-payment-process') }}" >
                @csrf() 
            
                 <input  type="hidden" required class="form-control" name="course_id" placeholder="Fill Course Name" value="{{$find_course->id}}">
                  <input  type="hidden" required class="form-control" name="fees" placeholder="Fill Fees" value="{{$find_course->price}}">
                          <div class="row">
                            <div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                <label for="promo_code"><span style="color:#000;">Registration No. </span></label>
                                <input type="text" class="form-control" id="p_name" placeholder="Enter Name" required="" value="{{$customer_info->application_id}}" readonly="" name="reg_id" >
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                <label for="promo_code"><span style="color:#000;">Name </span></label>
                                <input type="text" class="form-control" id="p_name" placeholder="Enter Name" required="" name="name"  value="{{$customer_info->name}}" readonly="">
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                <label for="promo_code"><span style="color:#000;">Organization Name </span></label>
                                <input type="text" class="form-control" id="p_name" placeholder="Enter School / Organization Name" required="" name="org_name" value="{{$customer_info->org_name}}" readonly="" >
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                <label for="promo_code"><span style="color:#000;">City</span></label>
                                <input type="text" class="form-control" id="p_name" placeholder="Enter Your City" required="" name="city" value="{{$customer_info->city}}" readonly="" >
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                <label for="promo_code"><span style="color:#000;">Email </span></label>
                                <input type="email" class="form-control" id="p_email" placeholder="Enter your Email" required="" name="email" value="{{$customer_info->email}}" readonly="">
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                <label for="promo_code"><span style="color:#000;">Contact Number </span></label>
                                <input type="text" class="form-control" id="p_phone" placeholder="Enter Phone Number" name="phone" value="{{$customer_info->phone}}" readonly="">
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
            
                              @if($customer_info->aud_id==0)
                              <!--
                            <div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                <label for="promo_code"><span style="color:#000;">Grades you teach </span></label>
                                <input type="text" class="form-control" id="myInput" placeholder="Grades you teach" name="grade" value="{{$customer_info->grade}}" readonly="" >
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                           
                            <div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                <label for="promo_code"><span style="color:#000;">Subjects You Teach </span></label>
                                <input type="text" class="form-control" id="p_subject" placeholder="Subjects You Teach" name="teach" value="{{$customer_info->teach}}" readonly="">
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          -->
            
                            @else
                            <div class="col-sm-6 col-md-6">
                              <div class="form-group">
                              
                                <input type="hidden" class="form-control" id="myInput" placeholder="Number Of Participants" name="number_of_participants"  value="{{$customer_info->number_of_participants}}" readonly="" >
                               
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            @endif
            
                            
            
                            <div class="col-sm-12 col-md-12">
                              <div class="form-group">
                                 <label for="promo_code"><span style="color:#000;">Course Title </span></label>
                                <input type="text" class="form-control" id="p_subject" placeholder="Subjects You Teach" name="course_name" value="{{$find_course->course_title}}" readonly="">
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            
            
                            
                            <div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                 <label for="promo_code"><span style="color:#000;">Fees </span></label>
                                <input type="text" class="form-control" id="fees" placeholder="Subjects You Teach" name="fees" value="{{$customer_info->fees}}" readonly="">
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
            
                              <div class="col-sm-6 col-md-6">
                                
                              <div class="form-group">
                                <label for="promo_code"><span style="color:red;">Apply Promocode (If you have any):</span></label>
                                <input type="text" class="form-control"  placeholder="Promo Code" id="code" name="code">
                               
                              </div>
                            
            
                             
                            <div class="form-group">
                            <div id="success"></div>
                            <button class="btn btn-info" id="promo-code">Apply Coupon</button> 
                          </div>
                        
                        </div>
                           
                          <div class="form-group">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-success">Pay Now</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">


    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });


    $("#promo-code").click(function(e){

        e.preventDefault();


        var code = $("input[name=code]");
        var course_id = $("input[name=course_id]").val();
        var reg_id = $("input[name=reg_id]").val();
       

        $.ajax({

           type:'GET',

           url:'/apply-code',

           data:{code:code.val(),course_id:course_id,reg_id:reg_id},

           success:function(data){
            if(data.status){
              swal("Congratulation!", data.success, "success");
              code.attr('readonly', "true")
            } else {
              swal("Sorry!", data.success, "error");
              code.attr('readonly', "false")
            }

            if(data.dis){
              $("#fees").val(data.dis);
            }

           }

        });


  });

</script>


@endsection