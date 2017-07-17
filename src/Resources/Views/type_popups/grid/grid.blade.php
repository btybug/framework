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
            <div class="textPreview">
              <div data-preview="studio">
                    Text Preview Here
              </div>
            </div>
        </div>
        <div class="col-xs-6 frameworkoptionbox ">
            <div class=" frameworksuboptionbox">
                
                
             </div>
        </div>
 </div>

@push('CSS')
    {!! HTML::style('app\Modules\Framework\Resources\Views\assets\css\styles.css') !!}
@endpush
@push('javascript')

{!! HTML::script('/resources/assets/js/less.js') !!}
{!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/textshadow.js') !!}
@endpush