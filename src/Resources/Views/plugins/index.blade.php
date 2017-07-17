@extends('layouts.mTabs',['index'=>'framework_plugins'])
@section('tab')
<div class="container">
    <h2>Custom Classes</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#id</th>
            <th>Name</th>
            <th>Uploaded</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @if(count($classes))
            @foreach($classes as $class)
                <tr>
                    <td>{!! $class->id !!}</td>
                    <td>{!! $class->name !!}</td>
                    <td>{!! $class->created_at !!}</td>
                    <td>
                        <a data-href="{!! url('/admin/framework/custom-classes/delete') !!}" data-key="{!! $class->id !!}" data-type="Custom Class"
                           class="delete-button btn btn-danger trashBtn"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td rowspan="4">
                    No Classes
                </td>
            </tr>
        @endif
        </tbody>
    </table>
</div>
@include('_partials.delete_modal')
@include('framework::_partials.upload_custom_classes')
@stop
@section('CSS')

@stop
@section('JS')
    {!! HTML::script('resources/assets/js/dropzone/js/dropzone.js') !!}
@stop
