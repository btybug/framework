@extends('cms::layouts.mTabs',['index'=>'framework_plugins'])
@section('tab')
    @include('framework::_partials.upload_framework',['url'=>'/admin/framework/plugins/upload'])
@stop
@section('CSS')

@stop
@section('JS')
    {!! HTML::script('js/dropzone/js/dropzone.js') !!}
@stop


