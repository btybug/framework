@foreach($data as $item)
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="main_div_1" data-toolaction="selected"
             data-classname="{!! $item['configurator']['name'] !!}">
            <div class="bottom_part_1" data-item="" data-key="true">
                <div class="col-md-4">
                    <a href="#"><span>{!! $item['class'] !!}</span></a>
                    <a data-url="{!! url('/admin/framework/custom-classes/activate') !!}" data-type="custom-classes" data-id="1" class="activate-btn btn btn-success" title="Activate">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div><div class="col-md-8">
                    @if($item['css_data'])
                       {!! $item['css_data'] !!}
                    @else
                        Css here
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach
