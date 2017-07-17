<div class="row">

    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
        <div class="textPreview">
            <div data-preview="studio">
                Text Preview Here
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 frameworkoptionbox font-color">


        <div class="tab-content frameworksuboptionbox">
            <div class="tab-pane active" data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_deafult">
                <div class="studio-collapse-toobar" style="background-color: transparent">
                    <div class="row b-b-1" style="border-bottom: solid 1px #b3b3b3; padding-top: 23px;  padding-bottom: 7px;">
                        <div class="col-xs-12 col-md-12 col-lg-12 basic-font-color" style="border-right: none">
                            <div class="form-group">
                                <label class="col-xs-12 col-md-3 col-lg-3 p-t-10 p-b-10"><span class="iconform arrowicon"></span> Color:</label>
                                <div class="col-xs-12  col-md-5 col-lg-5  p-t-10 p-b-10">
                                    <input type="text" class="form-control color-picker" data-textcolor="color"  value="#FFFFFF">
                                </div>
                            </div>

                            {{--<div class="col-xs-3 p-l-10  p-r-0">--}}
                            {{--<span class="input-group color-picker input-color input-color-inblock" data-textcolor="color">--}}
                              {{--<input type="text" class="form-control hide" id="" value="#000" name="" data-css="color">--}}
                              {{--<span class="input-group-addon"><i></i></span> </span>--}}
                            {{--</div>--}}
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
