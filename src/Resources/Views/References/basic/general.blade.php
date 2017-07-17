@php
    $attributes=['animation','color','position','display','visibility','floating','clear','cursor','opacity','z_index','filter','list_style'];
@endphp
@foreach($attributes as $attribute)
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main_div_1 p-10" style="width: 100%;">{!! strtoupper($attribute) !!}</div>
    <ul class="classes_list">
    @foreach($data as $item)
        @if($attribute==$item['configurator']['type'])
            <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4 @if(!empty($existingClasses) && in_array($item['class'], $existingClasses)){!! 'selected' !!} @endif" class-item data-attr-name="{!! $item['class'] !!}"  data-classname="{!! $item['configurator']['name'] !!}">
                <div class="main_div_1" data-toolaction="selected"
                     data-classname="{!! $item['configurator']['name'] !!}">
                    <div class="bottom_part_1" data-item="" data-key="true">
                        <a href="#"><span>{!! $item['class'] !!}</span></a>
                    </div>
                </div>
            </li>
        @endif
    @endforeach
        </ul>
@endforeach
