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
          <div class="studiopreview">
               <div>
                   <div class="col-xs-12 previewAray icon-preview">
                       <i class="fa fa-apple" data-preview="studio"></i>
                   </div>
                 </div>
          </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 frameworkoptionbox icon_styles">
        <ul class="nav nav-tabs nav-justified studiotabs hide" data-tabaction="classmenu">
              <li role="presentation" class="active" data-fieldactive="Deafult"><a href="#studio_deafult" aria-controls="studio_deafult" role="tab" data-toggle="tab">Deafult </a></li>
              <li role="presentation"  data-fieldactive="text"><a href="#studio_hover" aria-controls="studio_hover" role="tab" data-toggle="tab">Hover</a></li>
              <li role="presentation"  data-fieldactive="Linked"><a href="#studio_Linked" aria-controls="studio_Linked" role="tab" data-toggle="tab">Linked</a></li>
          </ul>

            <div class="tab-content frameworksuboptionbox">

                <div class="row " id="builderContain">
                    <div class="col-xs-12 col-sm-12 formoptions ">
                        <div class="row formrow form-horizontal">
                            <!-- Color -->
                            <div class="form-group">
                                <label class="col-sm-4"><span class="iconform arrowicon"></span> Color:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control color-picker" data-textcolor="color"  value="#FFFFFF">
                                </div>
                            </div>
                            <!-- Icon Size -->
                            <div class="form-group">
                                <label class="col-sm-4"><span class="iconform arrowicon"></span> Icon Size</label>
                                <div class="col-sm-6">
                                    <div class="uiinline settingSlider redSlider m-t-5" data-css="font-size" data-css-after="px" data-slide-min="12" data-slide-max="150" data-slide-step="1" data-slide-val="30"></div>
                                </div>
                            </div>
                            <!-- Rotation -->
                            <div class="form-group">
                                <label class="col-sm-4"><span class="iconform arrowicon"></span> Rotation:</label>
                                <div class="btn-group col-sm-6" data-toggle="buttons">
                                    <label class="btn btn-primary btn-black active">
                                        <input type="radio" name="rotation" data-css="transform" data-rotation="transform" value="rotate(0deg)" autocomplete="off" checked=""> No
                                    </label>
                                    <label class="btn btn-primary btn-black">
                                        <input type="radio" name="rotation" data-css="transform" data-rotation="transform"value="rotate(90deg)"  autocomplete="off"> 90
                                    </label>
                                    <label class="btn btn-primary btn-black">
                                        <input type="radio" name="rotation" data-css="transform" data-rotation="transform"value="rotate(180deg)" value="bb-rotate-180" autocomplete="off"> 180
                                    </label>
                                    <label class="btn btn-primary btn-black">
                                        <input type="radio" name="rotation" data-css="transform" data-rotation="transform" value="rotate(270deg)" value="bb-rotate-270" autocomplete="off"> 270
                                    </label>
                                </div>
                            </div>
                            <!-- Animation -->


                            {{--<div class="form-group">--}}
                                {{--<label class="col-sm-4"><span class="iconform arrowicon"></span> Animation:</label>--}}
                                {{--<div class="btn-group col-sm-6" data-toggle="buttons">--}}
                                    {{--<label class="btn btn-primary btn-black active">--}}
                                        {{--<input type="radio" name="animation" value="" autocomplete="off" checked=""> No--}}
                                    {{--</label>--}}
                                    {{--<label class="btn btn-primary btn-black">--}}
                                        {{--<input type="radio" name="animation" value="bb-spin" autocomplete="off"> Spin--}}
                                    {{--</label>--}}
                                    {{--<label class="btn btn-primary btn-black">--}}
                                        {{--<input type="radio" name="animation" value="bb-pulse" autocomplete="off"> Pulse--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                           
                        </div>
                    </div>
                </div>
                <div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_hover">
                    hover content will come here
                </div>
                <div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_Linked">
                    Linked content will come here
                </div>
                <div class="bottom_options">
                    <div class="form-horizontal">
                    <div class="form-group">
                        <label for="var2" class="col-sm-3">@ Shadow</label>
                        <div class="col-sm-3 p-0">
                            <div class="input-group ">
                                <input type="text" class="form-control" id="var2" value="Variation 0001" aria-describedby="basic-addon2">
                                <a href="#" data-studioitems="shadow" data-tab="basic" data-type="text_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input type="radio" name="Backgroundlink" id="Backgroundlink" value="link"> Link
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="Backgroundlink" id="Backgroundlink1" value="notlink"> Not link
                            </label>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="var3" class="col-sm-3">@ Animation</label>
                        <div class="col-sm-3 p-0">
                            <div class="input-group ">
                                <input type="text" class="form-control" id="var3" value="Variation 0001" aria-describedby="basic-addon2">
                                <a href="#" data-studioitems="animation" data-tab="basic" data-type="box_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input type="radio" name="Animationlink" id="Animationlink" value="link"> Link
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="Animationlink" id="Animationlink1" value="notlink"> Not link
                            </label>
                        </div>
                    </div>
                </div>
          </div>
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

@push('CSS')
{!! HTML::style('Sahakavatar\Framework\Resources\Views\assets\css\styles.css') !!}
@endpush

 @push('javascript')
  {!! HTML::script('/js/less.js') !!}
  {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/iconstudio.js') !!}
@endpush

