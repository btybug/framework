<div class="row">

    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
        <div class="textPreview">
            <div data-preview="studio">
                Text Preview Here
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 frameworkoptionbox font-size">
        <div class="tab-content frameworksuboptionbox">
            <div class="tab-pane active" data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_deafult">
                <div class="studio-collapse-toobar" style="background-color: transparent">
                    <div class="row b-b-1" style="border-bottom: solid 1px #b3b3b3;  padding-top: 23px; padding-bottom: 7px;">
                        <div class="col-xs-12 col-md-3 col-lg-3 p-t-10 p-b-10" style="font-size: 16px; color: #716d6d;"><span class="iconform arrowicon"></span> Font weight:</div>
                        <div class="col-xs-12 col-md-5 col-lg-5  p-t-10 p-b-10">
                            <div class="width100">
                                <div class="spinner letter-spacing">
                                    <label for="font-size" class="sr-only">font-weight</label>
                                    <select class="form-control customselect" data-style="class-style-menu" data-css="font-weight"
                                            data-selector="fontweight">
                                        <option value="100">100</option>
                                        <option value="200">200</option>
                                        <option value="400">400</option>
                                        <option value="500" selected="selected">500</option>
                                        <option value="600">600</option>
                                        <option value="700">700</option>
                                        <option value="800">800</option>
                                        <option value="900">900</option>
                                        <option value="bold">bold</option>
                                        <option value="bolder">bolder</option>
                                        <option value="normal">normal</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row b-b-1" style="border-bottom: solid 1px #b3b3b3;  padding-top: 23px; padding-bottom: 7px;">
                        <div class="col-xs-12 col-md-3 col-lg-3 p-t-10 p-b-10" style="font-size: 16px; color: #716d6d;"><span class="iconform arrowicon"></span> Text decoration</div>
                        <div class="col-xs-12 col-md-5 col-lg-5  p-t-10 p-b-10">
                            <div class="width100">
                                <div class="spinner letter-spacing">
                                    <label for="font-size" class="sr-only">font-decoration</label>

                                    {{--<input type="text" value="71" data-css="font-size" data-html="font-size" data-after="px" id="font-size" class="form-control">--}}
                                    {{--<div class="input-group-btn-vertical">--}}
                                        {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>--}}
                                        {{--<button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>--}}
                                    {{--</div>--}}
                                </div>

                                <select class="form-control customselect" data-style="class-style-menu" data-css="text-decoration"
                                        data-selector="textdecoration">
                                    <option value="none">none</option>
                                    <option value="blink" selected="selected">blink</option>
                                    <option value="line-through">line-through</option>
                                    <option value="overline">overline</option>
                                    <option value="underline">underline</option>
                                </select>
                                <a href="#" class="btn btn-default italic-button" data-actioncss="font-style" data-val="italic">I</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_hover">
                hover content will come here
            </div>
            <div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_Linked">
                Linked content will come here
            </div>
        </div>
    </div>

</div>

<script type="template" data-template="existingstudio">
    <div class="form-group">
        <label for="type_{studio}" class="col-sm-2">@ {name}</label>
        <div class="input-group col-sm-3">
            <input type="text" class="form-control" id="type_{studio}" value="Variation 0001" aria-describedby="basic-type_{studio}">
            <a href="#" data-studiosub="{studio}" class="input-group-addon btnRefresh" id="basic-type_{studio}"><em class="iconRefreshRed"></em></a>
        </div>
    </div>
</script>

@push('CSS')
{!! HTML::style('app\Modules\Framework\Resources\Views\assets\css\styles.css') !!}
@endpush

@push('javascript')
{!! HTML::script('/resources/assets/js/less.js') !!}
{!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/textstudio.js') !!}

@endpush
