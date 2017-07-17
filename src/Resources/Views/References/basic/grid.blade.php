
    <div class="row list_222">
        <div class="col-xs-12">
            <div class="laypreview col-md-12">
                <div class="maincontainer-fluid preview-grid" data-preview="gridsave">
                    <div class="row">
                        <div class="col-md-12 p-20" style="background-color: white;">
                            <table class="table table-striped table-bordered" data-table="gridinfo">
                                <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Grid <span> (&ge;<span data-htmlview="">0</span>px)</span></th>
                                    <th>Screen Mobile <span>Landscape (&ge;<span data-htmlview="msm">768</span>px)</span></th>
                                    <th>Screen  Tablet <span>Portrait (&ge;<span data-htmlview="sm">768</span>px)</span></th>
                                    <th>Screen Tablet <span>Landscape (&ge;<span data-htmlview="md">768</span>px)</span></th>
                                    <th>Screen Devices <span>Desktops (&ge;<span data-htmlview="lg">768</span>px)</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><strong>Grid behavior</strong></td>
                                    <td>Horizontal at all times</td>
                                    <td colspan="4">Collapsed to start, horizontal above breakpoints</td>
                                </tr>
                                <tr>
                                    <td><strong>Class prefix</strong></td>
                                    <td>.grid-</td>
                                    <td>.grid-msm</td>
                                    <td>.grid-sm</td>
                                    <td>.grid-md</td>
                                    <td>.grid-lg</td>
                                </tr>
                                <tr>
                                    <td><strong># of columns</strong></td>
                                    <td colspan="5"><span data-htmlview="cols">768</span></td>
                                </tr>

                                <tr data-column="tr">
                                    <td><strong>Class Column {class}</strong></td>
                                    <td>.grid-{class}</td>
                                    <td>.grid-msm{class}</td>
                                    <td>.grid-sm{class}</td>
                                    <td>.grid-md{class}</td>
                                    <td>.grid-lg{class}</td>
                                </tr>

                                <tr data-column="troffset">
                                    <td><strong>Class offset {class}</strong></td>
                                    <td>.grid-offset-{class}</td>
                                    <td>.grid-msm-offset-{class}</td>
                                    <td>.grid-sm-offset-{class}</td>
                                    <td>.grid-md-offset-{class}</td>
                                    <td>.grid-lg-offset-{class}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="row">
                        <div class="gridcol grid-7"><h3> Two Equal Columns</h3>
                            <p>Two equal-width columns (50%/50%) on all screen sizes:</p></div></div>
                    <div  data-previewsave="two"></div>

                    <div class="row">
                        <div class="gridcol grid-7"><h3> Three  Columns</h3>
                            <p>Three width columns on all screen sizes:</p></div>
                    </div>
                    <div  data-previewsave="threeequal"></div>

                    <div class="row">
                        <div class="gridcol grid-7"><h3> Two Unequal Columns</h3>
                            <p>Two Unequal columns on all screen sizes:</p></div>
                    </div>
                    <div  data-previewsave="TwoUnequal"></div>
                </div>
            </div>

        </div>

    </div>

    <div class="modal fade fullscreenModal" id="editpopup" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="pull-left" style="width: 30%">
                        <div class="input-group ">
                            <span class="input-group-addon"
                                  id="basic-addon1">{!! $component->data['term'] or null !!}</span>
                            <input type="text" class="form-control" placeholder="nameofclass" data-prefixcomponet="{!! $component->data['term'] or null !!}" data-role="classname"
                                   id="name" name="title"
                                   data-studiname="gradientcolor" aria-describedby="basic-addon1"
                                   value="{!! $component->def_class or null!!}">
                        </div>
                    </div>
                    <div class="pull-right">
                        <button class="save_item" data-savestudio="save-s" data-savetarget="/admin/framework-versions/version/grids"><i class="fa fa-check" aria-hidden="true"></i>Save
                        </button>
                        <button type="button" class="close" data-lastsaved="closed" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
                <div class="modal-body p-t-0 p-r-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="layoutoptionleft col-md-2">
                                <div class="optionbox">
                                    <h2>Grid system</h2>
                                    <ul>
                                        <li>
                                            <label>number of columns</label>
                                            <input type="range" max="20" min="12" step="2" onchange="gridcolumn.value=value" data-jskey="cols" data-tylefunction="gridcolumn" value="12"> <output id="gridcolumn"></output>
                                        </li>
                                        <li>
                                            <label>gutter-width</label>
                                            <input type="range" max="40" min="0" step="1" onchange="guttercolumn.value=value" data-jskey="gutter" data-tylefunction="guttercolumn" value="10"> <output id="guttercolumn"></output>
                                        </li>
                                    </ul>

                                    <h3>breaking points</h3>
                                    <ul>
                                        <li>
                                            <label>screen Mobile landscape</label>
                                            <input type="range" max="768" min="480" step="1" onchange="mobiellandscape.value=value" data-jskey="msm" data-breaking="msm" value="480"> <output id="mobiellandscape"></output>
                                        </li>
                                        <li>
                                            <label>screen tablet portrait </label>
                                            <input type="range" max="992" min="768" step="1" onchange="tabletportrait.value=value" data-jskey="sm" data-breaking="sm" value="768"> <output id="tabletportrait"></output>
                                        </li>
                                        <li>
                                            <label>screen tablet landscape</label>
                                            <input type="range" max="1050" min="992" step="1" onchange="tabletlandscape.value=value" data-jskey="md" data-breaking="md" value="992"> <output id="tabletlandscape"></output>
                                        </li>
                                        <li>
                                            <label>screen desktop</label>
                                            <input type="range" max="2000" min="1050" step="1" onchange="desktop.value=value" value="1200" data-jskey="lg" data-breaking="lg"> <output id="desktop"></output>
                                        </li>
                                    </ul>
                                </div>


                            </div>

                            <div class="laypreview col-md-10">
                                <div class="maincontainer-fluid preview-grid" data-preview="grid">

                                    <div class="row">
                                        <div class="gridcol grid-12"><div class="content">Grid 12</div></div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-6 "><div class="content">Grid 6</div></div>
                                        <div class="gridcol grid-6"><div class="content">Grid 6</div></div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-4">Grid 4</div>
                                        <div class="gridcol grid-4">Grid 4</div>
                                        <div class="gridcol grid-4">Grid 4</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-3">Grid 3</div>
                                        <div class="gridcol grid-3">Grid 3</div>
                                        <div class="gridcol grid-3">Grid 3</div>
                                        <div class="gridcol grid-3">Grid 3</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-2">Grid 2</div>
                                        <div class="gridcol grid-2">Grid 2</div>
                                        <div class="gridcol grid-2">Grid 2</div>
                                        <div class="gridcol grid-2">Grid 2</div>
                                        <div class="gridcol grid-2">Grid 2</div>
                                        <div class="gridcol grid-2">Grid 2</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-1">Grid 1</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-10">Grid 10</div>
                                        <div class="gridcol grid-2">Grid 2</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-1">Grid 1</div>
                                        <div class="gridcol grid-11">Grid 11</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-2">Grid 2</div>
                                        <div class="gridcol grid-10">Grid 10</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-3">Grid 3</div>
                                        <div class="gridcol grid-9">Grid 9</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-4">Grid 4</div>
                                        <div class="gridcol grid-8">Grid 8</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-5">Grid 5</div>
                                        <div class="gridcol grid-7">Grid 7</div>
                                    </div>

                                    <div class="row">
                                        <div class="gridcol grid-2">Grid 2</div>
                                        <div class="gridcol grid-8">Grid 8</div>
                                        <div class="gridcol grid-2">Grid 2</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-3">Grid 3</div>
                                        <div class="gridcol grid-7">Grid 7</div>
                                        <div class="gridcol grid-2">Grid 2</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-3">Grid 3</div>
                                        <div class="gridcol grid-6">Grid 6</div>
                                        <div class="gridcol grid-3">Grid 3</div>
                                    </div>
                                    <div class="row">
                                        <div class="gridcol grid-4">Grid 4</div>
                                        <div class="gridcol grid-6">Grid 6</div>
                                        <div class="gridcol grid-2">Grid 3</div>
                                    </div>
                                </div>

                                <textarea name="css_data" value="" data-exportcss="css_data" class="css_data" style="padding-top: 50px;">{!!$data['css_data'] or null!!}</textarea>
                                <textarea name="json_data" data-exportjons="json_data" class="json_data" style="padding-top: 50px;">{!!$data['json_data'] or null!!}</textarea>

                                <div class="infor hide" style="padding-top: 50px;"></div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
@push('css')
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/new-store.css') !!}
    {!! HTML::style('app/Modules/Resources/Resources/assets/css/style_cube.css') !!}
    {!! HTML::style('/resources/assets/js/animate/css/animate.css') !!}


    {!! HTML::style('app/Modules/Framework/Resources/Views/grids/assets/css/css.css') !!}
    {!! Html::style('app/Modules/Framework/Resources/Views/assets/css/styles.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/assets/framework/frameworkstudio.css') !!}
    {!! HTML::style('app/Modules/Framework/Resources/Views/grids/assets/css/freamwork.css') !!}
    <style data-savedcss='framework'></style>

@endpush
@push('javascript')
    {!! HTML::script('app/Modules/Framework/Resources/Views/grids/assets/js/framework.js?v=0.12') !!}
    <script type="template" data-gutter="gutter">
        .row {
        margin-right: -{gutter}px;
        margin-left: -{gutter}px;
        }
        .gridcol {
        padding-right: {gutter}px;
        padding-left: {gutter}px;
        }
        .maincontainer, .maincontainer-fluid {
        padding-right: {gutter}px;
        padding-left: {gutter}px;
        }
        .gridruls {
        padding:0 {gutter}px;
        }
    </script>
    <style data-savedcss='framework'></style>
@endpush