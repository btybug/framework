<div class="row list_222">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
        <div class="cms_module_list module_list_1">
            <h3 class="menuText f-s-17">
                <span class="module_icon_main_text">
                {!! Form::select('type',$types,$type,['class' => 'form-control select-modal-type']) !!}
                </span>
            </h3>
            <hr>
            <ul class="list-unstyled menuList" id="components-list" data-role="componentslist">
                @if(count($selectMenuItems))
                    @foreach($selectMenuItems as $key=>$value)
                        <li class="@if($p==$key) active_class @endif" data-tab="#tab-1">
                            <a data-url="{!! url('/admin/framework/main-css/get-apply-classes') !!}"  href="javascript:void(0);" data-tab="#tab-1" data-href="?type={{ $type }}&amp;p={!! $key !!}" profile-id="11" main-type="text_size"
                               rel="tab" class="tpl-left-items tpl-left-items-collections">
                                <span class="module_icon"></span>{!! htmlentities($value) !!}
                            </a><a data-type="{!! $key !!}" class="add-class-modal pull-right gettype"></a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
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
                    @if(View::exists("framework::References.$type.$p"))
                        @include("framework::References.$type.$p")
                    @elseif(View::exists("framework::References.$type.all"))
                        @include("framework::References.$type.all")
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
<input type="hidden" id="selected_collection_basket_modal" value="{!! htmlentities($classes)!!}"/>