@extends('cms::layouts.mTabs',['index'=>'framework_plugins'])
@section('tab')
    <div class="container">
        <h2>Framework Versions</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#id</th>
                <th>Version</th>
                <th>Uploaded</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($frameworks as $framework)
            <tr>
                <td>{!! $framework->id !!}</td>
                <td>{!! $framework->version !!}</td>
                <td>{!! $framework->created_at !!}</td>
                <td><i class="btn btn-warning fa fa-trash-o"></i></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('framework::_partials.upload_framework')
@stop
@section('CSS')

@stop
@section('JS')
    {!! HTML::script('js/dropzone/js/dropzone.js') !!}
@stop


