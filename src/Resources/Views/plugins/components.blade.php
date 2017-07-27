@extends('cms::layouts.mTabs',['index'=>'framework_plugins'])
@section('tab')

    <div class="row list_222">

        {!! HTML::image('resources/assets/images/ajax-loader5.gif', 'a picture', array('class' => 'thumb img-loader hide')) !!}
        <div class="tpl-list">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row template-search m-b-20">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 template-search-box m-t-10 m-b-10">
                        <form class="form-horizontal">
                            <div class="form-group m-b-0  ">
                                <label for="inputEmail3" class="control-label text-left"><i
                                            class="fa fa-sort-amount-desc"></i> Sort By
                                </label>

                                <select profile-id="11" data-sub="false" data-type="main-container"
                                        class="form-control sort-items selectpicker" data-style="selectCatMenu"
                                        name="sort" data-width="50%">
                                    <option value="" selected="selected">Order By</option>
                                    <option value="created_at.asc">Recently Added</option>
                                    <option value="created_at.desc">Old Added</option>
                                    <option value="name.asc">Name by asc</option>
                                    <option value="name.desc">Name by desc</option>
                                </select>

                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 p-l-0 p-r-0">
                        <div class="template-upload-button clearfix">
                            <div class="rightButtons">
                                <div class="btn-group listType">
                                    <a href="#" class="btn btnListView"><i class="fa fa fa-th-list"></i></a>
                                    <a href="#" class="btn btnGridView active"><i class="fa fa-th-large"></i></a>
                                </div>
                                <a class="btn btn-default searchBtn"><i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                            </div>

                            <ul class="editIcons list-unstyled ">
                                <li><a href="#" class="btn trashBtn" data-toolaction="deletes"><i
                                                class="fa fa-trash-o"></i></a></li>
                                <li><a href="#" class="btn copyBtn" data-toolaction="copy"><i
                                                class="fa fa-clone"></i></a></li>
                                <li><a href="#" class="btn editBtn" data-toolaction="edit"><i class="fa fa-pencil"></i></a>
                                </li>
                            </ul>
                            <button class="btn btn-sm pull-right btnUploadWidgets"  data-toggle="modal" data-target="#uploadfile" type="button">
                                <i class="glyphicon glyphicon-plus module_upload_icon"></i>
                                <span class="upload_module_text">Add New</span>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="container_main">
                    <div class="row" data-role="listitem">
                        @foreach($components->data as $key=>$component)

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="main_div_1" data-toolaction="selected"
                                 data-classname="stylename">
                                <div class="top_part_1">{!! $components->getHtml($key) !!}</div>
                                @if(!isset($component['active']) || !$component['active'])
                                <a href="{!! url('admin/framework/plugins/components/make-active-component',[$key,'activate']) !!}" class="btn btn-info fa fa-play"></a>
                                @else
                                    <a href="{!! url('admin/framework/plugins/components/make-active-component',[$key,'deactivate']) !!}" class="btn btn-success fa fa-pause"></a>

                                @endif
                                <div class="bottom_part_1">
                                    <a href="#"><span>{!! $component['name'] !!}</span></a>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="uploadfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['url'=>'/admin/framework/component/upload','class'=>'dropzone', 'id'=>'my-awesome-dropzone']) !!}

                    {!! Form::close() !!} </div>
            </div>
        </div>
    </div>

    <script type="template" data-template="existinggroup">
        <div class="row">
            <div class="col-sm-4">
                <ul class="list-unstyled menuTplList" data-existmodal="tabmenu">

                </ul>
            </div>
            <div class="col-sm-8 tab-content" data-existmodal="listinggroup">
                <span class="ajaxloding"></span>
            </div>
        </div>

    </script>
    <script type="template" data-template="existinglist">
        <div class="col-sm-4">
            <a href="#" class="thumbBox" data-actionexit="" data-cssdata='{data}' data-classpath='{classpath}' data-realclass="{realClass}" data-stype="{styletype}" data-css="{type}"
               data-selectclass=".{name}">
                <img src="/app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg" alt="">
                <h4>{name}</h4></a>
        </div>
    </script>
    @include('resources::assests.deleteModal',['title'=>'Delete Style'])
@stop
@section('CSS')
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/new-store.css') !!}
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/style_cube.css') !!}
    {!! HTML::style('/js/animate/css/animate.css') !!}
    {!! Html::style('app/Modules/Framework/Resources/Views/assets/css/styles.css') !!}
    {!! Html::style('app/Modules/Framework/Resources/Views/assets/base.min.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/framework/frameworkstudio.css') !!}
    {!! HTML::style('/resources/assets/frameworkcss/frameworkcss.less') !!}
    {!! HTML::style('/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    <style id="savedcss" data-role="savedcss">
    </style>
@stop
@section('JS')
    {!! HTML::script('/js/less.js') !!}
    {!! HTML::script('js/dropzone/js/dropzone.js') !!}
    {!! HTML::script('/js/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/component.js') !!}
    <script>
        Dropzone.options.myAwesomeDropzone = {
            init: function () {
                this.on("success", function (file) {
                    location.reload();
                });
            }
        };
    </script>
@stop


