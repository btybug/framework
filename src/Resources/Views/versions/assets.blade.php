@extends('cms::layouts.mTabs',['index'=>'framework_assets'])
@section('tab')
    <div class="container">
        <h2>Assets</h2>
        <div class="col-md-12">
            <a href="javascript:void(0)" class="btn btn-warning uplJS">Upload</a>
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
                    {!! Form::open(['url' => 'admin/framework/generate-main-js']) !!}
                        @foreach($plugins as $item)
                            <tr>
                                <td>
                                    <input name="assets[{!! $item->id !!}]" value="0" type="hidden" />
                                    <input name="assets[{!! $item->id !!}]" value="1" @if($item->is_generated) checked="checked" @endif type="checkbox" />
                                </td>
                                <td>{!! $item->name !!}</td>
                                <td>{!! $item->author !!}</td>
                                <td>{!! $item->version !!}</td>
                                <td>
                                    <a class="btn btn-info"> Update </a>
                                </td>
                            </tr>
                        @endforeach
                    <tr>
                        <td rowspan="5">
                            {!! Form::submit('Generate main JS',['class' => 'btn btn-success']) !!}
                        </td>
                    </tr>
                    {!! Form::close() !!}
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
    @include('framework::versions._partials.upload_js_modal')
@stop

@section('CSS')
@stop

@section('JS')
@stop