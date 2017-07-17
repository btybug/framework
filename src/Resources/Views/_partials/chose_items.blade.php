<div class="modal fade fullscreenModal" id="importmodal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="pull-right">
                    <button class="save_item" data-savestudio="{!!$p!!}"><i
                                class="fa fa-check" aria-hidden="true"></i>Save
                    </button>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
            <div class="modal-body p-t-0 p-r-0">
                <div data-role="listitem">
                    @if($data)
                        @foreach($data as $item)
                            @if(!isset($item['active']) || $item['active'] )
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <div class="main_div_1" data-toolaction="selected"
                                     data-classname="{!! $item['classname'] !!}">
                                    <div class="top_part_1">{!! json_encode($item['css'],true) !!}</div>
                                    <div class="bottom_part_1">
                                        <a href="#"><span>{!! $item['classname'] !!}</span></a>
                                    </div>
                                    <input type="checkbox" name="items[]" value="{!! $key !!}">
                                </div>

                            </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>