@extends('layouts.mTabs',['index'=>'fw_settings'])
@section('tab')
    {!! Form::open(['method'=>'POST']) !!}
    <div class="panel panel-default">
        <div class="panel-heading" style="font-weight: bold;">Main Css</div>
        <div class="panel-body">

                <div class="form-group" style="float: left; width: 21%; margin-right: 68px;">
                    <label class="form-check-label" for="select_local" style="font-weight: bold;">
                        Select local framework
                        <input type="radio" class="form-check-input" name="select_local" id="select_local" value="" checked>
                    </label>
                    {!! Form::select('local_fw',$configuredMainCss+$localeFrameworks,$ActiveFrameworks,['class'=>'form-control']) !!}
                </div>

                <div class="form-group" style="  float: left; width: 21%; margin-right: 68px;">
                    <label class="form-check-label" for="type_url" style="font-weight: bold;">
                       Type URL framework
                        <input type="radio" class="form-check-input" name="type_url" id="type_url" value="" disabled>
                    </label>
                    <input type="text" class="form-control" name="select_local" id="select_local" value="URL">
                </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" style="font-weight: bold;">Master Collections</div>
        <div class="panel-body">
            <div class="form-group" style="float: left; margin-right: 68px;">
                <label class="form-check-label col-md-12" for="select_local" style="font-weight: bold;">
                    Select active master collection
                </label>
                <div class="col-md-6"> {!! Form::radio('default', 0, !\App\Modules\Framework\Models\Collections::checkMasterDefaultIsActive()) !!} {!! Form::select('collection_id', $collections, $activeCollection, ['class'=>'form-control select_inline']) !!}</div>
                    <div class="col-md-3">{!! Form::radio('default', 1, \App\Modules\Framework\Models\Collections::checkMasterDefaultIsActive()) !!}My Configuration</div>
                <div class="col-md-3">{!! Form::select('master_collection_default',$defaultMasterCollections,null, ['class'=>'form-control select_inline']) !!} </div>
            </div>

        </div>
    </div>
    {!! Form::close() !!}
    <div class="panel panel-default">
        <div class="panel-heading" style="font-weight: bold;">Jquery version</div>
        <div class="panel-body">
            {!! Form::select('jquery',['jQuery Core 1.12.4','jQuery Core 1.12.3'],null,['class'=>'form-control']) !!}
        </div>
    </div>
    @stop
@section('CSS')
    <style>
       .select_inline.form-control{
           width: 200px;
           display: inline-block;
       }
    </style>
@stop
@section('JS')
    <script>
        $(document).ready(function () {
            $('body').on('click','.form-submit',function () {
                console.log(1);
                $('form').submit()
            })
        })
    </script>
    @stop