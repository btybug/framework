@php
    $attributes=['animation','color','position','display','visibility','floating','clear','cursor','opacity','z_index','filter','list_style'];
@endphp

@foreach($attributes as $attribute)
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main_div_1 p-10" style="width: 100%;">{!! strtoupper($attribute) !!}</div>
    @if(count($data))
        @foreach($data as $pk => $item)
            @if($attribute==$item['type'])
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="main_div_1" data-toolaction="selected"
                         data-classname="{!! $item['name'] !!}">
                        <div class="bottom_part_1" data-item="" data-key="true">
                            <a href="#"><span>{!! $item['item_name'] !!}</span></a>
                            @if(isset($item['active']) && $item['active'])
                                <a data-url="{!! url('/admin/framework/custom-classes/inactivate') !!}" data-id="{!! $pk !!}" data-type="custom-classes" data-item-name="{!! $item['item_name']!!}" class="activate-custom-class btn btn-success" title="Deactivate">
                                    <i class="fa fa-power-off"></i>
                                </a>
                            @else
                                <a data-url="{!! url('/admin/framework/custom-classes/activate') !!}" data-id="{!! $pk !!}" data-type="custom-classes" data-item-name="{!! $item['item_name']!!}" class="activate-custom-class btn btn-warning" title="Activate">
                                    <i class="fa fa-power-off"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endif
@endforeach