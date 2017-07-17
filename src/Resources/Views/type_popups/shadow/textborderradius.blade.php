<?php 
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 1/30/2017
 * Time: 4:14 PM
 */
?>
 <div class="row frameworkcontainer">
    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
        <div class="textPreview">
                <div data-preview="studio">
                        Text Preview Here
                </div>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 frameworkoptionbox">
        <div class="frameworksuboptionbox">
               <!-- Shadow -->
            <div class="row formrow form-horizontal">
                <div class="col-xs-12 studio-collapse-header p-t-10">
                        <span class="pull-left">
                                <a data-toggle="collapse" href="#collapseBorderRadius" class="iconstudio viewicon  m-r-5" data-viewpopup="container">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                Border and Radius
                        </span>
                        <span class=" m-l-10 pull-left">
                                <label class="switch switch-flat switch-button">
                                        <input class="switch-input" data-switch="collapseBorderRadius" data-cssexist="border-radius" type="checkbox"/>
                                        <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle "></span>
                                </label>
                        </span>
                        <a href="#" class="iconstudio addicon m-r-5 pull-right" ><i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a>
                </div>
        <div class="col-xs-12 studio-collapse-toobar collapse in" id="collapseBorderRadius">
                <div class="borderRadius">
                        <div class="row">
                                <div class="col-xs-12 col-md-12 col-lg-6 p-t-10 p-b-20 border-section">
                                        <div class="col-xs-12">
                                                <div class="radio-inline customelement">
                                                        <input type="radio" name="bordertype" id="bordersame" value="same" data-csstype="border" data-getcontainer="">
                                                        <label  for="bordersame">Same Border</label>
                                                </div>
                                                <div class="radio-inline customelement">
                                                        <input type="radio" name="bordertype" id="bordercustomize" checked value="customize" data-csstype="border" data-getcontainer="bordercustomize" class="radioOption">
                                                        <label for="bordercustomize">Customize</label>
                                                </div>
                                        </div>
                                        <div class="col-xs-12  m-t-5" data-role="borderGroup" data-roletype="top">
                                                <label class="col-xs-3  p-r-0 m-t-5" data-lable-title="top">Top</label>
                                                <div class="col-xs-3 p-l-0">
                                                        <div class="spinner">
                                                                <input type="text" value="1" data-css="border-width" data-html="top" data-multycss="border" id="AngleInput" class="form-control">
                                                                <div class="input-group-btn-vertical">
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-xs-2 p-l-0">
                                                        <span class="input-group color-picker input-color input-color-inblock" data-html="top" data-multycss="border">
                                                                <input type="text" class="form-control hide" id="" value="#000" name="" data-css="border-color" data-html="top" data-multycss="border" >
                                                                <span class="input-group-addon"><i></i></span>
                                                        </span>
                                                </div>
                                                <div class="col-xs-4 p-l-0">
                                                        <select class="form-control customselect" data-css="border-style" data-html="top" data-multycss="border"  data-selector="border"  data-style="class-style-menu">
                                                                <option value="solid" selected="">Solid</option>
                                                                <option value="dashed">Dashed</option>
                                                                <option value="dotted">Dotted</option>
                                                                <option value="double">Double</option>
                                                                <option value="groove">Groove</option>
                                                                <option value="hidden">Hidden</option>
                                                                <option value="inset">Inset</option>
                                                                <option value="none">None</option>
                                                                <option value="outset">Outset</option>
                                                                <option value="ridge">Ridge</option>
                                                        </select>
                                                </div>
                                        </div>
                                        <div class="col-xs-12  m-t-5" data-role="borderGroup" data-roletype="right">
                                                <label class="col-xs-3  p-r-0 m-t-5">Right</label>
                                                <div class="col-xs-3 p-l-0">
                                                        <div class="spinner">
                                                                <input type="text" value="1" data-css="border-width" data-html="right" data-multycss="border" id="AngleInput" class="form-control">
                                                                <div class="input-group-btn-vertical">
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-xs-2 p-l-0">
                                                        <span class="input-group color-picker input-color input-color-inblock" data-html="right" data-multycss="border">
                                                                <input type="text" class="form-control hide" id=""  name="" data-css="border-color" data-html="right" data-multycss="border" >
                                                                <span class="input-group-addon"><i></i></span>
                                                        </span>
                                                </div>
                                                <div class="col-xs-4 p-l-0">
                                                        <select class="form-control customselect" data-css="border-style" data-html="right" data-multycss="border"  data-selector="border"  data-style="class-style-menu">
                                                                <option value="solid" selected="">Solid</option>
                                                                <option value="dashed">Dashed</option>
                                                                <option value="dotted">Dotted</option>
                                                                <option value="double">Double</option>
                                                                <option value="groove">Groove</option>
                                                                <option value="hidden">Hidden</option>
                                                                <option value="inset">Inset</option>
                                                                <option value="none">None</option>
                                                                <option value="outset">Outset</option>
                                                                <option value="ridge">Ridge</option>
                                                        </select>
                                                </div>
                                        </div>
                                        <div class="col-xs-12  m-t-5" data-role="borderGroup" data-roletype="bottom">
                                                <label class="col-xs-3  p-r-0 m-t-5">Bottom</label>
                                                <div class="col-xs-3 p-l-0">
                                                        <div class="spinner">
                                                                <input type="text" value="1" data-css="border-width" data-html="bottom" data-multycss="border" id="AngleInput" class="form-control">
                                                                <div class="input-group-btn-vertical">
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-xs-2 p-l-0">
                                                        <span class="input-group color-picker input-color input-color-inblock" data-html="bottom" data-multycss="border">
                                                                <input type="text" class="form-control hide" id="" value="#000" name="" data-css="border-color" data-html="bottom" data-multycss="border" >
                                                                <span class="input-group-addon"><i></i></span>
                                                        </span>
                                                </div>
                                                <div class="col-xs-4 p-l-0">
                                                        <select class="form-control customselect" data-css="border-style" data-html="bottom" data-multycss="border"  data-selector="border"  data-style="class-style-menu">
                                                                <option value="solid" selected="">Solid</option>
                                                                <option value="dashed">Dashed</option>
                                                                <option value="dotted">Dotted</option>
                                                                <option value="double">Double</option>
                                                                <option value="groove">Groove</option>
                                                                <option value="hidden">Hidden</option>
                                                                <option value="inset">Inset</option>
                                                                <option value="none">None</option>
                                                                <option value="outset">Outset</option>
                                                                <option value="ridge">Ridge</option>
                                                         </select>
                                                </div>
                                        </div>
                                        <div class="col-xs-12  m-t-5" data-role="borderGroup" data-roletype="left">
                                                <label class="col-xs-3  p-r-0 m-t-5">left</label>
                                                <div class="col-xs-3 p-l-0">
                                                        <div class="spinner">
                                                                <input type="text" value="1" data-css="border-width" data-html="left" data-multycss="border" class="form-control">
                                                                <div class="input-group-btn-vertical">
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-xs-2 p-l-0">
                                                        <span class="input-group color-picker input-color input-color-inblock" data-html="left" data-multycss="border">
                                                                <input type="text" class="form-control hide" id="" value="#000" name="" data-css="border-color" data-html="left" data-multycss="border" >
                                                                <span class="input-group-addon"><i></i></span>
                                                        </span>
                                                </div>
                                                <div class="col-xs-4 p-l-0">
                                                        <select class="form-control customselect" data-css="border-style" data-html="left" data-multycss="border"  data-selector="border"  data-style="class-style-menu">
                                                                <option value="solid" selected="">Solid</option>
                                                                <option value="dashed">Dashed</option>
                                                                <option value="dotted">Dotted</option>
                                                                <option value="double">Double</option>
                                                                <option value="groove">Groove</option>
                                                                <option value="hidden">Hidden</option>
                                                                <option value="inset">Inset</option>
                                                                <option value="none">None</option>
                                                                <option value="outset">Outset</option>
                                                                <option value="ridge">Ridge</option>
                                                        </select>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xs-12 col-md-12  col-lg-6  p-t-10 p-b-20  border-section">
                                        <div class="col-xs-12">
                                                <div class="radio-inline customelement">
                                                        <input type="radio" name="radiustype" id="radiussame" value="same" data-csstype="border-radius" data-getcontainer="">
                                                        <label  for="radiussame">Same Radius</label>
                                                </div>
                                                <div class="radio-inline customelement">
                                                        <input type="radio" name="radiustype" id="radiuscustomize" value="customize" data-csstype="border-radius" data-getcontainer="radiuscustomize" checked>
                                                        <label for="radiuscustomize">Customize</label>
                                                </div>
                                        </div>
                                        <div class="col-xs-12  m-t-20">
                                                <div class="col-xs-3 p-l-0" data-role="border-radiusGroup" data-roletype="top">
                                                        <div class="spinner">
                                                                <input type="text" value="03" data-html="top" data-multycss="borderRadius" data-css="border-radius" data-min='0' class="form-control">
                                                                <div class="input-group-btn-vertical">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-xs-3 " data-role="border-radiusGroup" data-roletype="top">
                                                         <label class=" border-radius border-radius-top" for="top_border"></label>
                                                </div>
                                                <div class="col-xs-3 " data-role="border-radiusGroup" data-roletype="right">
                                                        <label class=" border-radius  border-radius-right" for="top_border"></label>
                                                </div>
                                                <div class="col-xs-3 p-l-0" data-role="border-radiusGroup" data-roletype="right">
                                                        <div class="spinner">
                                                                <input type="text" value="03" data-html="right" data-multycss="borderRadius" data-css="border-radius" data-min='0' class="form-control">
                                                                <div class="input-group-btn-vertical">
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-xs-12  m-t-20 ">
                                                <div class="col-xs-3 p-l-0" data-role="border-radiusGroup" data-roletype="left">
                                                        <div class="spinner">
                                                                <input type="text" value="03" data-html="left" data-multycss="borderRadius" data-css="border-radius" data-min='0' class="form-control">
                                                                <div class="input-group-btn-vertical">
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-xs-3 " data-role="border-radiusGroup" data-roletype="left">
                                                        <label class="border-radius  border-radius-left" for="top_border"></label>
                                                </div>
                                                <div class="col-xs-3" data-role="border-radiusGroup" data-roletype="bottom">
                                                        <label class=" border-radius  border-radius-bottom" for="top_border"></label>
                                                </div>
                                                <div class="col-xs-3 p-l-0"  data-role="border-radiusGroup" data-roletype="bottom">
                                                        <div class="spinner">
                                                                <input type="text" value="03" data-html="bottom" data-multycss="borderRadius" data-min='0' data-css="border-radius" class="form-control">
                                                                <div class="input-group-btn-vertical">
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
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
    </div>
  </div>
                                          

@push('CSS')
    {!! HTML::style('app\Modules\Framework\Resources\Views\assets\css\styles.css') !!}
@endpush
@push('javascript')
<script>


</script>
{!! HTML::script('/resources/assets/js/less.js') !!}
{!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/boxshadow.js') !!}
@endpush