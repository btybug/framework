@php
    $attributes=['border_color', 'borders', 'radius', 'margins', 'paddings', 'box_shadow','overflow', 'box_sizing', 'width', 'height', 'background_color', 'gradient_color','pattern_color'];
@endphp

@foreach($attributes as $attribute)
    <div class="text-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main_div_1 p-10" style="width: 100%;">{!! strtoupper($attribute) !!}</div>
    </div>
    @foreach($data as $item)
        @if($attribute==$item['configurator']['type'])
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="main_div_1" data-toolaction="selected"
                     data-classname="{!! $item['configurator']['name'] !!}">
                    <div class="bottom_part_1" data-item="" data-key="true">
                        <a href="#"><span>{!! $item['class'] !!}</span></a>
                        <a data-url="{!! url('/admin/framework/custom-classes/activate') !!}" data-type="custom-classes" data-id="1" class="activate-btn btn btn-success" title="Activate">
                            <i class="fa fa-power-off"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endforeach