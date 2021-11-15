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
                                    <form method="Post" action="{{ route('updateworkshops') }}" enctype="multipart/form-data"
                                        files="true">

                                        @csrf()

                                        <div class="control-group">
                                            <label class="control-label">Workshop title</label>
                                            <div class="controls">
                                                <input type="text" class="span6 " name="workshops_title" value="{{ $all_workshop->workshops_title }}" />
                                                <input type="hidden" class="span6 " name="workshops_id" value="{{ $all_workshop->id }}" />


                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Registration Link</label>
                                            <div class="controls">
                                                <input type="text" class="span6 " name="reg_link" value="{{ $all_workshop->reg_link }}"/>

                                            </div>
                                        </div>
                                     

                                        <div class="control-group">
                                            <label class="control-label">Workshop Image</label>
                                            <div class="controls">
                                                <input type="file" class="default" name="course_image[]" multiple>
                                                <img src="{{asset('public/workshop_image/'.$all_workshop->course_image)}}">
                                            </div>
                                        </div>

                                       
                                        <div class="control-group">
                                            <label class="control-label">Long Description</label>
                                            <div class="controls">
                                                <textarea name="long_desc">{!! $all_workshop->long_desc !!}</textarea>

                                            </div>
                                        </div>
                                       
                                        
                                        <div class="control-group">
                                            <label class="control-label">Venu</label>
                                            <div class="controls">
                                                <textarea name="venu">{!! $all_workshop->venu !!}</textarea>

                                            </div>
                                        </div>

                                       <div class="control-group">
                                            <label class="control-label">Date Details</label>
                                            <div class="controls">
                                                <textarea name="date_details">{!! $all_workshop->date_details !!}</textarea>

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Organizer</label>
                                            <div class="controls">
                                                <textarea name="organizer">{!! $all_workshop->organizer !!}</textarea>

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
    CKEDITOR.replace('venu');

</script>
<script>
    CKEDITOR.replace('long_desc');

</script>
<script>
    CKEDITOR.replace('date_details');

</script>
<script>
    CKEDITOR.replace('organizer');

</script>


@endsection
