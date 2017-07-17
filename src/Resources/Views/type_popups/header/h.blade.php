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
    <ul class="nav nav-tabs nav-justified studiotabs hide" data-tabaction="classmenu">
      <li role="presentation" class="active" data-fieldactive="Deafult"><a href="#studio_deafult" aria-controls="studio_deafult" role="tab" data-toggle="tab">Deafult </a></li>
      <li role="presentation"  data-fieldactive="text"><a href="#studio_hover" aria-controls="studio_hover" role="tab" data-toggle="tab">Hover</a></li>
      <li role="presentation"  data-fieldactive="Linked"><a href="#studio_Linked" aria-controls="studio_Linked" role="tab" data-toggle="tab">Linked</a></li>
    </ul>
        <div class="tab-content frameworksuboptionbox">
            <div class="tab-pane active" data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_deafult">
              <div class="studio-collapse-toobar" style="background-color: transparent">
                  <div class="row b-b-1" style="border-bottom: solid 1px #b3b3b3; padding: 7px 0;">
                      <div class="col-xs-12 col-md-3 col-lg-3 p-t-10 p-b-10" style="font-size: 16px; color: #716d6d;"><span class="iconform arrowicon"></span> Font-size:</div>

                      <div class="col-xs-12 col-md-3 col-lg-3  p-t-10 p-b-10 text-style-tool">
                          <div class="width100">
                              <div class="spinner letter-spacing">
                                  <label for="font-size" class="sr-only">font-size</label>
                                  <input type="text" value="12" data-css="font-size" data-html="font-size" data-after="px" id="font-size" class="form-control">
                                  <div class="input-group-btn-vertical">
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row b-b-1" style="border-bottom: solid 1px #b3b3b3; padding: 7px 0;">
                  <div class="col-xs-12 col-md-3 col-lg-3 p-t-10 p-b-10" style="font-size: 16px; color: #716d6d;"><span class="iconform arrowicon"></span> Line-height:</div>

                    <div class="col-xs-12 col-md-3 col-lg-3 p-t-10 p-b-10 text-style-tool basic-letter-spacing" style="border-right: 0;">
                        <div class="width100">
                        <div class="spinner line-height" style="width: auto;">
                            <label for="AngleInput" class="sr-only">line-height</label>
                            <input type="text" value="12" data-css="line-height" data-html="line-height" data-after="px" id="line-height" class="form-control">
                            <div class="input-group-btn-vertical" style="right: 17px;">
                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                            </div>
                        </div>
                        </div>
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
                                          
                                          