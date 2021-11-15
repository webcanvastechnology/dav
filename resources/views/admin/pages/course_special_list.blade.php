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
                             <h4><i class="icon-reorder"></i> Contact Table</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
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
                                         <th>Title</th>
                                         
                                           
                                            <th>Price</th>
                                            <th>Show In Home</th>
                                            
                                             <th>Edit</th>
                                              
                                              
                                         
                                         
                                        
                                     </tr>
                                     </thead>
                                     <tbody>
                                     	@foreach($all_course as $v_course)
                                     <tr class="">
                                         <td>{{$v_course->id}}</td>
                                         <td>{{$v_course->title}}</td>
                                        
                                        
                                         <td>{{$v_course->price}}</td>
                                         @if($v_course->home_page==0)
                                         <td>No</td>
                                         @else
                                         <td>Yes</td>
                                         @endif
                                         

                                      <td> <a class="btn btn-info" href="{{URL::to('/edit-course-special/'.$v_course->id)}}">
                                                <i class="icon-edit icon-white"></i> 
                                              </a></td>
                                      
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
         
     
<div class="container">
    <div class="row">
        <div class="col-md-4">

            <ul class="sort_menu list-group">
                @foreach ($all_menu as $row)
                <li class="list-group-item" data-id="{{$row->id}}">
                    <span class="handle">{{$row->title}}</span> </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
<style>
    .list-group-item {
        display: flex;
        align-items: center;
        padding-bottom: 5px;
        text-align: center;
        color: #fff;
        font-size: 16px;
        
    }

    .highlight {
        background: #f7e7d3;
        min-height: 30px;
        list-style-type: none;
    }

    .handle {
        min-width: 100%;
        background: #079ee9;
        height: 40px;
        display: inline-block;
        cursor: move;
        margin-right: 10px;
        
    }
</style>


         <script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
<script>
    $(document).ready(function(){

    	function updateToDatabase(idString){
    	   $.ajaxSetup({ headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'}});
    		
    	   $.ajax({
              url:'{{url('update-course-special-order')}}',
              method:'GET',
              data:{ids:idString},
              success:function(){
                 alert('Successfully updated')
               	 //do whatever after success
              }
           })
    	}

        var target = $('.sort_menu');
        target.sortable({
            handle: '.handle',
            placeholder: 'highlight',
            axis: "y",
            update: function (e, ui){
               var sortData = target.sortable('toArray',{ attribute: 'data-id'})
               updateToDatabase(sortData.join(','))
            }
        })
        
    })
</script>

    <script type="text/javascript">

      $(document).ready(function() {
    
    $('#example').DataTable( {
        aaSorting: [[0, 'desc']]
    } );
} );
    </script>

         @endsection