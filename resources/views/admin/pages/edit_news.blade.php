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
                    <form method="Post" action="{{ route('updatenews') }}" enctype="multipart/form-data" files="true" name="edit_form">  
                   
                               @csrf() 


                              <div class="control-group">
                                <label class="control-label">Title</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="news_title" value="{{$all_news->title}}" />
                                     <input type="hidden" class="span6 " name="news_id" value="{{$all_news->id}}" />
                                   
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Date</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="news_date" value="{{$all_news->news_date}}" />
                                   
                                </div>
                            </div>
                            <div class="control-group">
                                    <label class="control-label">News Image</label>
                                    <div class="controls">
                                        <input type="file" class="default" name="news_image[]" multiple>
                                         <img src="{{asset('news_image/'.$all_news->news_image)}}">
                                    </div>
                                </div>

                           
                                
                                    <div class="control-group">
                                        <label class="control-label">Short Info</label>
                                        <div class="controls">
                                            <textarea name="short_info">
                                              {!! $all_news->short_info !!}
                                            </textarea>
                  
                                        </div>
                                    </div>
                                  
                            

                             
                                <div class="control-group">
                                    <label class="control-label">News Details</label>
                                    <div class="controls">
                                        <textarea name="news_details">
                                          {!! $all_news->news_details !!}
                                        </textarea>
              
                                    </div>
                                </div>
                              
                        
                            

                          
                           
                                 <div class="mtop20">
                                    <input type="submit" value="Update" class="btn"/>
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



        

         <script>
            CKEDITOR.replace( 'news_details' );
    </script>
   

      <script>
                        CKEDITOR.replace( 'short_info' );
                </script>
               

               


         @endsection