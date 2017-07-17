@extends('layouts.mTabs',['index'=>'framework'])
@section('tab')
    <div class="row list_222">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="cms_module_list module_list_1">
            <h3 class="menuText f-s-17">
                <span class="module_icon_main_text">
                {!! Form::select('type',$types,$type,['class' => 'form-control select-type']) !!}
                </span>
            </h3>
            <hr>
            <ul class="list-unstyled menuList" id="components-list" data-role="componentslist">
                @if(count($selectMenuItems))
                    @foreach($selectMenuItems as $key=>$value)
                        <li class="@if($p==$key) active_class @endif">
                            <a href="?type={{ $type }}&amp;p={!! $key !!}" profile-id="11" main-type="text_size"
                               rel="tab" class="tpl-left-items">
                                <span class="module_icon"></span>{!! htmlentities($value) !!}
                            </a><a data-type="{!! $key !!}" class="add-class-modal pull-right gettype"></a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <img src="http://www.cardbugs.uk/resources/assets/images/ajax-loader5.gif" class="thumb img-loader hide"
             alt="a picture">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
            <div class="tpl-list">
                {{--<div class="row template-search">--}}
                {{-- @if(!isset($rules['limit']) || !$rules['limit'] || ($rules['limit'] && count($data)<$rules['max']))--}}
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-l-0 p-r-0">
                    <div class="template-upload-button clearfix">
                        {{--@if($allow_import)--}}
                        {{--<button class="btn btn-sm pull-right btnUploadWidgets" type="button"--}}
                        {{--data-toggle="modal"--}}
                        {{--data-target="#importmodal" data-tab="basic" data-type="{!! $type !!}"--}}
                        {{--data-sub="{!! $p !!}">--}}
                        {{--<i class="glyphicon glyphicon-plus module_upload_icon"></i>--}}
                        {{--<span class="upload_module_text">Import</span>--}}
                        {{--</button>--}}
                        {{--@endif--}}
                    </div>
                </div>
                {{-- @endif--}}
                {{--</div>--}}
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
                        {{--@if($data)--}}
                        @if(View::exists("framework::ReferencesCustom.$type.$p"))
                            @include("framework::ReferencesCustom.$type.$p")
                        @elseif(View::exists("framework::ReferencesCustom.$type.all"))
                            @include("framework::ReferencesCustom.$type.all")
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
@section('CSS')
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/new-store.css') !!}
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/style_cube.css') !!}
    {!! HTML::style('/resources/assets/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! HTML::style('/resources/assets/js/animate/css/animate.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/css/styles.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/base.min.css') !!}
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
        var dd = console.debug;
        Dropzone.options.myAwesomeDropzone = {
            init: function () {
                this.on("success", function (file) {
//                    location.reload();
                });
            }
        };


        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("input[name='_token']").val()
                }
            });

            $("body").on('click', '[data-key="true"]', function () {
                var mytext = $(this).parent().attr('data-itemjson');
                $('.text_area').empty();
                $('.text_area').text(mytext);
            });
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

            $('body').on('click', '.activate-custom-class', function() {
                $.ajax({
                    url: $(this).data('url'),
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        item_name: $(this).data('item-name'),
                        id: $(this).data('id')
                    }
                }).done(function(data) {
                    if(data.success) {
                        window.location.reload();
                    }
                }).fail(function() {
                    alert('Could not activate class. Please try again.');
                });
            });
        });
    </script>
@stop