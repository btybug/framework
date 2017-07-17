@extends('layouts.mTabs',['index'=>'framework'])
@section('tab')

    {{--<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 cms_module_list module_list_1">--}}
        {{--<h3 class="menuText f-s-17">--}}
                {{--<span class="module_icon_main_text">--}}
                    {{--{!! Form::select('styles',['button'=>'Buttons','nav_bar'=>'Navbar','jumbtron'=>'Jumbtron','menu'=>'Menu'],$type,['class' => 'form-control select-type']) !!}--}}
                {{--</span>--}}
        {{--</h3>--}}
        {{--<hr>--}}
        {{--<ul class="list-unstyled menuList menuListButt" id="components-list">--}}
            {{--@foreach($data as $key=>$value)--}}
                {{--<li class="active_class">--}}
                    {{--<a href="?type={!! $value['type'] !!}&amp;p={!!$key !!}" profile-id="11" main-type="h1" rel="tab"--}}
                       {{--class="tpl-left-items">--}}
                        {{--<span class="module_icon"></span> {!! $value['name'] !!}--}}
                    {{--</a><a data-type="{!!$key !!}" class="add-class-modal pull-right gettype"></a>--}}
                    {{--<i class="fa fa-check-circle-o" aria-hidden="true"></i>--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
        {{--<button type="button" data-toggle="modal" data-target="#uploadfile" class="add_new_btn"><i--}}
                    {{--class="fa fa-cloud-upload" aria-hidden="true"></i>Upload Component--}}
        {{--</button>--}}
    {{--</div>--}}


    <div class="row list_222">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="cms_module_list module_list_1">
                <h3 class="menuText f-s-17">
                    {{--<span class="module_icon_main"></span>--}}
                    <span class="module_icon_main_text">
                        {!! Form::select('styles', ['jqueryplugins'=>'jQuery plugins', 'JS'=>'JS files', 'fonts'=>'Fonts'], ['class' => 'form-control select-type selectpicker']) !!}
                    </span>
                </h3>
                <hr>
                <ul class="list-unstyled menuList" id="components-list">
                    {{--main types--}}
                    <li>
                        <a href="#" profile-id="" main-type="" rel="tab" class="tpl-left-items">
                            <span class="module_icon"></span> Tab
                            <a data-type="" class="add-class-modal pull-right gettype"></a>
                        </a>
                    </li>
                    <li>
                        <a href="#" profile-id="" main-type="" rel="tab" class="tpl-left-items">
                            <span class="module_icon"></span> Collapse
                            <a data-type="" class="add-class-modal pull-right gettype"></a>
                        </a>
                    </li>
                    <li>
                        <a href="#" profile-id="" main-type="" rel="tab" class="tpl-left-items">
                            <span class="module_icon"></span> Popup
                            <a data-type="" class="add-class-modal pull-right gettype"></a>
                        </a>
                    </li>
                    <li>
                        <a href="#" profile-id="" main-type="" rel="tab" class="tpl-left-items">
                            <span class="module_icon"></span> Dropdown
                            <a data-type="" class="add-class-modal pull-right gettype"></a>
                        </a>
                    </li>
                    <li>
                        <a href="#" profile-id="" main-type="" rel="tab" class="tpl-left-items">
                            <span class="module_icon"></span> ToolTip
                            <a data-type="" class="add-class-modal pull-right gettype"></a>
                        </a>
                    </li>
                    <li>
                        <a href="#" profile-id="" main-type="" rel="tab" class="tpl-left-items">
                            <span class="module_icon"></span> Carousel
                            <a data-type="" class="add-class-modal pull-right gettype"></a>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {!! HTML::image('resources/assets/images/ajax-loader5.gif', 'a picture', array('class' => 'thumb img-loader hide')) !!}
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
            <div class="tpl-list">
                <button class="btn btn-primary select-">
                    Select Item
                </button>
            </div>
        </div>
    </div>
    
   
@stop
@section('CSS')
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/new-store.css') !!}
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/style_cube.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/css/styles.css') !!}
    {!! HTML::style('/resources/assets/js/bootstrap-select/css/bootstrap-select.min.css') !!}
@stop
@section('JS')
    {!! HTML::script('resources/assets/js/dropzone/js/dropzone.js') !!}
    {!! HTML::script('/resources/assets/js/bootstrap-select/js/bootstrap-select.min.js') !!}
    
    <script>
        Dropzone.options.myAwesomeDropzone = {
            init: function () {
                this.on("success", function (file) {
//                    location.reload();
                });
            }
        };

        $(document).ready(function () {
             $('.selectpicker').selectpicker();
            $("body").on('change','.select-type',function(){
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

            $("body").on("change", ".sort-items", function () {
                var val = $(this).val();
                var main_type = $(this).attr('data-type');
                var sub = $(this).attr('data-sub');
                var profile_id = $(this).attr('profile_id');

                if (!sub) {
                    sub = false;
                }

                $.ajax({
                    url: '/admin/uploads/assets/profiles/render-styles',
                    data: {
                        main_type: main_type,
                        sub: sub,
                        sort: val,
                        sorting: true,
                        profile_id: profile_id
                    },
                    dataType: 'json',
                    beforeSend: function () {
//                        $('.tpl-list').html('');
                        $('.img-loader').removeClass('hide');

                    },
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    success: function (data) {
                        $('.img-loader').addClass('hide');
                        if (!data.error) {
                            $('#sub_item_upl').val(sub);
                            $('.tpl-list').html(data.html);
                        } else {
                            alert(data.message);
                        }
                    },
                    type: 'POST'
                });
            });

            $('.list-unstyled').on('click', '.tpl-left-items', function(e) {
                e.preventDefault();
                var main_type = $(this).attr('main-type');
                var sub = $(this).attr('sub');
                var pageurl = $(this).attr('href');
                var profile_id = $(this).attr('profile-id');

                if (!sub) {
                    sub = false;
                }

                $('.tpl-left-items').parent().removeClass('active_class');

                $('*[main-type="' + main_type + '"]').parent().addClass('active_class');

                $.ajax({
                    url: '/admin/uploads/assets/profiles/render-styles',
                    data: {
                        main_type: main_type,
                        url:pageurl+'?rel=tab',
                        sub: sub,
                        profile_id:profile_id
                    },
                    dataType: 'json',
                    beforeSend: function () {
                        $('.tpl-list').html('');
                        $('.img-loader').removeClass('hide');
                    },
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    success: function (data) {
                        $('.img-loader').addClass('hide');
                        if (!data.error) {
                            if (sub) {
                                $('#sub_item_upl').val(sub);
                            }

                            $('.tpl-list').html(data.html);
                        } else {
                            alert(data.message);
                        }
                    },
                    type: 'POST'
                });
                if(pageurl!=window.location){
                    window.history.pushState({path:pageurl},'',pageurl);
                }
                return false;
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


