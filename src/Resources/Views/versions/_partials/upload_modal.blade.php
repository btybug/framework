<div class="modal fade" id="uploadfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Add new</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    {!! Form::open(['class' => 'form-horizontal','files' => true]) !!}
                    <div>
                        <label for="username">Name</label>
                        {!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Enter name']) !!}
                    </div>

                    <div>
                        <label for="username">Choose Type</label>
                        {!! Form::select('type',
                            ['' => '-- Select type --','css' => 'Css','js'=>'JS','jquery'=>'JQuery'],null,['class' => 'form-control']) !!}
                    </div>

                    <div>
                        <label for="username">Upload file</label>
                        {!! Form::file('file',['class' => 'form-control']) !!}
                    </div>
                    <div>
                        {!! Form::submit('Submit',['class' => 'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@push('javascript')
    <script>
        $(document).ready(function () {
            $('body').on('click', '.tabdownloadbtn', function () {
                $('#uploadfile').modal();
            });
        })

    </script>
@endpush