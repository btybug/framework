@extends('cms::layouts.mTabs',['index'=>'framework_settings'])
@section('tab')
    <div class="col-md-12">
        {!! Form::model($model,['class' => 'form-horizontal','files' => true]) !!}
        <div class="panel panel-default">
            <div class="panel-heading">JS Settings</div>
            <div class="panel-body">

                <fieldset>
                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="radios">Active JS</label>
                        <div class="col-md-8">
                            {!! $type.".js" !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="radios">Select JS</label>
                        <div class="col-md-8">
                            <label class="radio-inline pull-left" for="radios-0">
                                {!! Form::select('js_version',['' => 'Select JS'],null,['class' => 'form-control pull-right']) !!}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        {!! Form::submit('Save',['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Css Settings</div>
            <div class="panel-body">

                <fieldset>
                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="radios">Select Css</label>
                        <div class="col-md-8">
                            <label class="radio-inline pull-left" for="radios-0">
                                {!! Form::select('css_version',['' => 'Select CSS'] + $cssData,null,['class' => 'form-control pull-right']) !!}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        {!! Form::submit('Save',['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Font Settings</div>
            <div class="panel-body">

                <fieldset>
                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="radios">Select Font</label>
                        <div class="col-md-8">
                            <label class="radio-inline pull-left" for="radios-0">
                                {!! Form::select('font_version',['' => 'Select Font'],null,['class' => 'form-control pull-right']) !!}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        {!! Form::submit('Save',['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                </fieldset>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop
@section('CSS')
@stop
@section('JS')
@stop