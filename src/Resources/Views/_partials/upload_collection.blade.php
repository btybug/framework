<div class="modal fade" id="uploadfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['url'=>'/admin/framework/plugins/upload-collection','class'=>'dropzone', 'id'=>'my-awesome-dropzone']) !!}
                    <div class="form-control">
                        <label>Enter Collection Name: </label>
                        {!! Form::text('name',null,['class' => 'form-control']) !!}
                    </div>
                {!! Form::close() !!} </div>
        </div>
    </div>
</div>
@push('javascript')
<script>
    Dropzone.options.myAwesomeDropzone = {
        init: function () {
            this.on("success", function (file) {
                    location.reload();
            });
        }
    };
    $(document).ready(function () {
    $('body').on('click','.tabdownloadbtn',function () {
        $('#uploadfile').modal();
    });
    });
</script>
@endpush