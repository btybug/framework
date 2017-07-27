<div class="row">

	<div class="col-xs-6">
		<div class="line_height_preview">
			<div class="preview_cont_text" >
				<div data-preview="studio">
					<div style="background: white; border: 1px solid black;margin-bottom: 10px;height: 100px;padding: 10px; text-align: center;"> First block</div>
				</div>
				<div data-preview="studio">
					<div style="background: white; border: 1px solid black; margin-bottom: 10px;height: 100px; padding: 10px; text-align: center;"> Second block</div>
				</div>
			</div>
		</div>

	</div>
	<div class="col-xs-6 frameworkoptionbox">
		<div class="frameworksuboptionbox">
			<div class="studio-collapse-toobar" style="background-color: transparent">
				<div class="row b-b-1" style="border-bottom: solid 1px #b3b3b3;  padding-top: 23px; padding-bottom: 7px;">
					<div class="col-xs-12 col-md-3 col-lg-3 p-t-10 p-b-10" style="font-size: 16px; color: #716d6d;"><span class="iconform arrowicon"></span> Display:</div>
					<div class="col-xs-12 col-md-5 col-lg-5  p-t-10 p-b-10">
						<div class="width100">
							<div class="spinner letter-spacing">
								<label for="display" class="sr-only">display</label>
								<select class="form-control customselect" data-style="class-style-menu" data-css="display"
										data-selector="display">
									<option value="block">block</option>
									<option value="inline">inline</option>
									<option value="inline-block">inline-block</option>
									<option value="none">none</option>
									<option value="list-item">list-item</option>
									<option value="table">table</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@push('CSS')
{!! HTML::style('Sahakavatar\Framework\Resources\Views\assets\css\styles.css') !!}
@endpush
@push('javascript')

{!! HTML::script('/js/less.js') !!}
{!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/textstudio.js') !!}
@endpush