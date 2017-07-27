<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 1/30/2017
 * Time: 4:14 PM
 */
?>
 <div class="row frameworkcontainer">
    <div class="col-xs-6">
      <div class="studiopreview" data-insetpreview="">
           <div data-preview="studio" data-role="classview">
            Text Preview Here
             </div>
      </div>
    </div>
    <div class="col-xs-6 frameworkoptionbox components_options">
    {{--<ul class="nav nav-tabs nav-justified studiotabs " data-tabaction="classmenu">--}}
          {{--<li role="presentation" class="active" data-fieldactive="Deafult"><a href="#studio_deafult" aria-controls="studio_deafult" role="tab" data-toggle="tab">Deafult </a></li>--}}
          {{--<li role="presentation"  data-fieldactive="text"><a href="#studio_hover" aria-controls="studio_hover" role="tab" data-toggle="tab">Hover</a></li>--}}
          {{--<li role="presentation"  data-fieldactive="Linked"><a href="#studio_Linked" aria-controls="studio_Linked" role="tab" data-toggle="tab">Linked</a></li>--}}
      {{--</ul>--}}

        <div class="tab-content frameworksuboptionbox">
            <div class="tab-pane active" data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_deafult">

                <div class="component_setting"  data-tabpreview="selectclass">
                    {{--<ul class="nav nav-tabs nav-justified studiotabs">--}}
                        {{--<li role="presentation" class="active"><a href="#classes" role="tab"--}}
                                                                  {{--data-toggle="tab">Classes</a></li>--}}
                        {{--<li role="presentation"><a href="#collections" role="tab"--}}
                                                   {{--data-toggle="tab">Collections</a></li>--}}
                    {{--</ul>--}}

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


              {{--<div class="studio-collapse-toobar">--}}
                      {{--<div class="row b-b-1">--}}
                      {{--<div class="col-xs-12 col-md-6 col-lg-4 p-t-10 p-b-10 basic-font-color">--}}
                          {{--<div class="pull-left col-xs-9 p-l-0 p-r-0  ">--}}
                              {{--<select data-selector="fontfamily"  data-css="font-family" class="customselect form-control" data-style="class-style-menu">--}}
                                  {{--<option value="Georgia, serif">Georgia, serif</option>--}}
                                  {{--<option value="Times New Roman">Times New Roman</option>--}}
                                  {{--<option value="Arial, Helvetica, sans-serif">Arial</option>--}}
                                  {{--<option value="Helvetica, sans-serif">Helvetica</option>--}}
                                  {{--<option value="Tahoma, Geneva, sans-serif">Tahoma</option>--}}
                                  {{--<option value="Trebuchet MS, Helvetica, sans-serif">Trebuchet MS</option>--}}
                                  {{--<option value="Verdana, Geneva, sans-serif">Verdana</option>--}}
                              {{--</select>--}}
                          {{--</div>--}}
                          {{--<div class="pull-right col-xs-3 p-l-10  p-r-0">--}}
                              {{--<span class="input-group color-picker input-color input-color-inblock" data-textcolor="color">--}}
                              {{--<input type="text" class="form-control hide" id="" value="#000" name="" data-css="color">--}}
                              {{--<span class="input-group-addon"><i></i></span> </span>--}}
                          {{--</div>--}}
                      {{--</div>--}}

                      {{--<div class="col-xs-6 col-md-6 col-lg-3 p-t-10 p-b-10 basic-font-weight">--}}
                          {{--<a href="#" class="btn btn-default bold-button" data-actioncss="font-weight" data-val="bold">B</a> <a href="#" class="btn btn-default italic-button" data-actioncss="font-style" data-val="italic">I</a>--}}
                      {{--</div>--}}
                      {{--<div class="col-xs-6 col-md-6 col-lg-2  p-t-10 p-b-10 text-decoration-style">--}}
                          {{--<select class="form-control customselect" data-style="class-style-menu" data-css="text-decoration"--}}
                    {{--data-selector="textdecoration">--}}
                              {{--<option value="none">none</option>--}}
                              {{--<option value="blink" selected="selected">blink</option>--}}
                              {{--<option value="line-through">line-through</option>--}}
                              {{--<option value="overline">overline</option>--}}
                              {{--<option value="underline">underline</option>--}}
                          {{--</select>--}}
                      {{--</div>--}}
                  {{--</div>--}}
                  {{--<div class="row">--}}
                      {{--<div class="col-xs-12 col-md-12 col-lg-6 p-t-10 p-b-10 text-style-tool basic-letter-spacing">--}}
                            {{--<div class="spinner line-height col-xs-6">--}}
                                    {{--<label for="AngleInput" class="sr-only">line-height</label>--}}
                                    {{--<input type="text" value="12" data-css="line-height" data-html="line-height" data-after="px" id="line-height" class="form-control">--}}
                                    {{--<div class="input-group-btn-vertical">--}}
                                            {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>--}}
                                            {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>--}}
                                    {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="spinner word-spacing col-xs-6">--}}
                                    {{--<label for="letter-spacing" class="sr-only">letter-spacing</label>--}}
                                    {{--<input type="text" value="0" data-css="letter-spacing" data-html="letter-spacing" data-after="px" id="letter-spacing" class="form-control">--}}
                                    {{--<div class="input-group-btn-vertical">--}}
                                            {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>--}}
                                            {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>--}}
                                    {{--</div>--}}
                            {{--</div>--}}
                      {{--</div>--}}
                            {{--<div class="col-xs-6 col-md-6 col-lg-3 p-t-10 p-b-10  text-style-tool basic-text-transform">--}}
                               {{--<div class="text-transform">--}}
                                    {{--<select class="form-control customselect"  data-css="text-transform"--}}
                                        {{--data-selector="texttransform"  data-style="class-style-menu">--}}
                                        {{--<option value="none">none</option>--}}
                                        {{--<option value="capitalize" selected="selected">capitalize</option>--}}
                                        {{--<option value="lowercase">lowercase</option>--}}
                                        {{--<option value="uppercase">uppercase</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-6 col-md-6  col-lg-3 p-t-10 p-b-10 text-tool-align ">--}}
                                {{--<label for="textalign" class="sr-only">Text Align</label>--}}
                                {{--<select class="form-control customselect"  data-css="text-align"--}}
                                    {{--data-selector="textalign"  data-style="class-style-menu">--}}
                                    {{--<option data-icon="glyphicon-align-left" value="left"></option>--}}
                                    {{--<option data-icon="glyphicon-align-center" value="center"></option>--}}
                                    {{--<option data-icon="glyphicon-align-right" value="right"></option>--}}
                                    {{--<option data-icon="glyphicon-align-justify" value="justify"></option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                  {{--</div>--}}

                  {{--<div class="editForm form-horizontal" data-exiting="studio">--}}
                      {{--<div class="form-group">--}}
                          {{--<label for="var2" class="col-sm-3">@ Size</label>--}}
                          {{--<div class="col-sm-3 p-0">--}}
                              {{--<div class="input-group ">--}}
                                  {{--<input type="text" class="form-control" id="var2" value="Variation 0001" aria-describedby="basic-addon2">--}}
                                  {{--<a href="#" data-studioitems="font_size" data-tab="basic" data-type="text_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>--}}
                              {{--</div>--}}
                          {{--</div>--}}
                          {{--<div class="col-sm-6">--}}
                              {{--<label class="radio-inline">--}}
                                  {{--<input type="radio" name="Backgroundlink" id="Backgroundlink" value="link"> Link--}}
                              {{--</label>--}}
                              {{--<label class="radio-inline">--}}
                                  {{--<input type="radio" name="Backgroundlink" id="Backgroundlink1" value="notlink"> Not link--}}
                              {{--</label>--}}
                          {{--</div>--}}
                      {{--</div>--}}

                      {{--<div class="form-group">--}}
                            {{--<label for="var1" class="col-sm-3">@  Padding</label>--}}
                            {{--<div class=" col-sm-3 p-0">--}}
                                {{--<div class="input-group ">--}}
                                    {{--<input type="text" class="form-control" id="var1" value="Variation 0001" aria-describedby="basic-addon2">--}}
                                    {{--<a href="#" data-studioitems="padding_margins" data-tab="basic" data-type="text_parts" class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="paddinglink" id="paddinglink" value="link"> Link--}}
                                {{--</label>--}}
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="paddinglink" id="paddinglink1" value="notlink"> Not link--}}
                                {{--</label>--}}
                            {{--</div>--}}
                      {{--</div>--}}

                      {{--<div class="form-group">--}}
                            {{--<label for="var2" class="col-sm-3">@ Shadow</label>--}}
                            {{--<div class="col-sm-3 p-0">--}}
                                {{--<div class="input-group ">--}}
                                    {{--<input type="text" class="form-control" id="var2" value="Variation 0001" aria-describedby="basic-addon2">--}}
                                    {{--<a href="#" data-studioitems="shadow" data-tab="basic" data-type="text_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="Backgroundlink" id="Backgroundlink" value="link"> Link--}}
                                {{--</label>--}}
                              {{--<label class="radio-inline">--}}
                                {{--<input type="radio" name="Backgroundlink" id="Backgroundlink1" value="notlink"> Not link--}}
                              {{--</label>--}}
                            {{--</div>--}}
                      {{--</div>--}}
                       {{--<div class="form-group">--}}
                            {{--<label for="var4" class="col-sm-3">@  Background    </label>--}}
                            {{--<div class="col-sm-3 p-0">--}}
                               {{--<div class="input-group ">--}}
                                   {{--<input type="text" class="form-control" id="var4" value="Variation 0001" aria-describedby="basic-addon2">--}}
                                   {{--<a href="#" data-studioitems="background" data-tab="basic" data-type="text_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>--}}
                               {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="Backgroundlink" id="Backgroundlink" value="link"> Link--}}
                                {{--</label>--}}
                                  {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="Backgroundlink" id="Backgroundlink1" value="notlink"> Not link--}}
                                  {{--</label>--}}
                            {{--</div>--}}
                      {{--</div>--}}
                      {{--<div class="form-group">--}}
                            {{--<label for="var3" class="col-sm-3">@ Animation</label>--}}
                            {{--<div class="col-sm-3 p-0">--}}
                                {{--<div class="input-group ">--}}
                                    {{--<input type="text" class="form-control" id="var3" value="Variation 0001" aria-describedby="basic-addon2">--}}
                                    {{--<a href="#" data-studioitems="animation" data-tab="basic" data-type="text_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>--}}
                               {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="Animationlink" id="Animationlink" value="link"> Link--}}
                                {{--</label>--}}
                                  {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="Animationlink" id="Animationlink1" value="notlink"> Not link--}}
                                  {{--</label>--}}
                            {{--</div>--}}
                      {{--</div>--}}
                  {{--</div>--}}
            </div>
            {{--<div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_hover">--}}
                {{--hover content will come here--}}
            {{--</div>--}}
            {{--<div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_Linked">--}}
                {{--Linked content will come here--}}
            {{--</div>--}}
      </div>
    </div>
 </div>



 <script type="template" data-template="existingstudio">
    <div class="form-group">
        <label for="type_{studio}" class="col-sm-2">@ {name}</label>
        <div class="input-group col-sm-3">
           <input type="text" class="form-control" id="type_{studio}" value="Variation 0001" aria-describedby="basic-type_{studio}">
           <a href="#" data-studiosub="{studio}" class="input-group-addon btnRefresh" id="basic-type_{studio}"><em class="iconRefreshRed"></em></a>
        </div>
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
 @push('javascript')
  {!! HTML::script('/js/less.js') !!}
  {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/collections.js') !!}

@endpush

