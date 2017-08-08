@extends('cms::layouts.mTabs',['index'=>'framework'])
@section('tab')
    <div class="container_main">
        <button class="btn btn-large btn-info btnUploadWidgets" type="button" data-toggle="modal"
                data-target="#editpopup">
            <i class="glyphicon glyphicon-plus module_upload_icon"></i>
            <span class="upload_module_text">Modal Creator</span>
        </button>
    </div>
    <div class="modal fade fullscreenModal" id="editpopup" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="pull-left col-xs-3">

                        <select class="form-control" id="sel1" data-typecomponet='{!! json_encode($types) !!}'>
                            <option value="">Sjumbtron</option>
                            <option>Sjumbtron</option>
                        </select>

                    </div>
                    <div class="pull-left col-xs-3">
                        <div class="input-group ">
                            <span class="input-group-addon" id="basic-addon1"></span>
                            <input type="text" class="form-control" placeholder="nameofclass" data-prefixcomponet="{!! $component->data['term'] or null !!}" data-role="classname" id="name" name="title" data-studiname="gradientcolor" aria-describedby="basic-addon1" value="{!! $component->def_class or null!!}">
                        </div>
                    </div>
                    <div class="pull-right">
                        <button class="btbmodalaction" data-role="modalactive" disabled data-buttonrole="savecomponet"><i class="fa fa-check" aria-hidden="true"></i> Save
                        </button>
                        <button class="btbmodalaction" data-role="modalactive" disabled data-roletype="export" data-buttonrole="savecomponet"><i class="fa fa-download" aria-hidden="true"></i> Export
                        </button>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
                <div class="modal-body p-t-0 p-r-0">

                    <div class="row frameworkcontainer p-l-15">
                        <div class="col-xs-6">
                            <div class="flat-area" data-previewclass>

                            </div>
                        </div>
                        <div class="col-xs-6 frameworkoptionbox components_options">

                            <div data-tabpreview="setting" class="collapse in">

                                <ul class="nav nav-tabs nav-justified studiotabs" data-type-selector>
                                    <li role="presentation" class="active" data-role="normal"><a href="#default" role="tab" data-toggle="tab">Default</a></li>
                                    <li role="presentation" data-role="hover"><a href="#hover" role="tab" data-toggle="tab">Hover</a></li>
                                    <li role="presentation" data-role="selected"><a href="#linked" role="tab" data-toggle="tab">Linked</a></li>
                                </ul>

                                <div class="tab-content p-15">

                                    <div class="tab-pane active" aria-expanded="true" role="tabpanel" id="studio_style">

                                        <div data-role="elementtree">


                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">Add Master Classes</div>
                                            <div class="panel-body">
                                                <div class="form-inline p-b-20">  <div class="form-group">
                                                        <select class="form-control" data-selectmaster="element">
                                                            <option value="css">Main Container</option>
                                                            <option value="div"> Div </option>
                                                            <option value="h1"> H1 </option>
                                                            <option value="h2"> H2 </option>
                                                            <option value="h3"> H3 </option>
                                                            <option value="h4"> H4 </option>
                                                            <option value="h5"> H5 </option>
                                                            <option value="h6"> H6 </option>
                                                            <option value="p"> p </option>
                                                            <option value="button"> button </option>
                                                            <option value="a"> a </option>
                                                            <option value="hr"> hr </option>
                                                            <option value="img">img</option>
                                                            <option value="span">span</option>
                                                        </select>
                                                    </div>

                                                    <button type="button" class="btn btn-default" data-buttonrole="selectmaster">Select Master</button></div>

                                                <div data-role="masterelementtree">


                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="tab-pane active" aria-expanded="true" role="tabpanel" id="studio_function">
                                    </div>
                                    <textarea name="less_data" class="form-control " data-export="css"></textarea>
                                    <textarea name="json_data" class="form-control " data-export="json"></textarea>
                                    <textarea name="componentsjson" class="form-control" data-export="componentsjson"></textarea>
                                    <textarea name="componentsextra" class="form-control" data-export="componentsextra"></textarea>
                                    <textarea name="tabclass" class="form-control hide" data-export="tabclass"></textarea>
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
    <input type="hidden" data-action="type" value="">
    <input type="hidden" data-action="sub" value="">
    <script type="template" data-template="listingrow">
        <div class="listinginfo" data-listing="row" data-rowid="{rowid}">
            <div class="lsitingbutton">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-cssselector="{csstarget}" data-caction="cssselector" data-id="{rowid}" data-toggle="dropdown"><i class="fa fa-css3" aria-hidden="true"></i> </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">:first-child</a></li>
                        <li><a href="#">:last-child</a></li>
                    </ul>
                </div>


                <button type="button" class="btn" data-cssselector="{csstarget}" data-caction="edit" data-id="{rowid}"><i class="fa fa-pencil"></i></button>

                <div class="listingonoff">
                    <input type="checkbox" data-cssselector="{csstarget}" data-listingoption="active" id="checkbox{rowid}" checked="checked" />
                    <label for="checkbox{rowid}"></label>
                </div>
            </div>
            <button class="btn btn-collapse" type="button" data-cssselector="{csstarget}" data-caction="collapse" data-id="{rowid}"><i class="fa fa-plus" aria-hidden="true"></i></button>
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
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/new-store.css') !!}
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/style_cube.css') !!}
    {!! HTML::style('/js/animate/css/animate.css') !!}
    {!! Html::style('app/Modules/Framework/Resources/Views/assets/css/styles.css') !!}
    {!! Html::style('app/Modules/Framework/Resources/Views/assets/base.min.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/framework/frameworkstudio.css') !!}
    {!! HTML::style('frameworkcss/frameworkcss.less') !!}
    {!! HTML::style('/js/bootstrap-select/css/bootstrap-select.min.css') !!}
    <style id="savedcss" data-role="savedcss">
    </style>

@stop
@section('JS')
    {!! HTML::script('/js/less.js') !!}
    {!! HTML::script('/js/underscore-min.js') !!}
    {!! HTML::script("https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js") !!}
    {!! HTML::script('js/dropzone/js/dropzone.js') !!}
    {!! HTML::script('/js/bootstrap-select/js/bootstrap-select.min.js') !!}
    {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/component-creator.js') !!}
@stop


