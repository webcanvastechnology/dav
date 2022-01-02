<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/metrolab/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 May 2018 17:47:12 GMT -->
<head>
   <meta charset="utf-8" />
   <title>Super Teacher</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Mosaddek" name="author" />
  
    
    
    


    
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset')}}/assets/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="{{asset('admin_asset')}}/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset')}}/assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset')}}/assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset')}}/assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="{{asset('admin_asset')}}/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset')}}/assets/bootstrap-daterangepicker/daterangepicker.css" />

   <link href="{{asset('admin_asset/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
   <link href="{{asset('admin_asset/assets/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
   <link href="{{asset('admin_asset/assets/bootstrap/css/bootstrap-fileupload.css')}}" rel="stylesheet" />
   <link href="{{asset('admin_asset/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
   <link href="{{asset('admin_asset/css/style.css')}}" rel="stylesheet" />
   <link href="{{asset('admin_asset/css/style-responsive.css')}}" rel="stylesheet" />
   <link href="{{asset('admin_asset/css/style-default.css')}}" rel="stylesheet" id="style_color" />
   <link href="{{asset('admin_asset/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
   <link href="{{asset('admin_asset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>


   
    <link href="{{asset('admin_asset/assets/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/assets/uniform/css/uniform.default.css')}}" />
     <link rel="stylesheet" href="{{asset('admin_asset/assets/data-tables/DT_bootstrap.css')}}" /> 
    <link href="{{asset('admin_asset/assets/jquery-ui/jquery-ui-1.10.1.custom.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset/assets/chosen-bootstrap/chosen/chosen.css')}}" />
    
    <link rel="stylesheet" type="text/css" href="{{asset('admin_asset')}}/assets/jquery-tags-input/jquery.tagsinput.css" />
<link rel="stylesheet" href="{{asset('frontend')}}/toaster/toastr.min.css">
<link href="{{asset('admin_asset/assets/dropzone/css/dropzone.css')}}" rel="stylesheet"/>

      <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script> 
      {{-- <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

      <script src="{{asset('admin_asset')}}/ckeditor/ckeditor.js"></script> --}}
      <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
      <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>
      @yield('data_table_script')
     
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO -->
               <a class="brand" href="index-2.html">
                   <img src="{{asset('frontend/kids/images/super_teacher_logo.png')}}" alt="Super Teacher" height="30px" width="30px" />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                   <ul class="nav top-menu">
                       <!-- BEGIN SETTINGS -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-tasks"></i>
                               <span class="badge badge-important">6</span>
                           </a>
                           <ul class="dropdown-menu extended tasks-bar">
                               <li>
                                   <p>You have 6 pending tasks</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                         <div class="desc">Dashboard v1.3</div>
                                         <div class="percent">44%</div>
                                       </div>
                                       <div class="progress progress-striped active no-margin-bot">
                                           <div class="bar" style="width: 44%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Database Update</div>
                                           <div class="percent">65%</div>
                                       </div>
                                       <div class="progress progress-striped progress-success active no-margin-bot">
                                           <div class="bar" style="width: 65%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Iphone Development</div>
                                           <div class="percent">87%</div>
                                       </div>
                                       <div class="progress progress-striped progress-info active no-margin-bot">
                                           <div class="bar" style="width: 87%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Mobile App</div>
                                           <div class="percent">33%</div>
                                       </div>
                                       <div class="progress progress-striped progress-warning active no-margin-bot">
                                           <div class="bar" style="width: 33%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Dashboard v1.3</div>
                                           <div class="percent">90%</div>
                                       </div>
                                       <div class="progress progress-striped progress-danger active no-margin-bot">
                                           <div class="bar" style="width: 90%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li class="external">
                                   <a href="#">See All Tasks</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END SETTINGS -->
                       <!-- BEGIN INBOX DROPDOWN -->
                       <li class="dropdown" id="header_inbox_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-envelope-alt"></i>
                               <span class="badge badge-important">5</span>
                           </a>
                           <ul class="dropdown-menu extended inbox">
                               <li>
                                   <p>You have 5 new messages</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jonathan Smith</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example msg.
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jhon Doe</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Jhon Doe Bhai how are you ?
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jason Stathum</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard.
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jondi Rose</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is metrolab
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all messages</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END INBOX DROPDOWN -->
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class="dropdown" id="header_notification_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                               <i class="icon-bell-alt"></i>
                               <span class="badge badge-warning">7</span>
                           </a>
                           <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>You have 7 new notifications</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Server #3 overloaded.
                                       <span class="small italic">34 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-warning"><i class="icon-bell"></i></span>
                                       Server #10 not respoding.
                                       <span class="small italic">1 Hours</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Database overloaded 24%.
                                       <span class="small italic">4 hrs</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-success"><i class="icon-plus"></i></span>
                                       New user registered.
                                       <span class="small italic">Just now</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                       Application error.
                                       <span class="small italic">10 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all notifications</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <!-- BEGIN SUPPORT -->
                       <li class="dropdown mtop5">

                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                               <i class="icon-comments-alt"></i>
                           </a>
                       </li>
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                               <i class="icon-headphones"></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="img/avatar1_small.jpg" alt="">
                               <span class="username"><?php echo Session::get('admin_name'); ?></span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                               <li><a href="{{URL::to('admin-logout')}}"><i class="icon-key"></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="sub-menu active">
                  <a class="" href="{{URL::to('dashboard')}}">
                      <i class="icon-dashboard"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              
              
            


              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Manage User</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                     
                      <li><a class="" href="{{URL::to('regular-paid-user')}}">All User</a></li>
                     
                      
                  </ul>
              </li>

              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Contact Info</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                     
                      <li><a class="" href="{{URL::to('contact-list')}}">Manage Contact</a></li>
                      
                      
                  </ul>
              </li>

               <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Visitor Info</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                     
                      <li><a class="" href="{{URL::to('visitor-list')}}">Manage Visitor</a></li>
                      
                      
                  </ul>
              </li>
            
                  
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Special Courses</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                     
                      <li><a class="" href="{{URL::to('add-special-course')}}">Add course</a></li>
                     
                      <li><a class="" href="{{URL::to('manage-course-special')}}">Manage course</a></li>
                      
                  </ul>
              </li>

               <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Teacher Course</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                     
                      <li><a class="" href="{{URL::to('add-course')}}">Add course</a></li>
                      <li><a class="" href="{{URL::to('manage-course')}}">Manage course</a></li>
                       <li><a class="" href="{{URL::to('add-subcourse')}}">Add AUD category</a></li>
                      <li><a class="" href="{{URL::to('manage-subcourse')}}">Manage AUD category</a></li>
                      
                      
                  </ul>
              </li>
              <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-book"></i>
                    <span>Regular Courses</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{URL::to('add-category')}}">Add category</a></li>
                    <li><a class="" href="{{URL::to('manage-category')}}">Manage category</a></li>
                   
                    <li><a class="" href="{{URL::to('add-regular-course')}}">Add course</a></li>
                    <li><a class="" href="{{URL::to('manage-regular-course')}}">Manage course</a></li>
                     <li><a class="" href="{{URL::to('add-audience')}}">Add AUD category</a></li>
                    <li><a class="" href="{{URL::to('manage-audience')}}">Manage AUD category</a></li>
                    
                    
                </ul>
            </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Date Info</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                     
                      <li><a class="" href="{{URL::to('add-date')}}">Add Date</a></li>
                      <li><a class="" href="{{URL::to('manage-date')}}">Manage Date</a></li>
                      
                      
                  </ul>
              </li>
            
             <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-book"></i>
                    <span>Workshop</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                   
                    <li><a class="" href="{{URL::to('add-workshops')}}">Add workshop</a></li>
                    <li><a class="" href="{{URL::to('manage-workshop')}}">Manage Workshops</a></li>
                    
                    
                    
                </ul>
            </li>

             <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Coupon Info</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                     
                      <li><a class="" href="{{URL::to('add-coupon')}}">Add Coupon</a></li>
                      <li><a class="" href="{{URL::to('manage-coupon')}}">Manage Coupon</a></li>
                      
                      
                  </ul>
              </li>
            <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Coupon Used</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                     
                      <li><a class="" href="{{URL::to('report-coupon')}}">Cupon Report</a></li>
                     
                      
                      
                  </ul>
              </li>

              <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-book"></i>
                    <span>News</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                   
                    <li><a class="" href="{{URL::to('add-news')}}">Add news</a></li>
                    <li><a class="" href="{{URL::to('manage-news')}}">Manage news</a></li>
                     
                    
                    
                </ul>
            </li>

              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>Testimonial</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                     
                      <li><a class="" href="{{URL::to('add-testimonial')}}">Add testimonial</a></li>
                      <li><a class="" href="{{URL::to('manage-testimonial')}}">Manage testimonial</a></li>
                       
                      
                      
                  </ul>
              </li>

              <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-book"></i>
                    <span>Client Gallery</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                   
                    <li><a class="" href="{{URL::to('dropzone')}}">Add Client</a></li>
                    
                     
                    
                    
                </ul>
            </li>

              <li>
                  <a class="" href="{{URL::to('admin-logout')}}">
                    <i class="icon-user"></i>
                    <span>Logout</span>
                  </a>
              </li>
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
        @yield('admin_main_content')
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2020 &copy; Super Teacher Dashboard.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="{{asset('admin_asset/js/jquery-1.8.3.min.js')}}"></script>
   <script src="{{asset('admin_asset/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
   <script type="text/javascript" src="{{asset('admin_asset/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('admin_asset/assets/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
   <script src="{{asset('admin_asset/assets/fullcalendar/fullcalendar/fullcalendar.min.js')}}"></script>
   <script src="{{asset('admin_asset/assets/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('admin_asset')}}/js/jQuery.dualListBox-1.3.js" language="javascript" type="text/javascript"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <script src="{{asset('admin_asset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}" type="text/javascript"></script>
   <script src="{{asset('admin_asset/js/jquery.sparkline.js')}}" type="text/javascript"></script>
   <script src="{{asset('admin_asset/assets/chart-master/Chart.js')}}"></script>
   <script src="{{asset('admin_asset/js/jquery.scrollTo.min.js')}}"></script>


   <!--common script for all pages-->
   <script src="{{asset('admin_asset/js/common-scripts.js')}}"></script>

   <!--script for this page only-->

   <script src="{{asset('admin_asset/js/easy-pie-chart.js')}}"></script>
   <script src="{{asset('admin_asset/js/sparkline-chart.js')}}"></script>
   <script src="{{asset('admin_asset/js/home-page-calender.js')}}"></script>
   <script src="{{asset('admin_asset/js/home-chartjs.js')}}"></script>

   <!-- END JAVASCRIPTS -->   
   <!--script for this page only-->
    
   {{-- <script src="{{asset('admin_asset/js/dynamic-table.js')}}"></script> --}}
   <script type="text/javascript" src="{{asset('admin_asset/assets/uniform/jquery.uniform.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('admin_asset/assets/data-tables/jquery.dataTables.js')}}"></script>
   <script type="text/javascript" src="{{asset('admin_asset/assets/data-tables/DT_bootstrap.js')}}">
     </script>
    
   
   <script src="{{asset('admin_asset/js/jquery.blockui.js')}}"></script>
   <script src="{{asset('admin_asset')}}/code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <!--script for this page only-->
   <script src="{{asset('admin_asset/js/editable-table.js')}}"></script>

   <!-- END JAVASCRIPTS -->
   <script>
       jQuery(document).ready(function() {
           EditableTable.init();
       });
   </script>
   <script>
       jQuery(document).ready(function() {
           EditableTable1.init();
       });
   </script> 

<script type="text/javascript" src="{{asset('admin_asset')}}/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/clockface/js/clockface.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="{{asset('admin_asset')}}/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script src="{{asset('admin_asset')}}/assets/fancybox/source/jquery.fancybox.pack.js"></script>



   <!--script for this page only-->
   <script src="{{asset('admin_asset/js/sliders.js')}}" type="text/javascript"></script>
   <script src="{{asset('admin_asset/assets/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('admin_asset/js/form-component.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin_asset/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
   <script type="text/javascript" src="{{asset('admin_asset/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>

   <script type="text/javascript" src="{{asset('admin_asset/assets/chosen-bootstrap/chosen/chosen.jquery.min.js')}}"></script>
   
 
   <script src="{{asset('frontend/toaster/toastr.min.js')}}"></script>
   
        {!! Toastr::message() !!}


</body>
<!-- END BODY -->


</html>