@extends('layouts.mTabs',['index'=>'framework'])
@section('tab')
    <div class="row list_222">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="cms_module_list module_list_1">
                <h3 class="menuText f-s-17">
                    <span class="module_icon_main"></span>
                    <span class="module_icon_main_text">
                        {!! Form::select('styles',[],null,['class' => 'form-control select-type']) !!}
                    </span>
                </h3>
                <hr>
                <ul class="list-unstyled menuList" id="components-list">
                    {{--@if(View::exists("framework::framework_assets.subs.$type"))--}}
                    {{--@include("framework::framework_assets.subs.$type")--}}
                    {{--@endif--}}
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
                                            class="fa fa-sort-amount-desc"></i> Sort By</label>

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
                                <a class="btn btn-default searchBtn"><i class="fa fa-search "
                                                                        aria-hidden="true"></i></a>
                            </div>

                            <ul class="editIcons list-unstyled ">
                                <li><a href="#" class="btn trashBtn"><i class="fa fa-trash-o"></i></a></li>
                                <li><a href="#" class="btn copyBtn"><i class="fa fa-clone"></i></a></li>
                                <li ><a href="#" class="btn editBtn" ><i class="fa fa-pencil"></i></a></li>

                            </ul>

                            <button class="btn btn-sm pull-right btnUploadWidgets" type="button" data-toggle="modal"
                                    data-target="#myModal">
                                <i class="glyphicon glyphicon-plus module_upload_icon"></i> <span
                                        class="upload_module_text">Add New</span>
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
                    <button class="btn btn-large btn-info btnUploadWidgets" type="button" data-type="jumbtron"  data-toggle="modal"
                            data-target="#editpopup">
                        <i class="glyphicon glyphicon-plus module_upload_icon"></i>
                        <span class="upload_module_text">jumbtron</span>
                    </button>

                    <button class="btn btn-large btn-info btnUploadWidgets" type="button" data-type="button"  data-toggle="modal"
                            data-target="#editpopup">
                        <i class="glyphicon glyphicon-plus module_upload_icon"></i>
                        <span class="upload_module_text">button</span>
                    </button>

                </div>
            </div>
        </div>
    </div>
    <input type="hidden" data-action="type" value="">
    <input type="hidden" data-action="sub" value="">
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
                                <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}" alt="">
                                <h4>Variation 0001</h4></a>
                        </div>

                        <div class="col-sm-4">
                            <a href="#" class="thumbBox">
                                <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}" alt="">
                                <h4>Variation 0001</h4></a>
                        </div>

                        <div class="col-sm-4">
                            <a href="#" class="thumbBox">
                                <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}" alt="">
                                <h4>Variation 0001</h4></a>
                        </div>

                        <div class="col-sm-4">
                            <a href="#" class="thumbBox">
                                <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}" alt="">
                                <h4>Variation 0001</h4></a>
                        </div>

                        <div class="col-sm-4">
                            <a href="#" class="thumbBox">
                                <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}" alt="">
                                <h4>Variation 0001</h4></a>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade fullscreenModal" id="editpopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="pull-left" style="width: 30%">
                        <div class="input-group ">
                            <span class="input-group-addon"
                                  id="basic-addon1"></span>
                            <input type="text" class="form-control" placeholder="nameofclass" data-prefixcomponet="" data-role="classname"
                                   id="name" name="title"
                                   data-studiname="gradientcolor" aria-describedby="basic-addon1"
                                   value="">
                        </div>
                    </div>
                    <div class="pull-right">
                        <button class="save_item" data-savestudio="save"><i class="fa fa-check" aria-hidden="true"></i>Save
                        </button>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
                <div class="modal-body p-t-0 p-r-0">

                    <div class="row frameworkcontainer ">
                        <div class="col-xs-6" style="padding-top: 10px">
                            <div class="form-group col-md-6">
                                <input id="uploderhtml" type="file" >
                            </div>
                            <div class="form-group col-md-6">
                                <button type="button" class="btn btn-default btn-md btn-block" data-gehtml="componet"   data-toggle="modal" data-target="#componentslisting">Get Componet</button>
                            </div>

                            <div class="flat-area col-md-12" data-previewclass>
                                <div data-role="classview">
                                    <h1>Hello, world!</h1>
                                    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                    <hr>
                                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                    <p>
                                        <a href="#" role="button">Learn more</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12 m-t-40" >
                                <hr>
                                <label for="comment">Html Code</label>
                                <textarea class="form-control" rows="5" data-previewcomponet="htmlcode" id="comment"></textarea>

                            </div>
                        </div>
                        <div class="col-xs-6 frameworkoptionbox components_options">

                            <div data-tabpreview="setting" class="collapse in">

                                <ul class="nav nav-tabs nav-justified studiotabs">
                                    <li role="presentation" class="active"><a href="#default" role="tab" data-toggle="tab">Default</a></li>
                                    <li role="presentation"><a href="#hover" role="tab" data-toggle="tab">Hover</a></li>
                                    <li role="presentation"><a href="#linked" role="tab" data-toggle="tab">Linked</a></li>
                                </ul>

                                <div class="tab-content p-15">

                                    <div class="tab-pane active" aria-expanded="true" role="tabpanel" id="studio_style">

                                        <div data-role="elementtree">


                                        </div>

                                        {{--<div class="panel panel-default">--}}
                                        {{--<div class="panel-heading">Add Master Classes</div>--}}
                                        {{--<div class="panel-body">--}}
                                        {{--<div class="form-inline p-b-20">  <div class="form-group">--}}
                                        {{--<select class="form-control" data-selectmaster="element">--}}
                                        {{--<option value="css">Main Container</option>--}}
                                        {{--<option value="div"> Div </option>--}}
                                        {{--<option value="h1"> H1 </option>--}}
                                        {{--<option value="p"> p </option>--}}
                                        {{--<option value="button"> button </option>--}}
                                        {{--<option value="a"> a </option>--}}
                                        {{--</select>--}}
                                        {{--</div>--}}

                                        {{--<button type="button" class="btn btn-default" data-buttonrole="selectmaster">Select Master</button></div>--}}

                                        {{--<div data-role="masterelementtree">--}}


                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}


                                        <ol class="componetlisting">
                                            <li>
                                                <div class="listinginfo" data-listing="row">
                                                    <div class="lsitingbutton">
                                                        <button type="button" class="btn"><i class="fa fa-pencil"></i></button>
                                                        <div class="listingonoff">
                                                            <input type="checkbox"  data-listingoption="active" id="checkbox1" checked="checked" />
                                                            <label for="checkbox1"></label>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-collapse" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                    <span class="listingtitle">Main Div</span>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <div class="listinginfo bgreen" data-listing="row">
                                                            <div class="lsitingbutton">
                                                                <button type="button" class="btn"><i class="fa fa-pencil"></i></button>
                                                                <div class="listingonoff">
                                                                    <input type="checkbox" data-listingoption="active" id="checkbox2" checked="checked" />
                                                                    <label for="checkbox2"></label>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-collapse" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                            <span class="listingtitle">Main Div</span>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="listinginfo bgred" data-listing="row">
                                                            <div class="lsitingbutton">
                                                                <button type="button" class="btn"><i class="fa fa-pencil"></i></button>
                                                                <div class="listingonoff">
                                                                    <input type="checkbox" data-listingoption="active" id="checkbox3"  checked="checked" />
                                                                    <label for="checkbox3"></label>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-collapse" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                            <span class="listingtitle">Main Div</span>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="listinginfo bgorange" data-listing="row">
                                                            <div class="lsitingbutton">
                                                                <button type="button" class="btn"><i class="fa fa-pencil"></i></button>
                                                                <div class="listingonoff">
                                                                    <input type="checkbox" data-listingoption="active" id="checkbox5"  checked="checked" />
                                                                    <label for="checkbox5"></label>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-collapse" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                            <span class="listingtitle">Main Div</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="listinginfo " >
                                                            <div class="lsitingbutton">
                                                                <button type="button" class="btn"><i class="fa fa-pencil"></i></button>
                                                                <div class="listingonoff">
                                                                    <input type="checkbox" data-listingoption="active" id="checkbox4" checked="checked" />
                                                                    <label for="checkbox4"></label>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-collapse" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                            <span class="listingtitle">Main Div</span>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <div class="listinginfo bgred" >
                                                                    <div class="lsitingbutton">
                                                                        <button type="button" class="btn"><i class="fa fa-pencil"></i></button>
                                                                        <div class="listingonoff">
                                                                            <input type="checkbox" data-listingoption="active" id="checkbox7" checked="checked" />
                                                                            <label for="checkbox7"></label>
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn-collapse" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                                    <span class="listingtitle">Main Div</span>
                                                                </div>
                                                            </li>

                                                        </ol>

                                                    </li>
                                                    <li>
                                                        <div class="listinginfo " >
                                                            <div class="lsitingbutton">
                                                                <button type="button" class="btn"><i class="fa fa-pencil"></i></button>
                                                                <div class="listingonoff">
                                                                    <input type="checkbox" data-listingoption="active" id="checkbox6" checked="checked" />
                                                                    <label for="checkbox6"></label>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-collapse" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                            <span class="listingtitle">Main Div</span>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>

                                        <div data-append="panel" class="hide">

                                        </div>

                                    </div>

                                    <div class="tab-pane active" aria-expanded="true" role="tabpanel" id="studio_function">
                                    </div>
                                    <textarea name="less_data" class="form-control " data-export="css"></textarea>
                                    <textarea name="json_data" class="form-control " data-export="json"></textarea>
                                    <textarea name="componentsjson" class="form-control"
                                              data-export="componentsjson"></textarea>
                                    <textarea name="tabclass" class="form-control hide"
                                              data-export="tabclass"></textarea>
                                </div>

                            </div>

                            <div class="component_setting collapse "  data-tabpreview="selectclass">
                                <ul class="nav nav-tabs nav-justified studiotabs" data-models="classes">
                                    <li role="presentation" class="active" data-role="basic"><a href="#classes" role="tab"
                                                                                                data-toggle="tab">Classes</a></li>
                                    <li role="presentation" data-role="collections"><a href="#collections" role="tab"
                                                                                       data-toggle="tab">Collections</a></li>
                                </ul>

                                <div class="tab-content p-15">
                                    <div class="tab-pane active" aria-expanded="true" role="tabpanel" id="classes">

                                        <div class="classes_list row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cms_module_list module_list_1" style="padding-top: 15px">
                                                <ul class="list-unstyled menuList" id="components-list" data-role="componentslist" data-typeclasses="basic">
                                                    <li><a href="#" class="tpl-left-items">Shadow</a> </li>
                                                    <li><a href="#" class="tpl-left-items">BG gradient</a> </li>
                                                    <li><a href="#" class="tpl-left-items">MArgins</a> </li>
                                                    <li><a href="#" class="tpl-left-items">Padding</a> </li>
                                                    <li><a href="#" class="tpl-left-items">Border</a> </li>
                                                    <li><a href="#" class="tpl-left-items">Radius</a> </li>
                                                </ul>

                                            </div>
                                            <div class="col-md-8 right_list">
                                                <div>
                                                    <ul id="draggable" data-classeslsit="basic">

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" aria-expanded="true" role="tabpanel" id="collections">
                                        <div class="classes_list row">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cms_module_list module_list_1" style="padding-top: 15px">
                                                <ul class="list-unstyled menuList" id="components-list" data-role="collectionslist" data-typeclasses="collections">

                                                </ul>

                                            </div>
                                            <div class="col-md-8 right_list">
                                                <div>
                                                    <ul id="draggable" data-classeslsit="collections">

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="selected_classes clearfix row">
                                        <h5>Selected classes</h5>

                                        <div class="row">
                                            <div id="sortable">
                                                {{--<li class="classes_list_1">--}}
                                                {{--<div class="class_item">--}}
                                                {{--<div class="col-md-6 prefix_area">BTY.shadow-</div>--}}
                                                {{--<div class="col-md-4 name_area">Ashok</div>--}}
                                                {{--<button class="col-md-2 pull-right close_icon_area"><i class="fa fa-close"></i> </button>--}}
                                                {{--</div>--}}
                                                {{--</li>--}}
                                                {{--<li class="classes_list_1">--}}
                                                {{--<div class="class_item">--}}
                                                {{--<div class="col-md-6 prefix_area">BTY.shadow-</div>--}}
                                                {{--<div class="col-md-4 name_area">Ashok</div>--}}
                                                {{--<button class="col-md-2 pull-right close_icon_area"><i class="fa fa-close"></i> </button>--}}
                                                {{--</div>--}}
                                                {{--</li>--}}
                                                {{--<li class="classes_list_1">--}}
                                                {{--<div class="class_item">--}}
                                                {{--<div class="col-md-6 prefix_area">BTY.shadow-</div>--}}
                                                {{--<div class="col-md-4 name_area">Ashok</div>--}}
                                                {{--<button class="col-md-2 pull-right close_icon_area"><i class="fa fa-close"></i> </button>--}}
                                                {{--</div>--}}
                                                {{--</li>--}}
                                                {{--<li class="classes_list_1">--}}
                                                {{--<div class="class_item">--}}
                                                {{--<div class="col-md-6 prefix_area">BTY.shadow-</div>--}}
                                                {{--<div class="col-md-4 name_area">Ashok</div>--}}
                                                {{--<button class="col-md-2 pull-right close_icon_area"><i class="fa fa-close"></i> </button>--}}
                                                {{--</div>--}}
                                                {{--</li>--}}
                                                {{--<li class="classes_list_1">--}}
                                                {{--<div class="class_item">--}}
                                                {{--<div class="col-md-6 prefix_area">BTY.shadow-</div>--}}
                                                {{--<div class="col-md-4 name_area">Ashok</div>--}}
                                                {{--<button class="col-md-2 pull-right close_icon_area"><i class="fa fa-close"></i> </button>--}}
                                                {{--</div>--}}
                                                {{--</li>--}}
                                                {{--<li class="classes_list_1">--}}
                                                {{--<div class="class_item">--}}
                                                {{--<div class="col-md-6 prefix_area">BTY.shadow-</div>--}}
                                                {{--<div class="col-md-4 name_area">Ashok</div>--}}
                                                {{--<button class="col-md-2 pull-right close_icon_area"><i class="fa fa-close"></i> </button>--}}
                                                {{--</div>--}}

                                                {{--</li>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row buttons_bottom">
                                        <button class="save_class" data-buttonrole="save"><i class="fa fa-check" aria-hidden="true"></i>Save
                                        </button>
                                        <button class="decline_class" data-buttonrole="decline"><i class="fa fa-close" aria-hidden="true"></i>Decline
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="componentslisting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" data-modal="componenttitle">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control hide" id="sel1" data-typecomponet='{!! json_encode($types) !!}'>
                                <option value="">Sjumbtron</option>
                                <option>Sjumbtron</option>
                            </select>
                            <ul class="list-unstyled menuTplList" data-modal="componenmenu">
                                sdsd
                            </ul>
                        </div>
                        <div class="col-sm-8 tab-content" data-modal="componenmenucontent">
                            <span class="ajaxloding"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <style id="savedcss" data-role="savedcss">
    </style>
    <script type="template" data-template="listingitem">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="main_div_1" data-toolaction="selected" data-classname="{name}">
                <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family={name}" />
                <div class="top_part_1" style="font-size:24px; font-family:{name},  Helvetica, Arial,' sans-serif' ;">{name}</div>
                <div class="bottom_part_1">
                    <a href="#"><span>{name}</span></a>
                </div>
            </div>
        </div>
    </script>
    <script type="template" data-template="listingrow">
        <div class="listinginfo" data-listing="row" data-rowid="{rowid}">
            <div class="lsitingbutton">
                <button type="button" class="btn" data-cssselector="{csstarget}" data-caction="edit" data-id="{rowid}"><i class="fa fa-pencil"></i></button>
                <div class="listingonoff">
                    <input type="checkbox"  data-listingoption="active" id="checkbox{rowid}" />
                    <label for="checkbox{rowid}"></label>
                </div>
            </div>
            <button class="btn btn-collapse" type="button" data-caction="collapse" data-id="{rowid}"><i class="fa fa-plus" aria-hidden="true"></i></button>
            <span class="listingtitle">{name}</span>
        </div>

    </script>

    <script type="template" data-template="listingclasses">
        <li data-role="listitem" class="list col-xs-12 col-sm-12 col-md-6 col-lg-6" data-prefix="{prefix}" data-name="{name}" data-cssdata='{data}' data-classpath='{classpath}' data-realclass="{realClass}" data-stype="{styletype}" data-css="{type}" data-selectclass=".{name}">           <div class="">
                <div class="main_div_1">
                    <div class="top_part_1"></div>
                    <div class="bottom_part_1">
                        <a href="#">{name}</a>
                    </div>
                </div>
            </div>
        </li>
    </script>

    <script type="template" data-template="typecomponet">
        <div class="col-sm-4">
            <a href="#" class="thumbBox" data-buttonrole="itemedit">
                <img src="/app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg" alt="">
                <h4>{name}</h4></a>
        </div>
    </script>
@stop
@section('CSS')
    {!! HTML::style('/app/Modules/Framework/Resources/Views/assets/base.min.css') !!}
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/new-store.css') !!}
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/style_cube.css') !!}
    {!! HTML::style('/resources/assets/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    {!! HTML::style('/resources/assets/js/animate/css/animate.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/css/styles.css') !!}
    {!! HTML::style('/resources/assets/js/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}
    {!! HTML::style('/resources/assets/js/bootstrap-fileinput/css/fileinput.min.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/framework/frameworkstudio.css') !!}
@stop
@section('JS')
    {!! HTML::script('/resources/assets/js/less.js') !!}
    {!! HTML::script('/resources/assets/js/underscore-min.js') !!}
    {!! HTML::script("https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js") !!}
    {!! HTML::script('resources/assets/js/dropzone/js/dropzone.js') !!}
    {!! HTML::script('/resources/assets/js/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! HTML::script('/resources/assets/js/bootstrap-fileinput/js/fileinput.min.js') !!}
    {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/component-editor.js') !!}
    <script>
    </script>
@stop


