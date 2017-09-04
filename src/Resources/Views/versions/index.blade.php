@extends('cms::layouts.admin')
@section('content')

    <div class="container">
        <h2>Libraries</h2>
        <div class="col-md-12">
            <a href="javascript:void(0)" class="btn btn-info tabdownloadbtn">New Library</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#id</th>
                    <th>Name</th>
                    <th>type</th>
                    <th>path</th>
                    <th>Uploaded</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(count($versions))
                    @foreach($versions as $item)
                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->name !!}</td>
                            <td>{!! $item->type !!}</td>
                            <td>{!! $item->path !!}</td>
                            <td>{!! $item->created_at !!}</td>
                            <td>
                                @if(! $item->active)
                                    {!! Form::open(['url' => 'admin/framework/make-active']) !!}
                                    {!! Form::hidden('id',$item->id) !!}
                                    {!! Form::button("<i class='glyphicon glyphicon-ok'></i>",['class' => 'btn trashBtn btn-warning','type' => 'submit','style' => '    background-color: #0cff78;']) !!}
                                    {!! Form::close() !!}
                                @else
                                    <span class="label label-primary">Active</span>
                                @endif
                                <a data-href="{!! url('/admin/framework/delete') !!}" data-key="{!! $item->id !!}"
                                   data-type="Collection" class="delete-button btn btn-danger trashBtn"><i
                                            class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td rowspan="4">No libraries</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

    @include('cms::_partials.delete_modal')

    @include('framework::versions._partials.upload_modal')

@stop

@section('CSS')
@stop

@section('JS')
@stop