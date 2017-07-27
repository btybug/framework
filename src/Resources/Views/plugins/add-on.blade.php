@extends('cms::layouts.mTabs',['index'=>'framework_plugins'])
@section('tab')
    <div class="container">
        <h2>Add-Ons</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Package Name</th>
                <th>Name</th>
                <th>Type</th>
                <th>Active</th>
                <th>Uploaded</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($addOns as $addOn)
                <tr>
                    <td>{!! isset($addOn['package_name']) ? $addOn['package_name'] : '' !!}</td>
                    <td>{!! isset($addOn['name']) ? $addOn['name'] : $addOn['version'] !!}</td>
                    <td>{!! $addOn['data_type'] == 'collections' ? $addOn['type'] . ' collections' : \Sahakavatar\Framework\Models\Framework::getDataType($addOn['data_type']) !!}</td>
                    <td>{!! isset($addOn['active']) ? \Sahakavatar\Framework\Models\Framework::getStatus($addOn['active']) : 'N/A' !!}</td>
                    <td>{!! $addOn['created_at'] !!}</td>
                    <td>
                        @if($addOn['active'] === \Sahakavatar\Framework\Models\Framework::INACTIVE_VERSION)
                            <a data-url="{!! url('/admin/framework/plugins/activate-add-on') !!}" data-type="{!! $addOn['data_type'] !!}" data-id="{!! $addOn['id'] !!}" class="activate-add-on btn btn-warning" title="Activate"><i class="fa fa-power-off"></i></a>
                        @else
                            <a data-url="{!! url('/admin/framework/plugins/inactivate-add-on') !!}" data-type="{!! $addOn['data_type'] !!}" data-id="{!! $addOn['id'] !!}" class="inactivate-add-on btn btn-success" title="Inactivate"><i class="fa fa-power-off"></i></a>
                        @endif

                        @if($addOn['active'] === \Sahakavatar\Framework\Models\Framework::INACTIVE_VERSION)
                            <a class="delete-add-on btn btn-danger" data-url="{!! url('/admin/framework/plugins/delete-add-on') !!}" data-type="{!! $addOn['data_type'] !!}" data-id="{!! $addOn['id'] !!}"><i class="fa fa-trash-o"></i></a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('framework::_partials.upload_framework',['url'=>'/admin/framework/plugins/upload'])
    @include('framework::_partials.delete-add-on')
@stop
@section('CSS')
    <style>
        .active_icon{
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: #14b714;
            color: white;
        }
    </style>

@stop
@section('JS')
    {!! HTML::script('js/dropzone/js/dropzone.js') !!}
    <script>
        $(document).ready(function() {

            $('body').on('click', '.activate-add-on', function() {
                $.ajax({
                    url: $(this).data('url'),
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        type: $(this).data('type'),
                        id: $(this).data('id')
                    },
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                }).done(function(data) {
                    if(data.success) {
                        window.location.reload();
                    }
                }).fail(function() {
                    alert('Could not activate add on. Please try again.');
                });
            });

            $('body').on('click', '.inactivate-add-on', function() {
                $.ajax({
                    url: $(this).data('url'),
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        type: $(this).data('type'),
                        id: $(this).data('id')
                    },
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                }).done(function(data) {
                    if(data.success) {
                        window.location.reload();
                    }
                }).fail(function() {
                    alert('Could not inactivate add on. Please try again.');
                });
            });

            $('body').on('click', '.delete-add-on', function() {
                $('#add_on_modal_delete_button').attr('data-id', $(this).data('id'));
                $('#add_on_modal_delete_button').attr('data-url', $(this).data('url'));
                $('#add_on_modal_delete_button').attr('data-type', $(this).data('type'));
                $('#add_on_modal_delete_button').attr('data-type', $(this).data('type'));
                $('#delete_add_on_label').text('Delete ' + $(this).data('type'));
                $('#delete_add_on').modal('show');
            });

            $('body').on('click', '#add_on_modal_delete_button', function() {
                $.ajax({
                    url: $(this).data('url'),
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        type: $(this).data('type'),
                        id: $(this).data('id')
                    },
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                }).done(function(data) {
                    if(data.success) {
                        window.location.reload();
                    }
                }).fail(function() {
                    alert('Could not inactivate add on. Please try again.');
                });
            });
        });
    </script>
@stop


