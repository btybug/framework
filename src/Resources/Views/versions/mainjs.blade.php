@extends('cms::layouts.mTabs',['index'=>'framework_assets'])
@section('tab')
    <div class="container">
        <h2>Main Js</h2>
        <div class="col-md-12">
            <a href="javascript:void(0)" class="btn btn-warning">Upload</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Lib</th>
                    <th>Author</th>
                    <th>Version</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(count($plugins))
                    @foreach($plugins as $item)
                        <tr>
                            <td><input type="checkbox"/></td>
                            <td>{!! $item->name !!}</td>
                            <td>{!! $item->author !!}</td>
                            <td>{!! $item->version !!}</td>
                            <td>
                                <a class="btn btn-info"> Update </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td rowspan="5">No libraries</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

    @include('cms::_partials.delete_modal')
@stop

@section('CSS')
@stop

@section('JS')
@stop