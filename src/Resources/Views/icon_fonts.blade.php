@extends('layouts.mTabs',['index'=>'framework'])
@section('tab')
    <div class="row list_222">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="cms_module_list module_list_1">
                <h3 class="menuText f-s-17">
                    {{--<span class="module_icon_main"></span>--}}
                    <span class="module_icon_main_text">
                        {!! Form::select('styles',$selectMenuItems,$type,['class' => 'form-control select-type']) !!}
                    </span>
                </h3>
                <hr>
                <ul class="list-unstyled menuList" id="components-list" data-role="componentslist">
                    @if(View::exists("framework::$curent_sub_dir.$type"))
                        @include("framework::$curent_sub_dir.$type")
                    @endif
                </ul>
            </div>
            @if($tab != 'basic')

                <button type="button" class="add_new_btn" data-toggle="modal" data-target="#addnewgroup"><i
                            class="fa fa-plus" aria-hidden="true"></i>Add New
                </button>
            @endif
        </div>
        {!! HTML::image('resources/assets/images/ajax-loader5.gif', 'a picture', array('class' => 'thumb img-loader hide')) !!}
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
            <div class="tpl-list">
                <div class="row template-search">
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
                                                class="fa fa-clone"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn editBtn" data-toolaction="edit"><i
                                                class="fa fa-pencil"></i>
                                    </a>
                                </li>
                            </ul>
                            <button class="btn btn-sm pull-right btnUploadWidgets" type="button" data-toggle="modal"
                                    data-target="#myModal">
                                <i class="glyphicon glyphicon-plus module_upload_icon"></i>
                                <span class="upload_module_text">Add New</span>
                            </button>
                            <button class="btn btn-sm pull-right btnUploadWidgets" type="button" data-toggle="modal"
                                    data-target="#importmodal">
                                <i class="glyphicon glyphicon-plus module_upload_icon"></i>
                                <span class="upload_module_text">Import</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row template-search top_div_sort_41 hide">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 template-search-box m-t-10 m-b-10">
                        <form class="form-horizontal form_sort_31">
                            <div class="form-group m-b-0">
                                <label for="inputEmail3" class="col-xs-12 col-sm-2 control-label"
                                       style="font-weight: bold;">Sort
                                    By</label>
                                <div class="col-sm-5">

                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 for_icons_17">
                        <a class="pull-right for_search_17">
                            <i class="fa fa-search f-s-15" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="container_main">
                    <div data-role="listitem">

                    </div>
                    <div class="templates-list  m-t-20 m-b-10">
                        <div class="row templates m-b-10">
                            {{--@include('framework::_partials.chose_items')--}}


                            <div class="modal fade fullscreenModal" id="myModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            @if($p)
                                                <input type="text" data-role="classname"
                                                       class="modal-title studioNameInput" id="name" name="title"
                                                       data-studiname="gradientcolor" value="nameofclass">
                                            @else
                                                <h5 class="	modal-title" id="exampleModalLabel"> {!!$type!!}   </h5>
                                            @endif

                                            <div class="pull-right">
                                                <button class="save_item" data-savestudio="{!!$p!!}"><i
                                                            class="fa fa-check" aria-hidden="true"></i>Save
                                                </button>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                        </div>
                                        <div class="modal-body p-t-0 p-r-0">


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <input type="hidden" data-action="tab" value="{!! $tab !!}">
    <input type="hidden" data-action="type" value="{!! $type !!}">
    <input type="hidden" data-action="sub" value="{!! $p !!}">
    <textarea name="json_data" class="form-control" data-export="json"></textarea>
    <textarea name="json_datahover" class="form-control" data-export="hoverjson"></textarea>
    <!-- Modal -->
    <div class="modal fade" id="varModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span data-existmodal="name"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" data-existmodal="listing">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="#" class="thumbBox">
                                <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                     alt="">
                                <h4>Variation 0001</h4></a>
                        </div>

                        <div class="col-sm-4">
                            <a href="#" class="thumbBox">
                                <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                     alt="">
                                <h4>Variation 0001</h4></a>
                        </div>

                        <div class="col-sm-4">
                            <a href="#" class="thumbBox">
                                <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                     alt="">
                                <h4>Variation 0001</h4></a>
                        </div>

                        <div class="col-sm-4">
                            <a href="#" class="thumbBox">
                                <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                     alt="">
                                <h4>Variation 0001</h4></a>
                        </div>

                        <div class="col-sm-4">
                            <a href="#" class="thumbBox">
                                <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                     alt="">
                                <h4>Variation 0001</h4></a>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="addnewgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Add New Group
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                {!! Form::open(['url'=>'admin/framework/create-new-group']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="groupname">Group name</label>
                        <input type="text" class="form-control" id="groupname" placeholder="Enter Group name">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-role="addnewgroup" data-dismiss="modal">Add New
                        Group
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    <style>
        .inl-bl {
            display: inline-block;
        }

        .demopreview {
            display: block;
            width: 100%;
            min-height: 200px;
            margin: 0 auto;
            border: solid 2px #ccc;
        }
    </style>
    <style id="savedcss" data-role="savedcss">
    </style>
    <script type="template" data-template="existinglist">
        <div class="col-sm-4">
            <a href="#" class="thumbBox" data-actionexit="" data-cssdata='{data}' data-css="{type}"
               data-selectclass=".{name}">
                <img src="/app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg" alt="">
                <h4>{name}</h4></a>
        </div>
    </script>
    <script type="template" data-template="listingitem">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="main_div_1" data-toolaction="selected" data-classname="{name}">
                <div class="top_part_1">{!! "" !!}</div>
                <div class="bottom_part_1">
                    <a href="#"><span>{name}</span></a>
                </div>
            </div>
        </div>
    </script>
    @include('resources::assests.deleteModal',['title'=>'Delete Style'])
@stop
@section('CSS')
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/new-store.css') !!}
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/style_cube.css') !!}
    {!! HTML::style('/resources/assets/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! HTML::style('/resources/assets/js/animate/css/animate.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/css/styles.css') !!}

    {!! HTML::style('/resources/assets/js/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/framework/frameworkstudio.css') !!}
@stop
@section('JS')
    {!! HTML::script('resources/assets/js/dropzone/js/dropzone.js') !!}
    {!! HTML::script('/resources/assets/js/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! HTML::script('/resources/assets/js/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') !!}
    {!! HTML::script('/resources/assets/js/ace-editor/ace.js') !!}
    {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/framework.js') !!}
    <script>
        Dropzone.options.myAwesomeDropzone = {
            init: function () {
                this.on("success", function (file) {
//                    location.reload();
                });
            }
        };


        $(document).ready(function () {


            $("body").on('change', '.select-type', function () {
                var value = $(this).val();
                window.location.href = window.location.pathname + "?type=" + value;
            });


            var p = "{!! $_GET['p'] or null !!}";
            var scrollTop = $(window).scrollTop();
            $(window).resize(function () {
                $('body').find('.popup_div').css({
                    'height': $(window).height() - 227,
                    "top": scrollTop
                });
            });


//            $("a[main-type=" + p + "]").click();

            $('.tpl-list').on("click", '.close_icon', function () {
                var id = $(this).attr('data-id');
                $(".popup_div_" + id).slideToggle("slow");
                $("body").css("overflow", "visible");
            });

        });
    </script>
@stop


