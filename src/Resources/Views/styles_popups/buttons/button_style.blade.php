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
              <button>Button</button>
          </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 frameworkoptionbox icon_styles">
        <ul class="nav nav-tabs nav-justified studiotabs hide" data-tabaction="classmenu">
              <li role="presentation" class="active" data-fieldactive="Deafult"><a href="#studio_deafult" aria-controls="studio_deafult" role="tab" data-toggle="tab">Deafult </a></li>
              <li role="presentation"  data-fieldactive="text"><a href="#studio_hover" aria-controls="studio_hover" role="tab" data-toggle="tab">Hover</a></li>
              <li role="presentation"  data-fieldactive="Linked"><a href="#studio_Linked" aria-controls="studio_Linked" role="tab" data-toggle="tab">Linked</a></li>
          </ul>

            <div class="tab-content frameworksuboptionbox">
                <div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_hover">
                    hover content will come here
                </div>
                <div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_Linked">
                    Linked content will come here
                </div>
                <div class="bottom_options">

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
{!! HTML::style('app\Modules\Framework\Resources\Views\assets\css\styles.css') !!}
@endpush

 @push('javascript')
  {!! HTML::script('/resources/assets/js/less.js') !!}
  {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/iconstudio.js') !!}
@endpush

