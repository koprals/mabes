<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)">Pengingat Laporan</li>
	<li class="javascript:void(0)"><?php echo "Tambah Pengingat Laporan"?></li>
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
								<h3 class="panel-title"><strong><?php echo $personnels['Personnel']['personnel_name'];?></strong></h3>
						</div>
						<div class="panel-body">
							<?php foreach ($listReminder as $listReminder): ?>
								<div class="form-group">
										<label class="col-md-3 control-label">Tanggal</label>
										<div class="col-md-5">
												<h4 class="form-control-static"><strong><?php echo $this->Time->format($listReminder['Reminder']['date_reminder'], '%e %B, %Y') ?></strong></h4>
										</div>
								</div>
							<?php endforeach; ?>
							<?php
								echo $this->Form->input('personnel_id', array(
									'type'					=>	'hidden',
									'class'					=>	'form-control',
									'default'				=>	$personnel_id
								));
							?>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Tanggal Pengigat Baru</label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-calendar"></span></span>
												<?php
													echo $this->Form->input('date_reminder', array(
														'type'					=>	'text',
														'class'					=>	'form-control datepicker',
														'label'					=>	false,
													));
												?>
										</div>
									</div>
							</div>
							<div class="panel-footer center-button">
								<input type="submit" value="Add" class="btn btn-success active" />
								<input type="reset" value="Reset" class="btn btn-info active"/>
								<input type="button" value="Cancel" class="btn btn-danger active" onclick="location.href = '<?php echo $settings["cms_url"].$ControllerName?>/Index'"/>
							</div>
					</div>
				</div>
				<?php echo $this->Form->end; ?>
			</div>
	</div>
</div>
<!-- <script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/bootstrap/bootstrap-select.js"></script> -->
<!-- END FORM -->
