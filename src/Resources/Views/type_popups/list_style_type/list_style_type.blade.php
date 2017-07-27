<div class="row">

	<div class="col-xs-6">
		<div class="line_height_preview">
			<div class="preview_cont_text" >
				<ul data-preview="studio">
					<li>Link 1</li>
					<li>Link 2</li>
					<li>Link 3</li>
					<li>Link 4</li>
					<li>Link 5</li>
				</ul>
			</div>
		</div>

	</div>
	<div class="col-xs-6 frameworkoptionbox">
		<div class="frameworksuboptionbox">
			<div class="studio-collapse-toobar" style="background-color: transparent">
				<div class="row b-b-1" style="border-bottom: solid 1px #b3b3b3;  padding-top: 23px; padding-bottom: 7px;">
					<div class="col-xs-12 col-md-3 col-lg-3 p-t-10 p-b-10" style="font-size: 16px; color: #716d6d;"><span class="iconform arrowicon"></span> List Style Type:</div>
					<div class="col-xs-12 col-md-5 col-lg-5  p-t-10 p-b-10">
						<div class="width100">
							<div class="spinner letter-spacing">
								<label for="list-style-type" class="sr-only">list-style-type</label>
								<select class="form-control customselect" data-style="class-style-menu" data-css="list-style-type"
										data-selector="liststyletype">
									<option value="disc">disc</option>
									<option value="circle">circle</option>
									<option value="square">square</option>
									<option value="decimal">decimal</option>
									<option value="decimal-leading-zero">decimal-leading-zero</option>
									<option value="armenian">armenian</option>
									<option value="hebrew">hebrew</option>
									<option value="hiragana">hiragana</option>
									<option value="hiragana-iroha">hiragana-iroha</option>
									<option value="katakana">katakana</option>
									<option value="katakana-iroha">katakana-iroha</option>
									<option value="lower-alpha">lower-alpha</option>
									<option value="lower-greek">lower-greek</option>
									<option value="lower-latin">lower-latin</option>
									<option value="lower-roman">lower-roman</option>
									<option value="upper-alpha">upper-alpha</option>
									<option value="upper-greek">upper-greek</option>
									<option value="upper-latin">upper-latin</option>
									<option value="upper-roman">upper-roman</option>
									<option value="none">none</option>
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