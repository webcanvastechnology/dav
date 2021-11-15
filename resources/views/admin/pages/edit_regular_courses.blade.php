@extend('admin.admin-master')
@section('admin_main_content')

<script type="text/javascript">
    function check_delete() {
        chk = confirm("Are you sure to delete item ?");
        if (chk) {
            return true;
        } else {
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
                                    <form method="Post" action="{{ route('updateregularcourse') }}" enctype="multipart/form-data"
                                        files="true">

                                        @csrf()

                                        <div class="control-group">
                                            <label class="control-label">Course title</label>
                                            <div class="controls">
                                                <input type="text" class="span6 " name="course_title" value="{{ $find_course->course_title }}" />

                                            </div>
                                        </div>
                                        <input type="hidden" class="span6 " name="course_id" value="{{ $find_course->id }}" />
                                        <div class="control-group">
                                            <label class="control-label">Duration</label>
                                            <div class="controls">
                                                <input type="text" class="span6 " name="duration"  value="{{ $find_course->duration }}"/>

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Price</label>
                                            <div class="controls">
                                                <input type="text" class="span6 " name="price" value="{{ $find_course->price }}" />

                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <label class="control-label"> Order</label>
                                            <div class="controls">
                                                <input type="text" class="span6 " name="priority" value="{{ $find_course->priority }}"/><span
                                                    class="help-inline">only numeric value i.e 1,2,3 etc</span>

                                            </div>
                                        </div>



                                        <div class="control-group">
                                            <label class="control-label">Card Background Color</label>
                                            <div class="controls">
                                                <input type="text" class="span6 " name="card_bgcolor"  value="{{ $find_course->card_bgcolor }}"/><span
                                                    class="help-inline">Type only
                                                    bg-blue,bg-green,bg-yellow,bg-redis</span>

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Course Image</label>
                                            <div class="controls">
                                                
                                                <input type="file" class="default" name="course_image[]" multiple>
                                                <img src="{{asset('public/regular_course_image/'.$find_course->course_image)}}">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Short Description</label>
                                            <div class="controls">
                                                <textarea name="short_desc">
                                                    {!! $find_course->short_desc !!}
                                                </textarea>

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Long Description</label>
                                            <div class="controls">
                                                <textarea name="long_desc">
                                                    {!! $find_course->long_desc !!}
                                                </textarea>

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Audience Category</label>
                                            <div class="controls">
                                                <select data-placeholder="Your Audience Category" name="cat[]" class="chzn-select span6" multiple="multiple" tabindex="6">
                                                    <option value=""></option>
                                                    @foreach($all_audience as $v_aud)
                                                        <option value="{{ $v_aud->aud_id }}">{{ $v_aud->aud_title }}</option>
                                                    @endforeach
                                                        
                                                   
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        
                                       

                                        <div class="control-group">
                                            <label class="control-label">Have Course Module ?</label>
                                            <div class="controls">
                                                <select id="test" class="form-control" id="exampleFormControlSelect1"
                                                    name="have_individual_module">
                                                    <option value="">--select--</option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>


                                                </select>

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Email Subject</label>
                                            <div class="controls">
                                                <input type="text" class="span6 " name="email_subject" value="{{ $find_course->email_subject }}" />

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Email Description</label>
                                            <div class="controls">
                                                <textarea name="email_desc">
                                                    {!! $find_course->email_desc !!}
                                                </textarea>

                                            </div>
                                        </div>



                                        <div class="mtop20">
                                            <input type="submit" value="Submit" class="btn" />
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
    CKEDITOR.replace('short_desc');

</script>
<script>
    CKEDITOR.replace('long_desc');

</script>
<script>
    CKEDITOR.replace('email_desc');

</script>


@endsection