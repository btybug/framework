@extends('cms::layouts.mTabs',['index'=>'version'])
@section('tab')
    <div class="row list_222">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="cms_module_list module_list_1">
                <h3 class="menuText f-s-17">
                    <span class="module_icon_main_text">
                       {!! Form::select('styles',$types,$type,['class' => 'form-control select-type']) !!}
                    </span>
                </h3>
                <hr>
                @if($type=='grid')
                    <button class="btn btn-danger col-md-12">Configure Settings</button>
                @endif
                @if($type!='grid')
                    <ul class="list-unstyled menuList" id="components-list" data-role="componentslist">
                        @if(count($subTypes))
                            @foreach($subTypes as $subType)
                                <li class="@if($p==$subType->id) active_class @endif">
                                    <a href="?type={!!$type!!}&amp;p={!! $subType->id !!}" profile-id="12"
                                       main-type="default"
                                       rel="tab" class="tpl-left-items">
                                        <span class="module_icon"></span> {!! $subType->name !!}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                @endif
            </div>
            @if($type!='grid')
                <button type="button" class="add_new_btn" data-toggle="modal" data-target=".bs-example-modal-sm"><i
                            class="fa fa-plus" aria-hidden="true"></i>Add New
                </button>
            @endif
        </div>
        <img src="http://www.cardbugs.uk/resources/assets/images/ajax-loader5.gif" class="thumb img-loader hide"
             alt="a picture">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
            <div class="tpl-list">
                <div class="row">
                    <button class="btn btn-sm pull-right btnUploadWidgets" id="save-configurator" type="button">
                        <i class="fa fa-check module_upload_icon" aria-hidden="true"></i>
                        <span class="upload_module_text">Save</span>
                    </button>
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
                @if(View::exists("FrameworkVersions::$editor"))
                    @include("FrameworkVersions::$editor")
                @endif
                <div class="container_main">
                    @if($sub_type)
                        @if($type!='foundation')
                            @foreach($sub_type->classes as $class)
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="main_div_1" data-toolaction="selected"
                                         data-classname="{!! $class->class !!}">
                                        <div class="bottom_part_1" data-item="" data-key="true">
                                            <a href="#"><span>{!!  $class->class !!}</span></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @foreach($sub_type->classes as $class)
                                <div class="col-xs-12 col-sm-12 unit-box m-t-15">
                                    <div class="layout clearfix">
                                        <img src="/app/Modules/Resources/Resources/assets/img/layout-img.jpg" alt="" class="layoutImg">
                                        <div class="layoutData">
                                            <div class="layoutCol p-r-0">
                                                <div class="text_area col-md-4">
                                                    <div class="" data-toolaction="selected"
                                                         data-classname="{!! $class->class !!}">
                                                        <div class="col-md-6" data-item="" data-key="true">
                                                            <a href="#" style="color: #ac4040;"><span>{!!  $class->class !!}</span></a>
                                                        </div></div>
                                                </div>
                                                <div class="col-md-6">

                                                </div>
                                                <div class="col-md-2 text-right">
                                                    <a href="#"
                                                       class="btn trashBtn"><i class="fa fa-trash-o"></i> </a>
                                                    <a href="#"
                                                       class="btn editBtn" target="_blank"><i class="fa fa-pencil"></i> </a>
                                                </div>
                                                <div class="layoutFooter row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 ">
                                                        <span class="textWrap"><a href="" class="link"><i></i></a></span>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4  centerText">
                                                        {{--<span class="iconRefresh"><i class="fa fa-refresh"></i></span>--}}
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 rightText">
                                                        <i class="fa fa-user"></i>Author name, 01.01.2017
                                                    </div>
                                                    <div class="col-md-12 p-b-5">
                                                        No Classes configured
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('framework::_partials.upload_custom_classes')
    <input id="classname" class="form-control hide" name="title" data-role="classname" required=""
           value="{!! $sub_type->name or null !!}"
           type="text">
    <textarea name="json_data" class="form-control "
              data-export="json">@if($sub_type && count($sub_type->classes)){!! $sub_type->classes[0]->json_data !!}@endif</textarea>
    <textarea name="less_data" class="form-control" data-export="css"></textarea>

    {!! Form::hidden(null,$type,['class'=>'page-type']) !!}
    {!! Form::hidden(null,$p,['class'=>'page-sub']) !!}
@stop
@section('CSS')
    <style>
        .value_input .form-control {
            background-color: #404040;
            border-color: #404040;
            color: #cccccc;
        }

        .value_input .input-group-btn-vertical {
            right: 19px;
        }

        .colorSelectBox .form-control {
            border: none;
        }
    </style>
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/new-store.css') !!}
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/style_cube.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/grids/assets/css/css.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/css/styles.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/framework/frameworkstudio.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/grids/assets/css/freamwork.css') !!}
    {!! HTML::style('/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! HTML::style('/js/animate/css/animate.css') !!}
    {!! HTML::style('/app/Modules/Studios/Resources/Views/assets/text/css/text-studio.css?v=3.20') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/css/styles.css') !!}
    {!! HTML::style('public/framework/base.min.css') !!}
    {!! HTML::style('/css/icon-buttons.css') !!}
    {!! HTML::style('/js/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}
    {!! HTML::style('/app/Modules/Studios/Resources/Views/assets/color/css/color-builder.css?v=0.20') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/framework/frameworkstudio.css') !!}
    {!! HTML::style('/app/Modules/Studios/Resources/Views/assets/css/styles.css') !!}
    {!! HTML::style('/app/Modules/Studios/Resources/Views/Classes/container/css/container-studio.css?v=0.57') !!}

@stop
@section('JS')
    {!! HTML::script('js/dropzone/js/dropzone.js') !!}
    {!! HTML::script('/js/icon-plugin.js?v=0.50" type="text/javascript') !!}
    {!! HTML::script('/js/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! HTML::script('/js/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') !!}
    {!! HTML::script('/js/ace-editor/ace.js') !!}
    {!! HTML::script('/js/icon-plugin.js?v=0.50" type="text/javascript') !!}
    <script>
        var dd = console.debug;
        Dropzone.options.myAwesomeDropzone = {
            init: function () {
                this.on("success", function (file) {
//                    location.reload();
                });
            }
        };


        $(document).ready(function () {
            $("body").on('click', '[data-key="true"]', function () {
                var mytext = $(this).parent().attr('data-itemjson');
                $('.text_area').empty();
                $('.text_area').text(mytext);
            });
            $("body").on('change', '.select-type', function () {
                var value = $(this).val();
                window.location.href = window.location.pathname + "?type=" + value;
            });
            $("body").on('click', '.main_div_1', function () {
                $('body').find('.main_div_1').removeClass('active');
                $(this).addClass('active');
                console.log($(this).attr('data-classname'));
                $('#classname').attr('value', $(this).attr('data-classname'));
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
