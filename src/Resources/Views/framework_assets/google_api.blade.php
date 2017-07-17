<div class="container_main">
    <div class="templates-list  m-t-20 m-b-10">
        <div class="row templates m-b-10">
            <div class="modal fade fullscreenModal" id="google-modal" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="pull-right">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                          

                        </div>
@if($p=='google')
                        <input type="hidden" data-action="sub" value="{!! 'font_family' !!}">

@endif
                    <div class="modal-body">
                         <div class="row frameworkcontainer" data-role="listitem">
                            
                          </div>
                      </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   <script type="template" data-template="listingitem">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="main_div_1" data-toolaction="selected" data-classname="{name}">
              <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family={name}" />
                <div class="top_part_1" style="font-size:24px; font-family:{name},  Helvetica, Arial,' sans-serif' ;">{name}</div>
                <div class="bottom_part_1">
                    <a href="#"><span>{name}</span></a>
                </div>
            </div>
        </div>
    </script>
@push('javascript')
    {!! HTML::script('/app/Modules/Framework/Resources/Views/assets/framework/googlefont-api-asset.js') !!}
@endpush