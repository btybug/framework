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
                        <div class="col-xs-12 col-md-3 col-lg-3 p-t-10 p-b-10" style="font-size: 16px; color: #716d6d;"><span class="iconform arrowicon"></span> Font-size:</div>
                        <div class="col-xs-12 col-md-5 col-lg-5  p-t-10 p-b-10">
                            <div class="width100">
                                <div class="spinner letter-spacing">
                                    <label for="font-size" class="sr-only">font-size</label>
                                    <input type="text" value="71" data-css="font-size" data-html="font-size" data-after="px" id="font-size" class="form-control">
                                    <div class="input-group-btn-vertical">
                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                    </div>
                                </div>
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
