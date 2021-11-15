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
                             <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN  widget-->
                    <div class="widget red">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> WYSIWYG Editor</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                    <form method="Post" action="{{ route('posttestimonial') }}" enctype="multipart/form-data" files="true">  
                   
                               @csrf() 

                              <div class="control-group">
                                <label class="control-label">Educator Name</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="educator_name" />
                                   
                                </div>
                            </div>

                            <div class="control-group">
                                    <label class="control-label">Educator Image</label>
                                    <div class="controls">
                                        <input type="file" class="default" name="educator_image[]" multiple>
                                    </div>
                                </div>

                            <div class="control-group">
                                <label class="control-label">Educator Organization</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="educator_org" />
                                   
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Educator Designation</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="educator_designation" />
                                   
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label">Message Type</label>
                                <div class="controls">
                                   

                                    <select class="form-control" id="exampleFormControlSelect1" name="msg_type">
                                    <option value="">--select--</option>  
                                    <option value="0">Text</option>
                                    <option value="1">Video</option>
                                   
                                   
                                    
                                  </select>
                                   
                                   
                                </div>
                            </div>

                           
                            
                             
                                <div style='display:none;' id='video_msg'>
                            <div class="control-group">
                                <label class="control-label">Educator Video</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="educator_video_msg"  />
                                   
                                </div>
                            </div>
                          </div>

                             <div style='display:none;' id='text_msg'>
                                <div class="control-group">
                                    <label class="control-label">Educator Message</label>
                                    <div class="controls">
                                        <textarea name="educator_msg">
                                         
                                        </textarea>
              
                                    </div>
                                </div>
                              </div>
                        
                            

                          
                        
                            

                          
                           
                                 <div class="mtop20">
                                    <input type="submit" value="Submit" class="btn"/>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXTRAS widget-->
                </div>
            </div>

                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>

            <!-- END EDITABLE TABLE widget-->
         </div>

        <script type="text/javascript">
function showDiv(select){
   if(select.value==1){
    document.getElementById('video_msg').style.display = "block";
    document.getElementById('text_msg').style.display = "none";
   } 
   else if(select.value==0){
    document.getElementById('text_msg').style.display = "block";
    document.getElementById('video_msg').style.display = "none";
   }
   else{
    document.getElementById('text_msg').style.display = "none";
    document.getElementById('video_msg').style.display = "none";
   }
} 
</script>
        

      <script>
                        CKEDITOR.replace( 'educator_msg' );
                </script>
               

               


         @endsection