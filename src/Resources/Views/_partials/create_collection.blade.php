<div class="modal fade" id="addnewclass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Add New Collection
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['url'=>'/admin/framework/create-new-collection']) !!}
            {!! Form::hidden('section','element_classes') !!}
            {!! Form::hidden('data_type','css') !!}
            {!! Form::hidden('sub_type',$type) !!}
            <div class="modal-body">
                <div class="form-group">
                    <label for="groupname">Display name</label>
                    {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Enter Class name']) !!}
                </div>
            </div>

            <div class="modal-footer">
                {!! Form::submit('Create',['class' => 'btn btn-info']) !!}
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>