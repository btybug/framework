@extends('cms::layouts.mTabs',['index'=>'framework'])
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
                <ul class="list-unstyled menuList menuListButt" id="components-list">
                    @foreach($cores as $key=>$value)
                        <li class="@if($p==$key) active_class @endif">
                            <a href="?type={!! $value['type'] !!}&amp;p={!!$key !!}&amp;core={!! "core" !!}" profile-id="11"
                               main-type="h1"
                               rel="tab"
                               class="tpl-left-items">
                                <span class="module_icon"></span> {!! $value['name'] !!}
                            </a><a data-type="{!!$key !!}" class="add-class-modal pull-right gettype"></a>
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        </li>
                    @endforeach
                    @foreach($data as $key=>$value)
                        @if(isset($value['active']) && $value['active'])
                            <li class="@if($p==$key) active_class @endif">
                                <a href="?type={!! $value['type'] !!}&amp;p={!!$key !!}" profile-id="11" main-type="h1"
                                   rel="tab"
                                   class="tpl-left-items">
                                    <span class="module_icon"></span> {!! $value['name'] !!}
                                </a><a data-type="{!!$key !!}" class="add-class-modal pull-right gettype"></a>
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                <a class="btn fa fa-trash trashaIcon"
                                   href="{!! url('/admin/framework/component/delete',$value['id']) !!}"></a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        {!! HTML::image('resources/assets/images/ajax-loader5.gif', 'a picture', array('class' => 'thumb img-loader hide')) !!}
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="tpl-list">
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
                                <li><a href="#" class="btn editBtn" data-toolaction="editselectedclass"><i class="fa fa-pencil"></i></a></li>
                            </ul>
                            <button class="btn btn-sm pull-right btnUploadWidgets" type="button" data-toggle="modal"
                                    data-target="#editpopup">
                                <i class="glyphicon glyphicon-plus module_upload_icon"></i>
                                <span class="upload_module_text">Add New</span>
                            </button>
                        </div>
                    </div>
                </div>
                @if($component && isset($component->core_classes))
                    @foreach($component->core_classes as $class)
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" data-role="items">
                                    <div class="main_div_1" data-toolaction="selected"
                                         data-classname="stylename">
                                        <div class="top_part_1"><a href="#" data-type="edit" class="hide" data-toggle="modal" data-target="#editpopup"
                                                                   class="btnedit">Edit</a>{!! $component->html !!}
                                        </div>
                                        <div class="bottom_part_1">
                                            <a href="#">
                                                <span>{!! $class !!}</span>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                    @endforeach
                        @foreach($componentClasses as $key=>$variation)
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" data-role="items">
                                    <div class="main_div_1" data-toolaction="selected"
                                         data-classname="stylename">
                                        <div class="top_part_1"><a href="#" data-type="edit" class="hide" data-toggle="modal" data-target="#editpopup"
                                                                   class="btnedit">Edit</a>{!! $component->html !!}
                                        </div>
                                        <div class="bottom_part_1">
                                            <a href="#">
                                                <span>{!! $variation['classname'] !!}</span>
                                            </a>
                                            <input type="hidden" value="{!! $key !!}">
                                            <textarea class="hidden" data-itemsjson="josn">{!! json_encode($variation,true) !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>

    <div class="modal fade fullscreenModal" id="editpopup" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="pull-left" style="width: 30%">
                        <div class="input-group ">
                            <span class="input-group-addon"
                                  id="basic-addon1">{!! $component->data['term'] or null !!}</span>
                            <input type="text" class="form-control" placeholder="nameofclass" data-prefixcomponet="{!! $component->data['term'] or null !!}" data-role="classname"
                                   id="name" name="title"
                                   data-studiname="gradientcolor" aria-describedby="basic-addon1"
                                   value="{!! $component->def_class or null!!}">
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

                    <div class="row frameworkcontainer p-l-15">
                        <div class="col-xs-6">
                            <div class="flat-area" data-previewclass>
                                {!! $component->html or null !!}
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
                                                        <div data-role="masterelementtree"></div>
                                                  </div>
                                                </div>
                                            
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
                                    </div>

                                <div class="tab-pane " aria-expanded="true" role="tabpanel" id="studio_function">
                                </div>
                                <textarea name="less_data" class="form-control " data-export="css"></textarea>
                                <textarea name="json_data" class="form-control " data-export="json"></textarea>
                                <textarea name="componentsjson" class="form-control"
                                          data-export="componentsjson"></textarea>
                                <textarea name="tabclass" class="form-control hide"
                                          data-export="tabclass">{!!$parent!!}</textarea>
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

    <div class="modal fade" id="varModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span data-existmodal="name"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" data-existmodal="listing">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="list-unstyled menuTplList">
                                <li class="active_class">
                                    <a href="#" rel="tab" class="tpl-left-items">
                                        <span class="module_icon"></span> Heading
                                    </a><a data-type="h1" class="add-class-modal pull-right gettype"></a>
                                </li>
                                <li>
                                    <a href="#" rel="tab" class="tpl-left-items">
                                        <span class="module_icon"></span> Text
                                    </a><a data-type="h2" class="add-class-modal pull-right gettype"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-8">
                            <div class="row hide" data-existingclass="container">
                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="containerclass"
                                       data-selectclass=".greencontainer">
                                        <img src="{!! Html::image('/app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>Green container</h4></a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="containerclass"
                                       data-selectclass=".lightbluecontainer">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>Light blue</h4></a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="containerclass"
                                       data-selectclass=".redbluecontainer">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>Red container</h4></a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="containerclass"
                                       data-selectclass=".orangecontainer">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>orange container</h4></a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="containerclass"
                                       data-selectclass=".lightpinkcontainer">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>light pink container</h4></a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="containerclass"
                                       data-selectclass=".roundcontainer">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>Round container</h4>
                                    </a>
                                </div>


                            </div>
                            <div class="row hide" data-existingclass="text">
                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="textclass"
                                       data-selectclass=".textblackmedium">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>text black medium</h4></a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="textclass"
                                       data-selectclass=".textgreenlarge">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>text green large</h4></a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="textclass"
                                       data-selectclass=".textlightviolet">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>text light violet</h4></a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="textclass" data-selectclass=".textwhite">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>Text White</h4></a>
                                </div>
                            </div>
                            <div class="row hide" data-existingclass="icon">
                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="iconclass" data-selectclass=".iconred">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>Icon red</h4></a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="iconclass" data-selectclass=".iconblue">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>Icon blue</h4></a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="iconclass" data-selectclass=".icongreen">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>Icon green</h4></a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="iconclass" data-selectclass=".iconlarge">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>icon large</h4></a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="thumbBox" data-css="iconclass" data-selectclass=".iconsmall">
                                        <img src="{!! Html::image('app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg') !!}"
                                             alt="">
                                        <h4>icon small</h4></a>
                                </div>
                            </div>
                        </div>
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


    <textarea data-component="json">{!! $component->componentDataJson or null !!}</textarea>
    <textarea>{!! $cssJson or null !!}</textarea>
    
    <input type="hidden" data-action="type" value="{!! $type !!}">
    <input type="hidden" data-action="sub" value="{!! $p !!}">  
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
            <a href="#" class="thumbBox" data-actionexit="" data-cssdata='{data}' data-classpath='{classpath}'
               data-realclass="{realClass}" data-stype="{styletype}" data-css="{type}"
               data-selectclass=".{name}">
                <img src="/app/Modules/Framework/Resources/Views/assets/framework/img/placeholder-img.jpg" alt="">
                <h4>{name}</h4></a>
        </div>
    </script>
    <script type="template" data-template="keypanel">
        <div class="panel panel-default">
            <div class="panel-heading">{name}</div>
            <div class="panel-body" data-paneltype="{type}">
                <div class="editForm form-horizontal" data-exiting="studio{type}">
                    <div class="row">
                        <div class="col-sm-4 listofclass">
                            <ul class="listofitem" role="tablist" data-paneltabs="{type}">
                            </ul>
                        </div>
                        <div class="col-sm-8 tab-content" data-paneltabscontent="{type}">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>
    <script type="template" data-template="paneloptiontab">
        <li data-comopentclass="{types}"><a href="#{tabid}" role="tab" data-toggle="tab">@ {name}</a></li>
    </script>
    <script type="template" data-template="paneloptioncontainer">
        <div role="tabpanel" class="tab-pane active" data-pcssrole="{rolecss}" data-group="classcontainer" id="{tabid}">
            <div class="form-group">
                <label class="col-sm-3" for="contianermystyle">
                    <input type="radio" name="contianerstyle" data-csstype="typecontianerstyle" data-role="typestyle"
                           id="contianermystyle" value="mystyle">
                    My Styles </label>
                <label class=" col-sm-3" for="contianernewstyle">
                    <input type="radio" name="contianerstyle" data-role="typestyle" data-csstype="typecontianerstyle"
                           id="contianernewstyle" value="newstyle">
                    New Styles </label>
            </div>
            <div data-styletype="mystyle">

                <div class="form-group ">
                    <label for="cssContainer" class="col-sm-4">@ Container</label>
                    <div class="col-sm-3 p-0">
                        <div class="input-group">
                            <input type="text" class="form-control" id="cssContainer" value=""
                                   aria-describedby="basic-cssContainer">
                            <a href="#" data-studiosub="styles" data-tab="style" data-styletypes="stylescontainer"
                               data-type="box_styles" class="input-group-addon btnRefresh" id="basic-cssContainer"><em
                                        class="iconRefreshRed"></em></a></div>
                    </div>
                </div>

            </div>
            <div class="hide" data-styletype="newstyle">
                <div class="form-group">
                    <label for="var1" class="col-sm-6">@ padding & margins </label>
                    <div class="input-group col-sm-6">
                        <input type="text" class="form-control" id="var1" value="" aria-describedby="basic-addon2">
                        <a href="#" data-studioitems="padding_margins" data-tab="basic" data-type="box_parts"
                           data-styletypes="container_padding_margins" class="input-group-addon btnRefresh"
                           id="basic-addon2"><em class="iconRefreshRed"></em></a></div>
                </div>
                <div class="form-group">
                    <label for="var4" class="col-sm-6">@ Border & Radius </label>
                    <div class="input-group col-sm-6">
                        <input type="text" class="form-control" id="var4" value="" aria-describedby="basic-addon2">
                        <a href="#" data-studioitems="border_radius" data-tab="basic" data-type="box_parts"
                           data-styletypes="container_border_radius" class="input-group-addon btnRefresh"
                           id="basic-addon2"><em class="iconRefreshRed"></em></a></div>
                </div>
                <div class="form-group">
                    <label for="var2" class="col-sm-6">@ Shadow</label>
                    <div class="input-group col-sm-6">
                        <input type="text" class="form-control" id="var2" value="" aria-describedby="basic-addon2">
                        <a href="#" data-studioitems="shadow" data-tab="basic" data-type="box_parts"
                           data-styletypes="container_shadow" class="input-group-addon btnRefresh" id="basic-addon2"><em
                                    class="iconRefreshRed"></em></a></div>
                </div>
                <div class="form-group">
                    <label for="var4" class="col-sm-6">@ Background </label>
                    <div class="input-group col-sm-6">
                        <input type="text" class="form-control" id="var4" value="" aria-describedby="basic-addon2">
                        <a href="#" data-studioitems="background" data-tab="basic" data-type="box_parts"
                           data-styletypes="container_background" class="input-group-addon btnRefresh"
                           id="basic-addon2"><em class="iconRefreshRed"></em></a></div>
                </div>
                <div class="form-group">
                    <label for="var3" class="col-sm-6">@ Animation</label>
                    <div class="input-group col-sm-6">
                        <input type="text" class="form-control" id="var3" value="" aria-describedby="basic-addon2">
                        <a href="#" data-studioitems="animation" data-tab="basic" data-type="box_parts"
                           data-styletypes="container_animation" class="input-group-addon btnRefresh" id="basic-addon2"><em
                                    class="iconRefreshRed"></em></a></div>
                </div>
            </div>
        </div>
    </script>
    <script type="template" data-template="paneloptionplaintext">
        <div class="tab-pane" role="tabpanel" data-group="classplain" id="{tabid}">
            <div class="form-group">
                <label class="col-sm-3" for="plaintextmystyle">
                    <input type="radio" name="textplainstyle" data-role="typestyle" data-csstype="typetextplainstyle"
                           id="plaintextmystyle" value="mystyle">
                    My Styles </label>
                <label class=" col-sm-3" for="textnewstyle1">
                    <input type="radio" name="textplainstyle" data-role="typestyle" id="plaintextnewstyle1"
                           data-csstype="typetextplainstyle" value="newstyle">
                    New Styles </label>
            </div>
            <div data-styletype="mystyle">
                <div class="form-group">
                    <label for="cssText" class="col-sm-4">@
                        Text</label>
                    <div class="col-sm-3  p-0">
                        <div class="input-group">
                            <input type="text" class="form-control" id="cssTextplain" value=""
                                   aria-describedby="basic-cssText">
                            <a href="#" data-studiosub="styles" data-tab="plaintext" data-type="plain_text"
                               data-styletypes="stylesplaintext" class="input-group-addon btnRefresh"
                               id="basic-cssText"><em class="iconRefreshRed"></em></a></div>
                    </div>
                </div>
            </div>
            <div class="hide" data-styletype="newstyle"></div>
        </div>
    </script>
    <script type="template" data-template="listingrow">
          <div class="listinginfo" data-listing="row" data-rowid="{rowid}">
              <div class="lsitingbutton">
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
    @include('resources::assests.deleteModal',['title'=>'Delete Style'])
@stop
<textarea class="hiiden">{!! json_encode($types,true) !!}</textarea>
@section('CSS')
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/new-store.css') !!}
    {!! HTML::style("https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css")!!}
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/style_cube.css') !!}
    {!! HTML::style('/js/animate/css/animate.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/css/styles.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/base.min.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/framework/frameworkstudio.css') !!}
    {!! HTML::style('/resources/assets/frameworkcss/frameworkcss.less') !!}
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
    {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/component.js') !!}
    <script>
        Dropzone.options.myAwesomeDropzone = {
            init: function () {
                this.on("success", function (file) {
                    location.reload();
                });
            }
        };
        $(document).ready(function () {

            $('ul.tabs1 li').click(function () {
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs1 li').removeClass('current');
                $('.tab-content1').removeClass('current');

                $(this).addClass('current');
                $("#" + tab_id).addClass('current');
            });
            $('ul.tabs2 li').click(function () {
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs2 li').removeClass('current');
                $('.tab-content2').removeClass('current');

                $(this).addClass('current');
                $("#" + tab_id).addClass('current');
            })
        })

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

//            $("#sortable1, #sortable2").sortable({
//                connectWith: "#sortable2",
//                receive: function(event, ui) {
//                    var html = [];
////                    alert("jj");
//                    $('#sortable1').find('li').html("ssss");
////                    $('#sortable1').find('li').each(function() {
////                        html.push(' <div class="class_item"><div class="col-md-6 prefix_area">BTY.shadow-</div><div class="col-md-4 name_area">Ashok</div> <button class="col-md-2 pull-right close_icon_area"><i class="fa fa-close"></i> </button> </div>');
////                    });
////                    $('#sortable2').find('li').replaceWith(html.join(''));
//                }
//            }).disableSelection();
        });
    </script>
@stop


