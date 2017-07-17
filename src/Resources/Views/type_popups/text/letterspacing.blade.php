<div class="row">

    <div class="col-xs-6">
        <div class="line_height_preview">
            <div class="preview_cont_text" data-preview="studio">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>

    </div>
    <div class="col-xs-6 frameworkoptionbox">
        <div class="frameworksuboptionbox">
        <div class="studio-collapse-toobar" style="background-color: transparent">
            <div class="row b-b-1" style="border-bottom: solid 1px #b3b3b3; padding: 7px 0;">
                <div class="col-xs-12 col-md-3 col-lg-3 p-t-10 p-b-10" style="font-size: 16px; color: #716d6d;"><span class="iconform arrowicon"></span> letter-spacing:</div>

                <div class="col-xs-12 col-md-3 col-lg-3 p-t-10 p-b-10 text-style-tool basic-letter-spacing" style="border-right: 0;">
                    <div class="width100">
                        <div class="spinner letter-spacing" style="width: auto;">
                            <label for="letter-spacing" class="sr-only">letter-spacing</label>
                            <input type="text" value="0" data-css="letter-spacing" data-html="letter-spacing" data-after="px" id="letter-spacing" class="form-control">
                            <div class="input-group-btn-vertical" style="right: 17px;">
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
</div>
@push('javascript')
{!! HTML::script('/resources/assets/js/less.js') !!}
{!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/textstudio.js') !!}

@endpush