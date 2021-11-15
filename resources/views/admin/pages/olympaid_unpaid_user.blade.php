@extend('admin.admin-master')
@section('admin_main_content')

<script type="text/javascript">
				function check_delete()
				{
					chk=confirm("Are you sure to delete item ?");
					if(chk)
					{
						return true;
					}
					else
					{
						return false;
					}
				}
				
			</script>


 <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     user Table
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Data Table</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                              user Table
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget purple">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Editable Table</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div class="table-responsive">
                                 <div class="clearfix">
                                    <!-- <div class="btn-group">
                                         <button id="editable-sample_new" class="btn green">
                                             Add New <i class="icon-plus"></i>
                                         </button>
                                     </div>
                                 -->
                                     <div class="btn-group pull-right">
                                         <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">Print</a></li>
                                             <li><a href="#">Save as PDF</a></li>
                                             <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="space15"></div>
                                 <table id="example" class="table table-striped table-bordered" style="width:100%">
                                     <thead>
                                     <tr>
                                         <th>ID</th>
                                         <th>Reg.ID</th>
                                         <th>Name</th>
                                          <th>School</th>
                                          <th>Class</th>
                                           <th>Email</th>
                                            <th>Phone</th>
                                            <th>Country</th>
                                             <th>City</th>
                                              
                                               
                                               <th>Reg. time</th>
                                               <th>Status</th>
                                         
                                         
                                        
                                     </tr>
                                     </thead>
                                     <tbody>
                                     	@foreach($all_user as $v_user)
                                       
                                     <tr class="">
                                         <td>{{$v_user->id}}</td>
                                          <td>{{$v_user->application_id}}</td>
                                         <td>{{$v_user->name}}</td>
                                         <td>{{$v_user->school_name}}</td>
                                         <td>{{$v_user->school_class}}</td>
                                         <td>{{$v_user->email}}</td>
                                         <td>{{$v_user->phone}}</td>
                                         <td>{{$v_user->country}}</td>
                                         <td>{{$v_user->city}}</td>
                                         
                                         
                                         
                                         <td>{{$v_user->created_at}}</td>
                                         <td><?php
									if($v_user->status==1)
									{
									?>
				<a class="btn btn-success" href="#">
										<i class="icon-ok icon-white"></i> Paid
									</a>
									<?php
								}
									elseif($v_user->status==0)
									{
									?>
				<a class="btn btn-danger" href="#">
										<i class="icon-ban-circle icon-white"></i> Unpaid 
									</a>
									<?php
								}

								?></td>
                                         
                                       
                                     </tr>
                                    
                                    @endforeach
                                   
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>

            <!-- END EDITABLE TABLE widget-->
         </div>

   

    <script type="text/javascript">

      $(document).ready(function() {
    
    $('#example').DataTable( {
        aaSorting: [[0, 'desc']]
    } );
} );
    </script>

         @endsection