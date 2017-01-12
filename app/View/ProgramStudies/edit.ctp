<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)"><?php echo "Program Studi"?></li>
	<li class="javascript:void(0)"><?php echo "Tambah Program Studi"?></li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-plus-circle"></span> Edit Program Studi</h2>
</div>
<!-- END PAGE TITLE -->

<!-- START FORM -->
<div class="page-content-wrap">
	<div class="row">
			<div class="col-md-12">
				<?php echo $this->Form->create($ModelName, array('url' => array("controller"=>$ControllerName,"action"=>"Edit"),'class' => 'form-horizontal',"type"=>"file")); ?>
					<div class="panel panel-default">
						<div class="panel-heading">
								<h3 class="panel-title"><strong>Edit</strong> Program Studi</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Program Studi</label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('id', array(
														'type'					=>	'hidden',
														'class'					=>	'form-control select',
														'label'					=>	false,
													));
												?>
												<?php
													echo $this->Form->input('edu_name', array(
														'type'					=>	'text',
														'class'					=>	'form-control select',
														'label'					=>	false,
													));
												?>
											</div>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Nama Institusi</label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('institusi_name', array(
														'type'					=>	'text',
														'class'					=>	'form-control',
														'label'					=>	false,
													));
												?>
											</div>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Alamat Institusi</label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('institusi_alamat', array(
														'type'					=>	'textarea',
														'class'					=>	'form-control',
														'label'					=>	false,
													));
												?>
										</div>
							</div>
							<div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">Browse File</label>
 									<div class="col-md-6 col-xs-12">
 											<?php
 												echo $this->Form->input('file', array(
 													'type'					=> 'file',
 													'class'					=>	'fileinput btn-primary',
 													'label'					=>	false,
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
