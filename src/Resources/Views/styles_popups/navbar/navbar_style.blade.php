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
              <nav>
                  <ul class="navbar_def">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Link 1</a></li>
                      <li><a href="#">Link 2</a></li>
                      <li><a href="#">Link 3</a></li>
                      <li class="icon">
                          <a href="javascript:void(0);" style="font-size:15px;" class="icon_hamburger">☰</a>
                      </li>
                  </ul>
              </nav>
              {{--<nav class="navbar navbar-default">--}}
                  {{--<div class="container-fluid">--}}
                      {{--<div class="navbar-header">--}}
                          {{--<a class="navbar-brand" href="#">WebSiteName</a>--}}
                      {{--</div>--}}
                      {{--<ul class="nav navbar-nav">--}}
                          {{--<li class="active"><a href="#">Home</a></li>--}}
                          {{--<li><a href="#">Page 1</a></li>--}}
                          {{--<li><a href="#">Page 2</a></li>--}}
                          {{--<li><a href="#">Page 3</a></li>--}}
                      {{--</ul>--}}
                  {{--</div>--}}
              {{--</nav>--}}
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
{!! HTML::style('Sahakavatar\Framework\Resources\Views\assets\css\styles.css') !!}
@endpush

 @push('javascript')
  {!! HTML::script('/js/less.js') !!}
  {!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/iconstudio.js') !!}
<script>
    $( document ).ready(function() {
        $( ".navbar_def" ).on( "click", ".icon_hamburger", function() {
           $( ".navbar_def" ).toggleClass("responsive");
        });
    });

</script>
@endpush

