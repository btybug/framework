<div class="form-group">
    <label class="col-sm-3">@ background </label>
    <div class=" col-sm-9 p-0">
        @if(in_array('color',$options))
            <label class="radio-inline"><input type="radio" checked name="background"
                                               data-cssbackground="color">Color</label>
        @endif
        @if(in_array('gradient',$options))
            <label class="radio-inline"><input type="radio" name="background"
                                               data-cssbackground="gradient">Gradient</label>
        @endif
        @if(in_array('pattern',$options))
            <label class="radio-inline"><input type="radio" name="background"
                                               data-cssbackground="pattern">pattern</label>
        @endif
    </div>
</div>
@if(in_array('color',$options))
    <div class="form-group" data-tabcontent="color">
        <label class="col-sm-3">@ background color</label>
        <div class=" col-sm-3 p-0">
            <div class="input-group ">
                <input type="text" name="background_color" class="form-control" value="Variation 0001">
                <a href="#" data-studioitems="background_color" data-selector="{!! $cssselector or null !!}" data-tab="basic" data-type="general"
                   class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>
            </div>
        </div>

    </div>
@endif
@if(in_array('gradient',$options))
    <div class="form-group" data-tabcontent="gradient">
        <label class="col-sm-3">@ gradient_color</label>
        <div class=" col-sm-3 p-0">
            <div class="input-group ">
                <input type="text" name="gradient_color" class="form-control" value="Variation 0001">
                <a href="#" data-studioitems="gradient_color" data-selector="{!! $cssselector or null !!}" data-tab="basic" data-type="general"
                   class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>
            </div>
        </div>
    </div>
@endif
@if(in_array('pattern',$options))
    <div class="form-group" data-tabcontent="pattern">
        <label class="col-sm-3">@ pattern color</label>
        <div class=" col-sm-3 p-0">
            <div class="input-group ">
                <input type="text" name="pattern_color" class="form-control" value="Variation 0001">
                <a href="#" data-studioitems="pattern_color" data-tab="basic" data-selector="{!! $cssselector or null !!}" data-type="general"
                   class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>
            </div>
        </div>
    </div>
@endif