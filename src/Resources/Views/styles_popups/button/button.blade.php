<?php
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 1/30/2017
 * Time: 4:14 PM
 */
?>
<div class="row frameworkcontainer">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="preview_area_btn">
			<button data-preview="studio">
				Button
			</button>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 frameworkoptionbox ">
		<ul class="nav nav-tabs nav-justified studiotabs hide" data-tabaction="classmenu">
			<li role="presentation" class="active" data-fieldactive="Deafult"><a href="#studio_deafult" aria-controls="studio_deafult" role="tab" data-toggle="tab">Deafult </a></li>
			<li role="presentation"  data-fieldactive="text"><a href="#studio_hover" aria-controls="studio_hover" role="tab" data-toggle="tab">Hover</a></li>
			<li role="presentation"  data-fieldactive="Linked"><a href="#studio_Linked" aria-controls="studio_Linked" role="tab" data-toggle="tab">Linked</a></li>
		</ul>

		<div class="tab-content frameworksuboptionbox">
			<div class="tab-pane active" data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_deafult">


				<div class="editForm form-horizontal" data-exiting="studio">

					<div class="form-group">
						<label for="var1" class="col-sm-3">@  padding  </label>
						<div class=" col-sm-3 p-0">
							<div class="input-group ">
								<input type="text" class="form-control" id="var1" value="Variation 0001" aria-describedby="basic-addon2">
								<a href="#" data-studioitems="padding_margins" data-tab="basic" data-type="box_parts" class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
							</div>
						</div>
						<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" name="paddinglink" id="paddinglink" value="link"> Link
							</label>
							<label class="radio-inline">
								<input type="radio" name="paddinglink" id="paddinglink1" value="notlink"> Not link
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="var4" class="col-sm-3">@  Border & Radius    </label>
						<div class="col-sm-3 p-0">
							<div class="input-group ">
								<input type="text" class="form-control" id="var4" value="Variation 0001" aria-describedby="basic-addon2">
								<a href="#" data-studioitems="border_radius" data-tab="basic" data-type="box_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
							</div>
						</div>
						<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" name="Borderlink" id="Borderlink" value="link"> Link
							</label>
							<label class="radio-inline">
								<input type="radio" name="Borderlink" id="Borderlink1" value="notlink"> Not link
							</label>

						</div>
					</div>
					<div class="form-group">
						<label for="var2" class="col-sm-3">@ Shadow</label>
						<div class="col-sm-3 p-0">
							<div class="input-group ">
								<input type="text" class="form-control" id="var2" value="Variation 0001" aria-describedby="basic-addon2">
								<a href="#" data-studioitems="shadow" data-tab="basic" data-type="box_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
							</div>
						</div>
						<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" name="Backgroundlink" id="Backgroundlink" value="link"> Link
							</label>
							<label class="radio-inline">
								<input type="radio" name="Backgroundlink" id="Backgroundlink1" value="notlink"> Not link
							</label>

						</div>
					</div>
					<div class="form-group">
						<label for="var4" class="col-sm-3">@  Background    </label>
						<div class="col-sm-3 p-0">
							<div class="input-group ">
								<input type="text" class="form-control" id="var4" value="Variation 0001" aria-describedby="basic-addon2">
								<a href="#" data-studioitems="background" data-tab="basic" data-type="box_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
							</div>
						</div>
						<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" name="Backgroundlink" id="Backgroundlink" value="link"> Link
							</label>
							<label class="radio-inline">
								<input type="radio" name="Backgroundlink" id="Backgroundlink1" value="notlink"> Not link
							</label>

						</div>
					</div>
					<div class="form-group hide">
						<label for="var3" class="col-sm-3">@ Animation</label>
						<div class="col-sm-3 p-0">
							<div class="input-group ">
								<input type="text" class="form-control" id="var3" value="Variation 0001" aria-describedby="basic-addon2">
								<a href="#" data-studioitems="animation" data-tab="basic" data-type="box_parts"  class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
							</div>
						</div>
						<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" name="Animationlink" id="Animationlink" value="link"> Link
							</label>
							<label class="radio-inline">
								<input type="radio" name="Animationlink" id="Animationlink1" value="notlink"> Not link
							</label>

						</div>
					</div>
					<div class="form-group">
						<label for="display" class="col-sm-3">display</label>
						<div class="col-sm-8 col-md-8 col-lg-3 p-0">
							<select data-selector="display" disabled  data-css="display" id="display" class="customselect form-control" data-style="selectCatMenu">
								<option value="block">block</option>
								<option value="inline">inline</option>
								<option value="inline-block">inline-block</option>
								<option value="none">none</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="position" class="col-sm-3">position</label>
						<div class="col-sm-8 col-md-8 col-lg-3 p-0">
							<select data-selector="position" disabled data-css="position" id="position" class="customselect form-control" data-style="selectCatMenu">
								<option value="static">static</option>
								<option value="absolute">absolute</option>
								<option value="fixed">fixed</option>
								<option value="relative">relative</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="box-sizing" class="col-sm-3">box-sizing</label>
						<div class="col-sm-8 col-md-8 col-lg-3 p-0">
							<select data-selector="box-sizing"  disabled data-css="box-sizing" id="box-sizing" class="customselect form-control" data-style="selectCatMenu">
								<option value="content-box">content-box</option>
								<option value="border-box">border-box</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="overflow" class="col-sm-3">overflow</label>
						<div class="col-sm-8 col-md-8 col-lg-3 p-0">
							<select data-selector="overflow" disabled data-css="overflow" id="overflow" class="customselect form-control" data-style="selectCatMenu">
								<option value="visible">visible</option>
								<option value="hidden">hidden</option>
								<option value="scroll">scroll</option>
								<option value="auto">auto</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="float" class="col-sm-3">float</label>
						<div class="col-sm-8 col-md-8 col-lg-3 p-0">
							<select data-selector="float"  disabled data-css="float" id="float" class="customselect form-control" data-style="selectCatMenu">
								<option value="none">none</option>
								<option value="left">left</option>
								<option value="right">right</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="z-index" class="col-sm-3">z-index</label>
						<div class="col-sm-8 col-md-8 col-lg-3 whiteSpinner p-0">
							<div class="width100">
								<div class="spinner letter-spacing">
									<input type="text" value="12" disabled data-css="z-index" data-html="z-index" data-after="px" id="z-index" class="form-control">
									<div class="input-group-btn-vertical">
										<button class="btn btn-default" disabled type="button"><i class="fa fa-caret-up"></i></button>
										<button class="btn btn-default" disabled type="button"><i class="fa fa-caret-down"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



			</div>
			<div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_hover">
				hover content will come here
			</div>
			<div class="tab-pane " data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_Linked">
				Linked content will come here
			</div>
		</div>
	</div>
	<script type="template" data-template="existingstudio">
		<div class="form-group">
			<label for="type_{studio}" class="col-sm-2">@ {name}</label>
			<div class="input-group col-sm-3">
				<input type="text" class="form-control" id="type_{studio}" value="Variation 0001" aria-describedby="basic-type_{studio}">
				<a href="#" data-studiosub="{studio}" class="input-group-addon btnRefresh" id="basic-type_{studio}"><em class="iconRefreshRed"></em></a>
			</div>
		</div>
	</script>
</div>
@push('javascript')
{!! HTML::script('/js/less.js') !!}
{!! HTML::script('app/Modules/Framework/Resources/Views/assets/framework/contianer-studio.js') !!}

@endpush
