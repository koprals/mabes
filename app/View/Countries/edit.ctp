<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)">Negara</li>
	<li class="javascript:void(0)">Edit Negara</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-plus-circle"></span> Edit Negara</h2>
</div>
<!-- END PAGE TITLE -->

<!-- START FORM -->
<div class="page-content-wrap">
	<div class="row">
			<div class="col-md-12">
				<?php echo $this->Form->create($ModelName, array('url' => array("controller"=>$ControllerName,"action"=>"Edit"),'class' => 'form-horizontal',"type"=>"file")); ?>
					<div class="panel panel-default">
						<div class="panel-heading">
								<h3 class="panel-title"><strong>Edit</strong> Negara</h3>
						</div>
							<div class="panel-body">
								<div class="form-group">
									<label class="col-md-3 col-xs-12 control-label">Nama</label>
										<div class="col-md-6 col-xs-12">
													<div class="input-group">
															<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
															<?php
																echo $this->Form->input('id_country', array(
																	'type'					=>	'hidden',
																	'class'					=>	'form-control',
																	'label'					=>	false,
																	"required"			=>	"",
																	"autocomplete"	=>	"off",
																	"maxlength"			=>	20,
																));
															?>
															<?php
																echo $this->Form->input('country_name', array(
																	'type'					=>	'text',
																	'class'					=>	'form-control',
																	'label'					=>	false,
																	"required"			=>	"",
																	"autocomplete"	=>	"off",
																	"maxlength"			=>	20,
																));
															?>
												</div>
											</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 col-xs-12 control-label">Posisi Atas</label>
										<div class="col-md-6 col-xs-12">
													<div class="input-group">
															<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
															<?php
																echo $this->Form->input('country_top', array(
																	'type'					=>	'text',
																	'class'					=>	'form-control',
																	'label'					=>	false,
																	"required"			=>	"",
																	"autocomplete"	=>	"off",
																	"maxlength"			=>	20,
																));
															?>
												</div>
											</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 col-xs-12 control-label">Posisi Bawah</label>
										<div class="col-md-6 col-xs-12">
													<div class="input-group">
															<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
															<?php
																echo $this->Form->input('country_bottom', array(
																	'type'					=>	'text',
																	'class'					=>	'form-control',
																	'label'					=>	false,
																	"required"			=>	"",
																	"autocomplete"	=>	"off",
																	"maxlength"			=>	20,
																));
															?>
												</div>
											</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 col-xs-12 control-label">Posisi Kiri</label>
										<div class="col-md-6 col-xs-12">
													<div class="input-group">
															<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
															<?php
																echo $this->Form->input('country_left', array(
																	'type'					=>	'text',
																	'class'					=>	'form-control',
																	'label'					=>	false,
																));
															?>
												</div>
											</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 col-xs-12 control-label">Posisi Kanan</label>
										<div class="col-md-6 col-xs-12">
													<div class="input-group">
															<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
															<?php
																echo $this->Form->input('country_right', array(
																	'type'					=>	'text',
																	'class'					=>	'form-control',
																	'label'					=>	false,
																	"required"			=>	"",
																	"autocomplete"	=>	"off",
																	"maxlength"			=>	20,
																));
															?>
												</div>
											</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 col-xs-12 control-label">Country Latitude</label>
										<div class="col-md-6 col-xs-12">
													<div class="input-group">
															<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
															<?php
																echo $this->Form->input('country_latitude', array(
																	'type'					=>	'text',
																	'class'					=>	'form-control',
																	'label'					=>	false,
																	"required"			=>	"",
																	"autocomplete"	=>	"off",
																	"maxlength"			=>	20,
																));
															?>
												</div>
											</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 col-xs-12 control-label">Country Longitude</label>
										<div class="col-md-6 col-xs-12">
													<div class="input-group">
															<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
															<?php
																echo $this->Form->input('country_longitude', array(
																	'type'					=>	'text',
																	'class'					=>	'form-control',
																	'label'					=>	false,
																	"required"			=>	"",
																	"autocomplete"	=>	"off",
																	"maxlength"			=>	20,
																));
															?>
												</div>
											</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 col-xs-12 control-label">Telepon Kedutaan</label>
										<div class="col-md-6 col-xs-12">
													<div class="input-group">
															<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
															<?php
																echo $this->Form->input('telp_office', array(
																	'type'					=>	'text',
																	'class'					=>	'form-control',
																	'label'					=>	false,
																	"required"			=>	"",
																	"autocomplete"	=>	"off",
																));
															?>
												</div>
											</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 col-xs-12 control-label">Alamat Kedutaan</label>
										<div class="col-md-6 col-xs-12">
															<?php
																echo $this->Form->input('alamat_kedutaan', array(
																	'type'					=>	'textarea',
																	'class'					=>	'form-control',
																	'label'					=>	false,
																	"required"			=>	"",
																	"autocomplete"	=>	"off",
																));
															?>
											</div>
								</div>
							<div class="panel-footer center-button">
								<input type="submit" value="Edit" class="btn btn-success active" />
								<input type="reset" value="Reset" class="btn btn-info active"/>
								<input type="button" value="Cancel" class="btn btn-danger active" onclick="location.href = '<?php echo $settings["cms_url"].$ControllerName?>/Index'"/>
							</div>
					</div>
				</div>
			</div>
	</div>
</div>
<!-- END FORM -->
