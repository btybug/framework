@extends('cms::layouts.mTabs',['index'=>'framework_plugins'])
@section('tab')
    <div class="container">
        <h2>Collections</h2>
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
            @if(count($collections))
                @foreach($collections as $item)
                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->name !!}</td>
                        <td>{!! $item->created_at !!}</td>
                        <td>
                            @if(! $item->active)
                                {!! Form::open(['url' => 'admin/framework/plugins/activate-collection']) !!}
                                    {!! Form::hidden('id',$item->id) !!}
                                {!! Form::close() !!}
                            @else
                            @endif
                                <a data-href="{!! url('/admin/framework/plugins/delete-collection') !!}" data-key="{!! $item->id !!}" data-type="Collection" class="delete-button btn btn-danger trashBtn"><i class="fa fa-trash-o"></i></a>

                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td rowspan="4">No Collections</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
    @include('_partials.delete_modal')
    @include('framework::_partials.upload_collection')
@stop
@section('CSS')

@stop
@section('JS')
    {!! HTML::script('js/dropzone/js/dropzone.js') !!}
@stop
