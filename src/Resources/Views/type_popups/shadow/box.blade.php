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
        <div class="preview_area_shadow">
            <div data-preview="studio" class="preview_cont">
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 frameworkoptionbox ">
        <div class=" frameworksuboptionbox">
            <!-- Shadow -->
            <div class="row formrow form-horizontal">
                <div class="col-xs-12 studio-collapse-header p-t-10">
                    <span class="pull-left">
                        <a data-toggle="collapse" href="#collapseShadow" class="iconstudio viewicon m-r-5" data-viewpopup="container">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a> Shadow
                    </span>
                    <span class=" m-l-10 pull-left">
                        <label class="switch switch-flat switch-button">
                            <input class="switch-input" data-switch="collapseShadow" data-cssexist="box-shadow" type="checkbox"/>
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle "></span>
                        </label>
                        </span>
                    <a href="#" class="iconstudio addicon m-r-5 pull-right">
                        <i class="fa fa-power-off f-s-20" aria-hidden="true"></i></a>
                    <a href="#" class="iconstudio viewicon m-r-5 pull-right" data-css="box-shadow" data-multycss="boxShadow" data-roletemplate="boxShadow">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-xs-12 studio-collapse-toobar collapse in" data-insettemp="boxShadow" id="collapseShadow"></div>
            </div>
      </div>
    </div>
  </div>
<script type="template" data-template="boxShadow">
    <div class="row textGroupRow contShadowOptions" data-role="textGroup">
     <a href="#" class="iconstudio addicon m-r-5 removetextRow" data-mylticss="boxShadow" data-role="removeTextShedow">
         <i class="fa fa-times" aria-hidden="true"></i>
     </a>
    <div class="colRow">
        <div class="col-xs-6 col-md-6 col-lg-1  p-t-10 p-b-10 border-shadow-color ">
            <span class="input-group color-picker input-color input-color-inblock" data-multycss="boxShadow" data-shadowcolor="color">
                <input type="text" class="form-control hide" id="" value="#000" name="" data-multycss="boxShadow" data-html="color">
                <span class="input-group-addon"><i></i></span>
            </span>
        </div>

         <div class="col-xs-6 col-md-6 col-lg-2 p-t-10 p-b-10 border-shadow-offset-x">
             <select data-selector="fontweight" data-style="btn-black " data-multycss="boxShadow" data-subcss="type" data-css="box-shadow" class="form-control customselect" >
                <option selected="" value="">Outer shadow</option>
                <option value="inset"> Inner shadow</option>
            </select>
        </div>

        <div class="col-xs-6 col-md-6 col-lg-2 p-t-10 p-b-10 border-shadow-offset-x">
            <label class="col-xs-6 col-md-6 col-lg-4 p-l-0 m-t-5 witdh_50"> X</label>
            <div class="col-xs-6 col-md-6 col-lg-8 p-l-0 witdh_50">
                <div class="spinner">
                    <input type="text" value="0" data-multycss="boxShadow" data-html="x" data-css="x" class="form-control">
                    <div class="input-group-btn-vertical">
                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-6  col-lg-2 p-t-10 p-b-10 border-shadow-offset-y">
            <label class="col-xs-6 col-md-6 col-lg-4 p-l-0 m-t-5 witdh_50">Y</label>
            <div class="col-xs-6 col-md-6 col-lg-8 p-l-0 witdh_50">
                <div class="spinner">
                    <input type="text" value="0" data-multycss="boxShadow" data-html="y" data-css="y"   class="form-control">
                    <div class="input-group-btn-vertical">
                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <div class="colRow">
         <div class="col-xs-6 col-md-6 col-lg-3 p-t-10 p-b-10 border-shadow-offset-y">
            <label class="col-xs-6 p-l-0 m-t-5">spread</label>
            <div class="col-xs-6 p-l-0">
            <div class="spinner">
                <input type="text" value="0" data-multycss="boxShadow" data-html="spread" data-css="spread"   class="form-control">
                <div class="input-group-btn-vertical">
                    <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                    <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-6  col-lg-2  p-t-10 p-b-10 border-shadow-blur">
            <label class="col-xs-6 p-l-0 m-t-5" >Blur</label>
            <div class="col-xs-6 p-l-0">
                <div class="spinner last_spinner">
                    <input type="text" value="0"data-multycss="boxShadow" data-html="blur" data-css="blur"   data-min="0" class="form-control">
                    <div class="input-group-btn-vertical">
                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</script>                                    
                                         
@push('CSS')
    {!! HTML::style('app\Modules\Framework\Resources\Views\assets\css\styles.css') !!}
@endpush
@push('javascript')

{!! HTML::script('/resources/assets/js/less.js') !!}
{!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/boxshadow.js') !!}
@endpush