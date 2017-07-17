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
      <div class="studiopreview">
           <div data-preview="studio">
            Text Preview Here
             </div>
      </div>
    </div>
    <div class="col-xs-6 frameworkoptionbox ">
    <ul class="nav nav-tabs nav-justified studiotabs " data-tabaction="classmenu">
          <li role="presentation" class="active" data-fieldactive="Deafult"><a href="#studio_deafult" aria-controls="studio_deafult" role="tab" data-toggle="tab">Deafult </a></li>
          <li role="presentation"  data-fieldactive="text"><a href="#studio_hover" aria-controls="studio_hover" role="tab" data-toggle="tab">Hover</a></li>
          <li role="presentation"  data-fieldactive="Linked"><a href="#studio_Linked" aria-controls="studio_Linked" role="tab" data-toggle="tab">Linked</a></li>
      </ul>

        <div class="tab-content frameworksuboptionbox">
            <div class="tab-pane active" data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_deafult">
                  <div class="editForm form-horizontal" data-exiting="studio">
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

                      <div class="form-group">
                            <label for="var1" class="col-sm-3">@  Padding</label>
                            <div class=" col-sm-3 p-0">
                                <div class="input-group ">
                                    <input type="text" class="form-control" id="var1" value="Variation 0001" aria-describedby="basic-addon2">
                                    <a href="#" data-studioitems="padding_margins" data-tab="basic" data-type="text_parts" class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="paddinglink" id="paddinglink" value="link"> Link
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="paddinglink" id="paddinglink1" value="notlink"> Not link
                                </label>
                            </div>
                      </div>

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
                            <label for="var4" class="col-sm-3">@  Background    </label>
                            <div class="col-sm-3 p-0">
                               <div class="input-group ">
                                   <input type="text" class="form-control" id="var4" value="Variation 0001" aria-describedby="basic-addon2">
                                   <a href="#" data-studioitems="background" data-tab="basic" data-type="text_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
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
                                    <a href="#" data-studioitems="animation" data-tab="basic" data-type="text_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
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
            <div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_hover">
                hover content will come here
            </div>
            <div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_Linked">
                Linked content will come here
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
 @push('javascript')
  {!! HTML::script('/resources/assets/js/less.js') !!}
  {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/textstudio.js') !!}

@endpush

