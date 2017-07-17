@foreach($data as $item)
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="main_div_1" data-toolaction="selected"
             data-classname="{!! $item['name'] !!}">
            <div class="bottom_part_1" data-item="" data-key="true">
                <div class="col-md-4">
                    <a href="#"><span>{!! $item['name'] !!}</span></a>
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