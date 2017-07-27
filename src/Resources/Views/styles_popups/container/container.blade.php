<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 1/30/2017
 * Time: 4:14 PM
 */
?>
<div class="row frameworkcontainer">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="preview_area">
            <div data-preview="studio" class="demo_container">
                Text Preview Here
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 frameworkoptionbox">
        <ul class="nav nav-tabs nav-justified studiotabs" data-tabcssrole="csstype">
            <li role="presentation" class="active"><a href="#studio_deafult" data-cssrole="normal"
                                                      aria-controls="studio_deafult" role="tab" data-toggle="tab">Deafult </a>
            </li>
            <li role="presentation"><a href="#studio_hover" data-cssrole="hover" aria-controls="studio_hover" role="tab"
                                       data-toggle="tab">Hover</a></li>
            <li role="presentation"><a href="#studio_Linked" data-cssrole="selected" aria-controls="studio_Linked"
                                       role="tab" data-toggle="tab">Linked</a></li>
        </ul>

        <div class="tab-content frameworksuboptionbox">
            <div class="tab-pane active" data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"
                 id="studio_deafult">


                <div class="editForm form-horizontal" data-exiting="studio">
{!! $form !!}
                    {{--<div class="form-group">--}}
                        {{--<label class="col-sm-3">@ padding</label>--}}
                        {{--<div class=" col-sm-3 p-0">--}}
                            {{--<div class="input-group ">--}}
                                {{--<input type="text" name="padding" class="form-control" value="Variation 0001">--}}
                                {{--<a href="#" data-studioitems="padding" data-tab="basic" data-type="general"--}}
                                   {{--class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}


                    {{--<div class="form-group">--}}
                        {{--<label class="col-sm-3">@ margins</label>--}}
                        {{--<div class=" col-sm-3 p-0">--}}
                            {{--<div class="input-group ">--}}
                                {{--<input type="text" name="margins" class="form-control" value="Variation 0001">--}}
                                {{--<a href="#" data-studioitems="margins" data-tab="basic" data-type="general"--}}
                                   {{--class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label class="col-sm-3">@ borders</label>--}}
                        {{--<div class=" col-sm-3 p-0">--}}
                            {{--<div class="input-group ">--}}
                                {{--<input type="text" name="borders" class="form-control" value="Variation 0001">--}}
                                {{--<a href="#" data-studioitems="borders" data-tab="basic" data-type="general"--}}
                                   {{--class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label class="col-sm-3">@ radius</label>--}}
                        {{--<div class=" col-sm-3 p-0">--}}
                            {{--<div class="input-group ">--}}
                                {{--<input type="text" name="radius" class="form-control" value="Variation 0001">--}}
                                {{--<a href="#" data-studioitems="radius" data-tab="basic" data-type="general"--}}
                                   {{--class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}


                    {{--<div class="form-group">--}}
                        {{--<label class="col-sm-3">@ box_shadow</label>--}}
                        {{--<div class=" col-sm-3 p-0">--}}
                            {{--<div class="input-group ">--}}
                                {{--<input type="text" name="box_shadow" class="form-control" value="Variation 0001">--}}
                                {{--<a href="#" data-studioitems="box_shadow" data-tab="basic" data-type="general"--}}
                                   {{--class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}


                    {{--<div class="form-group">--}}
                        {{--<label class="col-sm-3">@ Animation</label>--}}
                        {{--<div class=" col-sm-3 p-0">--}}
                            {{--<div class="input-group ">--}}
                                {{--<input type="text" name="animation" class="form-control" value="Variation 0001"--}}
                                       {{--aria-describedby="basic-addon2">--}}
                                {{--<a href="#" data-studioitems="animation" data-tab="basic" data-type="general"--}}
                                   {{--class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label class="col-sm-3">@ background </label>--}}
                        {{--<div class=" col-sm-9 p-0">--}}
                            {{--<label class="radio-inline"><input type="radio" checked name="background"--}}
                                                               {{--data-cssbackground="color">Color</label>--}}
                            {{--<label class="radio-inline"><input type="radio" name="background"--}}
                                                               {{--data-cssbackground="gradient">Gradient</label>--}}
                            {{--<label class="radio-inline"><input type="radio" name="background"--}}
                                                               {{--data-cssbackground="pattern">pattern</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group" data-tabcontent="color">--}}
                        {{--<label class="col-sm-3">@ background color</label>--}}
                        {{--<div class=" col-sm-3 p-0">--}}
                            {{--<div class="input-group ">--}}
                                {{--<input type="text" name="background_color" class="form-control" value="Variation 0001">--}}
                                {{--<a href="#" data-studioitems="background_color" data-tab="basic" data-type="general"--}}
                                   {{--class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<div class="form-group" data-tabcontent="gradient">--}}
                        {{--<label class="col-sm-3">@ gradient_color</label>--}}
                        {{--<div class=" col-sm-3 p-0">--}}
                            {{--<div class="input-group ">--}}
                                {{--<input type="text" name="gradient_color" class="form-control" value="Variation 0001">--}}
                                {{--<a href="#" data-studioitems="gradient_color" data-tab="basic" data-type="general"--}}
                                   {{--class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group" data-tabcontent="pattern">--}}
                        {{--<label class="col-sm-3">@ pattern color</label>--}}
                        {{--<div class=" col-sm-3 p-0">--}}
                            {{--<div class="input-group ">--}}
                                {{--<input type="text" name="pattern_color" class="form-control" value="Variation 0001">--}}
                                {{--<a href="#" data-studioitems="pattern_color" data-tab="basic" data-type="general"--}}
                                   {{--class="input-group-addon btnRefresh"><em class="iconRefreshRed"></em></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="hide">
                        <div class="form-group ">
                            <label for="display" class="col-sm-3">display</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 p-0">
                                <select data-selector="display" disabled data-css="display" id="display"
                                        class="customselect form-control" data-style="selectCatMenu">
                                    <option value="block">block</option>
                                    <option value="inline">inline</option>
                                    <option value="inline-block">inline-block</option>
                                    <option value="none">none</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="position" class="col-sm-3">position</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 p-0">
                                <select data-selector="position" disabled data-css="position" id="position"
                                        class="customselect form-control" data-style="selectCatMenu">
                                    <option value="static">static</option>
                                    <option value="absolute">absolute</option>
                                    <option value="fixed">fixed</option>
                                    <option value="relative">relative</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="box-sizing" class="col-sm-3">box-sizing</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 p-0">
                                <select data-selector="box-sizing" disabled data-css="box-sizing" id="box-sizing"
                                        class="customselect form-control" data-style="selectCatMenu">
                                    <option value="content-box">content-box</option>
                                    <option value="border-box">border-box</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="overflow" class="col-sm-3">overflow</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 p-0">
                                <select data-selector="overflow" disabled data-css="overflow" id="overflow"
                                        class="customselect form-control" data-style="selectCatMenu">
                                    <option value="visible">visible</option>
                                    <option value="hidden">hidden</option>
                                    <option value="scroll">scroll</option>
                                    <option value="auto">auto</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="float" class="col-sm-3">float</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 p-0">
                                <select data-selector="float" disabled data-css="float" id="float"
                                        class="customselect form-control" data-style="selectCatMenu">
                                    <option value="none">none</option>
                                    <option value="left">left</option>
                                    <option value="right">right</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="z-index" class="col-sm-3">z-index</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 whiteSpinner p-0">
                                <div class="width100">
                                    <div class="spinner letter-spacing">
                                        <input type="text" value="12" disabled data-css="z-index" data-html="z-index"
                                               data-after="px" id="z-index" class="form-control">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" disabled type="button"><i
                                                        class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" disabled type="button"><i
                                                        class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="display" class="col-sm-3">display</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 p-0">
                                <select data-selector="display" disabled data-css="display" id="display"
                                        class="customselect form-control" data-style="selectCatMenu">
                                    <option value="block">block</option>
                                    <option value="inline">inline</option>
                                    <option value="inline-block">inline-block</option>
                                    <option value="none">none</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="position" class="col-sm-3">position</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 p-0">
                                <select data-selector="position" disabled data-css="position" id="position"
                                        class="customselect form-control" data-style="selectCatMenu">
                                    <option value="static">static</option>
                                    <option value="absolute">absolute</option>
                                    <option value="fixed">fixed</option>
                                    <option value="relative">relative</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="box-sizing" class="col-sm-3">box-sizing</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 p-0">
                                <select data-selector="box-sizing" disabled data-css="box-sizing" id="box-sizing"
                                        class="customselect form-control" data-style="selectCatMenu">
                                    <option value="content-box">content-box</option>
                                    <option value="border-box">border-box</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="overflow" class="col-sm-3">overflow</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 p-0">
                                <select data-selector="overflow" disabled data-css="overflow" id="overflow"
                                        class="customselect form-control" data-style="selectCatMenu">
                                    <option value="visible">visible</option>
                                    <option value="hidden">hidden</option>
                                    <option value="scroll">scroll</option>
                                    <option value="auto">auto</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="float" class="col-sm-3">float</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 p-0">
                                <select data-selector="float" disabled data-css="float" id="float"
                                        class="customselect form-control" data-style="selectCatMenu">
                                    <option value="none">none</option>
                                    <option value="left">left</option>
                                    <option value="right">right</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="z-index" class="col-sm-3">z-index</label>
                            <div class="col-sm-8 col-md-8 col-lg-3 whiteSpinner p-0">
                                <div class="width100">
                                    <div class="spinner letter-spacing">
                                        <input type="text" value="12" disabled data-css="z-index" data-html="z-index"
                                               data-after="px" id="z-index" class="form-control">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" disabled type="button"><i
                                                        class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" disabled type="button"><i
                                                        class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script type="template" data-template="existingstudio">
        <div class="form-group">
            <label for="type_{studio}" class="col-sm-2">@ {name}</label>
            <div class="input-group col-sm-3">
                <input type="text" class="form-control" id="type_{studio}" value="Variation 0001"
                       aria-describedby="basic-type_{studio}">
                <a href="#" data-studiosub="{studio}" class="input-group-addon btnRefresh" id="basic-type_{studio}"><em
                            class="iconRefreshRed"></em></a>
            </div>
        </div>
    </script>
</div>
@push('javascript')
<script>
    //    $(function(){
    //        var modalHeight = $('.modal-content').height();
    //        $('.frameworksuboptionbox').css("height", modalHeight - 85);
    //    });
</script>
{!! HTML::script('/js/less.js') !!}
{!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/contianer-studio.js') !!}

@endpush
                                          