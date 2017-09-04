@extends('cms::layouts.mTabs',['index'=>'framework_settings'])
@section('tab')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">General Settings</div>
            <div class="panel-body">
                {!! Form::model($model,['class' => 'form-horizontal']) !!}
                <fieldset>
                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="radios">Select Jquery version</label>
                        <div class="col-md-8">
                            <label class="radio-inline pull-left" for="radios-0">
                                {!! Form::select('jquery_version',['' => 'Select Jquery'] + $jqueryData,null,['class' => 'form-control pull-right']) !!}
                                {!! Form::radio('jquery_option',1,(! isset($model['jquery_option'])) ?? true,['class' => 'pull-left']) !!}
                            </label>
                            <label class="radio-inline pull-left" for="radios-1">
                                {!! Form::text('jquery_url',null,['class' => 'form-control pull-right']) !!}
                                {!! Form::radio('jquery_option',0,null,['class' => 'pull-left']) !!}
                            </label>
                        </div>
                    </div>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="radios">Select Css</label>
                        <div class="col-md-8">
                            <label class="radio-inline pull-left" for="radios-0">
                                {!! Form::select('css_version',['' => 'Select CSS'] + $cssData,null,['class' => 'form-control pull-right']) !!}
                                {!! Form::radio('css_option',1,(! isset($model['css_option'])) ?? true,['class' => 'pull-left']) !!}
                            </label>
                            <label class="radio-inline pull-left" for="radios-1">
                                {!! Form::text('css_url',null,['class' => 'form-control pull-right']) !!}
                                {!! Form::radio('css_option',0,null,['class' => 'pull-left']) !!}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        {!! Form::submit('Save',['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                </fieldset>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
@section('CSS')
@stop
@section('JS')
@stop