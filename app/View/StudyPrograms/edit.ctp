<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)"><?php echo "Program Studi"?></li>
	<li class="javascript:void(0)"><?php echo "Tambah Program Studi"?></li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-plus-circle"></span> Tambah Program Studi</h2>
</div>
<!-- END PAGE TITLE -->

<!-- START FORM -->
<div class="page-content-wrap">
	<div class="row">
			<div class="col-md-12">
				<?php echo $this->Form->create($ModelName, array('url' => array("controller"=>$ControllerName,"action"=>"Edit"),'class' => 'form-horizontal',"type"=>"file")); ?>
					<div class="panel panel-default">
						<div class="panel-heading">
								<h3 class="panel-title"><strong>Tambah</strong> Program Studi Baru</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Program Studi</label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('name', array(
														'type'					=>	'text',
														'class'					=>	'form-control select',
														'label'					=>	false,
													));
												?>
											</div>
										</div>
							</div>
							<!-- <div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Kategori Program Studi</label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('study_program_category_id', array(
														'type'					=>	'hidden',
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=>  $list_category,
														'empty'					=>  NULL,
													));
												?>
										</div>
							</div> -->
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Jenis Pendidikan</label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('education_type_id', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=> $list_education,
														'empty'					=> "Pilih Jenis Pendidikan",
													));
												?>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Negara</label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('country_id', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=> $list_country,
														'empty'					=> "Pilih Negara",
													));
												?>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">State</label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('state_id', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=> $list_state,
														'empty'					=> "Pilih State",
													));
												?>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Address</label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('address', array(
														'type'					=> 'textarea',
														'class'					=>	'form-control',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
													));
												?>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Status</label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('status', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														'default'				=>	1,
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=> array("0"=>"Not Active","1"=>"Active"),
														'empty'					=> false,
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
