<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)">Matra</li>
	<li class="javascript:void(0)">Tambah Matra</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-plus-circle"></span> Tambah <?php echo $ModelName; ?></h2>
</div>
<!-- END PAGE TITLE -->

<!-- START FORM -->
<div class="page-content-wrap">
	<div class="row">
			<div class="col-md-12">
				<?php echo $this->Form->create($ModelName, array('url' => array("controller"=>$ControllerName,"action"=>"Add"),'class' => 'form-horizontal',"type"=>"file")); ?>
					<div class="panel panel-default">
						<div class="panel-heading">
								<h3 class="panel-title"><strong>Tambah Matra </strong></h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Nama</label>
									<div class="col-md-6 col-xs-12">

												<?php
													echo $this->Form->input('name', array(
														'type'					=>	'text',
														'class'					=>	'form-control',
														'between'				=> 	'<div class="input-group"><span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>',
														'after'					=>	'</div>',
														'label'					=>	false,
														'placeholder'			=>  'Nama',
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
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
								<input type="submit" value="Add" class="btn btn-success active" />
								<input type="reset" value="Reset" class="btn btn-info active"/>
								<input type="button" value="Cancel" class="btn btn-danger active" onclick="location.href = '<?php echo $settings["cms_url"].$ControllerName?>/Index'"/>
							</div>
					</div>
				</div>
			</div>
	</div>
</div>
<!-- END FORM -->
