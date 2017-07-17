
<div data-icolist="ficon" data-iconjson='{!! \App\Modules\Framework\Models\Assets::fontAvefomeJson() !!}'></div>

  
    <script type="template" data-template="iconitem">
        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
            <div class="main_div_1" data-toolaction="selected" data-classname="{name}">
                <div class="top_part_1" style="font-size:30px; height:100px;"><i class="{icon}"></i></div>
                <div class="bottom_part_1">
                    <a href="#"><span>{name}</span></a>
                </div>
            </div>
        </div>
    </script>
  
  
   @push('javascript')
    {!! HTML::script('/app/Modules/Framework/Resources/Views/assets/framework/faicon-api-asset.js') !!}
@endpush