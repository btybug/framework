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
            <li role="presentation" class="active" data-fieldactive="container"><a href="#studio_deafult" aria-controls="studio_deafult" role="tab" data-toggle="tab">Container </a></li>
            <li role="presentation"  data-fieldactive="text"><a href="#studio_hover" aria-controls="studio_hover" role="tab" data-toggle="tab">Text</a></li>
        </ul>

        <div class="tab-content frameworksuboptionbox">
            <div class="tab-pane active" data-targetstudiotype="container" aria-expanded="true" role="tabpanel"  id="studio_deafult">
                <div class="studio-collapse-toobar">
                    <div class="form-group ">
                        <label class="col-sm-4">@ Container</label>
                        <div class="col-sm-3 p-0">
                            <div class="input-group">
                                <input class="form-control" id="Container" value="" type="text">
                                <a href="#" data-tab="style" data-type="box_styles" data-studiosub="styles"  class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane " data-targetstudiotype="text" aria-expanded="true" role="tabpanel"  id="studio_hover">
               text
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

