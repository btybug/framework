
<!-- Modal fullscreen -->
<div class="modal modal-fullscreen fullscreenModal  fade" id="mymodal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button data-url="{!! url('/admin/framework/main-css/apply-component-classes') !!}" class="btn pull-right save_item"><i class="fa fa-save m-r-10"></i>Save</button>
                <button type="button" class="close pull-right" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <ul class="tabsmodal">
                    <li class="tab-link current main-classes-tab" data-tab="tab-1"><a href="#">Main classes</a></li>
                    <li class="tab-link custom-classes-tab" data-tab="tab-2"><a href="#">Custom classes</a></li>
                </ul>
            </div>
            <div class="modal-body">
                    <div id="tab-1" class="tab-content current">

                    </div>
                    <div id="tab-2" class="tab-content">

                    </div>
            </div>
            <div class="modal-footer">
                <h3 class="m-b-20">Selected classes</h3>
            <ul id="selected_classes"> </ul>
            </div>
        </div>
    </div>
</div>