<?php 
/**
 * Created by PhpStorm.
 * User: Comp1
 * Date: 1/30/2017
 * Time: 4:14 PM
 */
?>
 <div class="row frameworkcontainer">
	<div class="col-xs-6">
	  <div data-preview="studio">
			Text Preview Here
	  </div>
	</div>
	<div class="col-xs-6 frameworkoptionbox ">
	<ul class="nav nav-tabs nav-justified studiotabs" data-tabaction="classmenu">
		  <li role="presentation" class="active" data-fieldactive="Deafult"><a href="#studio_deafult" aria-controls="studio_deafult" role="tab" data-toggle="tab">Deafult </a></li>
		  <li role="presentation"  data-fieldactive="text"><a href="#studio_hover" aria-controls="studio_hover" role="tab" data-toggle="tab">Hover</a></li>
		  <li role="presentation"  data-fieldactive="Linked"><a href="#studio_Linked" aria-controls="studio_Linked" role="tab" data-toggle="tab">Linked</a></li>
	  </ul>

		<div class="tab-content frameworksuboptionbox">
			<div class="tab-pane active" data-targetstudiotype="deafult" aria-expanded="true" role="tabpanel"  id="studio_deafult">

				  <div class="editForm form-horizontal">

					  <div class="form-group">
							<label for="var1" class="col-sm-4 col-md-4 col-lg-2">@ Header</label>
							<div class="col-sm-8 col-md-8 col-lg-3">
						   <div class="input-group ">
							   <input type="text" class="form-control" id="var1" value="Variation 0001" aria-describedby="basic-addon2">
							   <a href="#" class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
							</div></div>
					  </div>
					  <div class="form-group">
							<label for="var2" class="col-sm-4 col-md-4 col-lg-2">@ Shadow</label>
							<div class="col-sm-8 col-md-8 col-lg-3">
						   <div class="input-group">
							   <input type="text" class="form-control" id="var2" value="Variation 0001" aria-describedby="basic-addon2">
							   <a href="#" class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
							</div></div>
					  </div>
					  <div class="form-group">
							<label for="var3" class="col-sm-4 col-md-4 col-lg-2">@ Animation</label>
							<div class="col-sm-8 col-md-8 col-lg-3">
						   <div class="input-group">
							   <input type="text" class="form-control" id="var3" value="Variation 0001" aria-describedby="basic-addon2">
							   <a href="#" class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
							</div>
							</div>
					  </div>
					  <div class="form-group">
							<label for="var4" class="col-sm-4 col-md-4 col-lg-2">@ Color</label>
							<div class="col-sm-8 col-md-8 col-lg-3">
							<div class="input-group">
							   <input type="text" class="form-control" id="var4" value="Variation 0001" aria-describedby="basic-addon2">
							   <a href="#" class="input-group-addon btnRefresh" id="basic-addon2"><em class="iconRefreshRed"></em></a>
							</div>
							</div>
					  </div>
					  <div class="form-group">
							<label for="display" class="col-sm-4 col-md-4 col-lg-2">display</label>
							<div class="col-sm-8 col-md-8 col-lg-3">
								<select data-selector="fontfamily"  data-css="font-family" id="display" class="customselect form-control" data-style="selectCatMenu">
									<option value="block">block</option>
									<option value="inline">inline</option>
									<option value="inline-block">inline-block</option>
									<option value="none">none</option>
								</select>
							</div>
					  </div>
					  <div class="form-group">
							<label for="position" class="col-sm-4 col-md-4 col-lg-2">position</label>
							<div class="col-sm-8 col-md-8 col-lg-3">
								<select data-selector="fontfamily"  data-css="font-family" id="position" class="customselect form-control" data-style="selectCatMenu">
									<option value="static">static</option>
									<option value="absolute">absolute</option>
									<option value="fixed">fixed</option>
									<option value="relative">relative</option>
								</select>
							</div>
					  </div>
					  <div class="form-group">
							<label for="box-sizing" class="col-sm-4 col-md-4 col-lg-2">box-sizing</label>
							<div class="col-sm-8 col-md-8 col-lg-3">
								<select data-selector="fontfamily"  data-css="font-family" id="box-sizing" class="customselect form-control" data-style="selectCatMenu">
									<option value="content-box">content-box</option>
									<option value="border-box">border-box</option>
								</select>
							</div>
					  </div>
					  <div class="form-group">
							<label for="overflow" class="col-sm-4 col-md-4 col-lg-2">overflow</label>
							<div class="col-sm-8 col-md-8 col-lg-3">
								<select data-selector="fontfamily"  data-css="font-family" id="overflow" class="customselect form-control" data-style="selectCatMenu">
									<option value="visible">visible</option>
									<option value="hidden">hidden</option>
									<option value="scroll">scroll</option>
									<option value="auto">auto</option>
								</select>
							</div>
					  </div>
					  <div class="form-group">
							<label for="float" class="col-sm-4 col-md-4 col-lg-2">float</label>
							<div class="col-sm-8 col-md-8 col-lg-3">
								<select data-selector="fontfamily"  data-css="font-family" id="float" class="customselect form-control" data-style="selectCatMenu">
									<option value="none">none</option>
									<option value="left">left</option>
									<option value="right">right</option>
								</select>
							</div>
					  </div>
					  <div class="form-group">
							<label for="z-index" class="col-sm-4 col-md-4 col-lg-2">z-index</label>
							<div class="col-sm-8 col-md-8 col-lg-3 whiteSpinner">
								<div class="width100">
									  <div class="spinner letter-spacing">
										  <input type="text" value="12" data-css="font-size" data-html="font-size" data-after="px" id="z-index" class="form-control">
										  <div class="input-group-btn-vertical">
											  <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
											  <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
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
  </div>
@push('CSS')
{!! HTML::style('app\Modules\Framework\Resources\Views\assets\css\styles.css') !!}
@endpush
@push('javascript')

{!! HTML::script('/resources/assets/js/less.js') !!}
@endpush