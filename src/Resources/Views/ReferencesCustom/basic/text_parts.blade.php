@php
    $attributes=['text_size', 'text_height', 'text_indent', 'text_shadow', 'color','text_decoration', 'text_alignment', 'text_transform', 'word_break', 'direction',  'word_spacing',  'letter_spacing'];
@endphp

@foreach($attributes as $attribute)
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main_div_1 p-10" style="width: 100%;">{!! strtoupper($attribute) !!}</div>
    @foreach($data as $item)
        @if($attribute==$item['type'])
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="main_div_1" data-toolaction="selected"
                     data-classname="{!! $item['name'] !!}">
                    <div class="bottom_part_1" data-item="" data-key="true">
                        <a href="#"><span>{!! $item['item_name'] !!}</span></a>
                        <a data-url="{!! url('/admin/framework/custom-classes/activate') !!}" data-type="custom-classes" data-id="1" class="activate-btn btn btn-success" title="Activate">
                            <i class="fa fa-power-off"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endforeach