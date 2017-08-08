@extends('cms::layouts.mTabs',['index'=>'collection'])
@section('tab')
    <div class="row list_222">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="cms_module_list module_list_1">
                <h3 class="menuText f-s-17">
                    {{--<span class="module_icon_main_text">--}}
                    {{--{!! Form::select('styles',['elements'=>'Elements','components'=>'Components'],'elements',['class' => 'form-control select-type']) !!}--}}
                    {{--</span>--}}
                </h3>
                {{--<hr>--}}
                <ul class="list-unstyled menuList" id="components-list" data-role="componentslist">
                    @foreach($selectMenuItems as $key=>$value)
                        <li class="@if($type==$key) active_class @endif">
                            <a href="?type={!! $key !!}" profile-id="11" main-type="text_size"
                               rel="tab" class="tpl-left-items">
                                <span class="module_icon"></span>{!! htmlentities($value) !!}
                            </a><a data-type="{!! $key !!}" class="add-class-modal pull-right gettype"></a>
                        </li>
                    @endforeach
                </ul>
            </div>
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
                            {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
                            {{--Launch demo modal--}}
                            {{--</button>--}}
                            {{--<button class="btn btn-sm pull-right btnUploadWidgets" type="button"  data-toggle="modal" data-target="#uploadfile">--}}
                            {{--<i class="glyphicon glyphicon-plus module_upload_icon"></i>--}}
                            {{--<span class="upload_module_text">Upload</span>--}}
                            {{--</button>--}}
                            {{--<button class="btn btn-sm pull-right btnUploadWidgets" type="button" data-toggle="modal"--}}
                            {{--data-target="#myModal">--}}
                            {{--<i class="glyphicon glyphicon-plus module_upload_icon"></i>--}}
                            {{--<span class="upload_module_text">Add New</span>--}}
                            {{--</button>--}}
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
                        @if($data)
                            @foreach($data as $className => $item)
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 unit-box m-t-15">
                                        <div class="layout clearfix">
                                            <img src="/app/Modules/Resources/Resources/assets/img/layout-img.jpg" alt=""
                                                 class="layoutImg">
                                            <div class="layoutData">
                                                <div class="layoutCol p-r-0">
                                                    <div class="text_area col-md-4">
                                                        <div class="" data-toolaction="selected"
                                                             data-classname="{!! $item['display_name'] !!}">
                                                            <div class="col-md-6" data-item="" data-key="true">
                                                                <a href="#"
                                                                   style="color: #ac4040;"><span></span></a>
                                                                <p>{{ $item['display_name'] }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">

                                                    </div>
                                                    <div class="col-md-2 text-right">
                                                        @if($collection->is_default)
                                                            <a  data-href="{!! url('/admin/framework/delete-collection') !!}" data-key="{!! $className !!}" data-type="Collection" class="delete-button btn trashBtn"><i class="fa fa-trash-o"></i></a>
                                                            <button data-element="{!! $type !!}" data-type="master" data-key="{!! $className !!}" data-url="{!! url('/admin/framework/main-css/get-apply-classes') !!}"
                                                                    class="apply-classes-button btn editBtn m-r-10"><i
                                                                        class="fa fa-edit"></i></button>
                                                        @endif
                                                    </div>
                                                    <div class="layoutFooter row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 ">
                                                        <span class="textWrap"><a href=""
                                                                                  class="link"><i></i></a></span>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4  centerText">
                                                            <span class="iconRefresh"><i
                                                                        class="fa fa-refresh"></i></span>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 rightText">
                                                            <i class="fa fa-user"></i>Author name, 01.01.2017
                                                        </div>
                                                        <div class="col-md-12 p-b-5">
                                                            {!! $item['classes'] or 'No Classes configured' !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="templates-list  m-t-20 m-b-10">
                        <div class="row templates m-b-10">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
   <input type="hidden" id="selected_collection_basket" value="{}"/>

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

       .main_div_1.active{
           border-color: transparent;
       }
        .main_div_1.active .bottom_part_1{
            background: transparent;
            border-color: transparent;
        }
        .main_div_1.active .bottom_part_1 span{
            color: #bd1a39;
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
    <div class="modal fade" id="uploadfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['url'=>'/admin/framework/upload/css','class'=>'dropzone', 'id'=>'my-awesome-dropzone']) !!}

                    {!! Form::close() !!} </div>
            </div>
        </div>
    </div>
    @include('cms::_partials.delete_modal')
    @include('framework::_partials.create_collection')
    @include('framework::_partials.apply_classes')
@stop
@section('CSS')
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/new-store.css') !!}
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/style_cube.css') !!}
    {!! HTML::style('/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! HTML::style('/js/animate/css/animate.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/css/styles.css') !!}
    {!! Html::style('app/Modules/Framework/Resources/Views/assets/base.min.css') !!}
    {!! HTML::style('/js/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/framework/frameworkstudio.css') !!}
@stop
@section('JS')
    {!! HTML::script('js/dropzone/js/dropzone.js') !!}
    {!! HTML::script('/js/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! HTML::script('/js/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') !!}
    {!! HTML::script('/js/ace-editor/ace.js') !!}
    {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/framework.js') !!}
    {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/drag_classes.js') !!}
    <script>
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

            $('ul.tabsmodal li').click(function(){
                var tab_id = $(this).attr('data-tab');

                $('ul.tabsmodal li').removeClass('current');
                $('.tab-content').removeClass('current');

                $(this).addClass('current');
                $("#"+tab_id).addClass('current');
            });

            $('body').on('click', '.apply-classes-button', function() {
                $('.save_item').attr('data-key', $(this).data('key'));
                $('.save_item').attr('data-type', $(this).data('type'));
                $('.save_item').attr('data-element', $(this).data('element'));
                $.ajax({
                    url: $(this).data('url'),
                    type: 'GET',
                    dataType: 'JSON'
                }).done(function(data) {
                    $('#tab-1').html(data.html);
                    $('#mymodal-fullscreen').modal('show');
                }).fail(function() {
                    alert('Could not load classes modal');
                });
            });

            $('body').on('click', '.tpl-left-items-collections', function() {
                var tab = $(this).data('tab');
                $.ajax({
                    url: $(this).data('url') + $(this).data('href'),
                    type: 'GET',
                    dataType: 'JSON'
                }).done(function(data) {
                    $(tab).html(data.html);
                    $('ul.classes_list').checkSelectedClasses();
                }).fail(function() {
                    alert('Could not load classes modal');
                });
            });

            $('body').on('change', '.select-modal-type', function() {
                $.ajax({
                    url: "{!! url('/admin/framework/main-css/get-apply-classes') !!}" + "?type=" + $(this).val(),
                    type: 'GET',
                    dataType: 'JSON'
                }).done(function(data) {
                    $('#tab-1').html(data.html);
                    $('ul.classes_list').checkSelectedClasses();
                }).fail(function() {
                    alert('Could not load classes modal');
                });
            });

            $('body').on('change', '.select-custom-modal-type', function() {
                $.ajax({
                    url: "{!! url('/admin/framework/main-css/get-apply-custom-classes') !!}" + "?type=" + $(this).val(),
                    type: 'GET',
                    dataType: 'JSON'
                }).done(function(data) {
                    $('#tab-2').html(data.html);
                    $('ul.classes_list').checkSelectedClasses();
                }).fail(function() {
                    alert('Could not load classes modal');
                });
            });

            $('body').on('click', '.custom-classes-tab', function() {
                $.ajax({
                    url: "{!! url('/admin/framework/main-css/get-apply-custom-classes') !!}" ,
                    type: 'GET',
                    dataType: 'JSON'
                }).done(function(data) {
                    $('#tab-2').html(data.html);
                    $('ul.classes_list').checkSelectedClasses();
                }).fail(function() {
                    alert('Could not load classes modal');
                });
            });

            $('#mymodal-fullscreen').on('hidden.bs.modal', function () {
                $('#tab-1').html('');
                $('#tab-2').html('');
                $('.custom-classes-tab').removeClass('current');
                $('#tab-2').removeClass('current');

                $('.main-classes-tab').addClass('current');
                $("#tab-1").addClass('current');
                $('ul.classes_list').checkSelectedClasses();
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

            $('body').on('click', '.save_item', function() {
                $.ajax({
                    url: $(this).data('url'),
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        items: $('#selected_collection_basket').val(),
                        type: $(this).data('type'),
                        key: $(this).data('key'),
                        element: $(this).data('element')
                    }
                }).done(function(data) {
                    if(data.success) {
                        window.location.reload();
                    } else {
                        alert('Could not apply classes. Please try again.');
                    }
                }).fail(function() {
                    alert('Could not apply classes. Please try again.');
                });
            });

        });
    </script>
@stop


