<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)"><?php echo $ControllerName?></li>
	<li class="javascript:void(0)"><?php echo "Edit $ControllerName"?></li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-plus-circle"></span> Edit News</h2>
</div>
<!-- END PAGE TITLE -->

<!-- START FORM -->
<div class="page-content-wrap">
	<div class="row">
			<div class="col-md-12">
				<?php echo $this->Form->create($ModelName, array('url' => array("controller"=>$ControllerName,"action"=>"Edit" ),'class' => 'form-horizontal',"type"=>"file")); ?>
					<div class="panel panel-default">
						<div class="panel-heading">
								<h3 class="panel-title"><strong>Edit News</strong></h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label class="col-md-2 col-xs-12 control-label">Judul Berita</label>
									<div class="col-md-8 col-xs-12">
										
												
												<?php echo $this->Form->input('id', array('type'	=>	'hidden')); ?>
												<?php
													echo $this->Form->input('title', array(
														'type'					=>	'text',
														'class'					=>	'form-control',
														'between'				=> 	'<div class="input-group"><span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>',
														'after'					=>	'</div>',
														'label'					=>	false,
														'placeholder'			=> 'Judul Berita',
														"required"			=>	"",
														"autocomplete"	=>	"off",
													));
												?>
										
									</div>
							</div>
							<div class="form-group">
									<label class="col-md-2 col-xs-12 control-label">Isi Berita</label>
										<div class="col-md-8 col-xs-12">
												<?php
													echo $this->Form->input('description', array(
														'type'					=>	'textarea',
														'class'					=>	'summernote',
														'label'					=>	false,
														'placeholder'			=> '',
														"required"			=>	"",
														"autocomplete"	=>	"off",
													));
												?>
										</div>
								</div>
							<div class="form-group">
								<label class="col-md-2 col-xs-12 control-label">Negara</label>
									<div class="col-md-8 col-xs-12">
												<?php
												echo $this->Form->input('country_id', array(
													'label'					=>	false,
													'class'					=>	'form-control select',
													"required"			=>	"",
													"autocomplete"	=>	"off",
													"maxlength"			=>	20,
													'options'				=>  $list_country,
													'empty'					=>	"Pilih Negara",
												));
												?>
										</div>
							</div>
							<div class="form-group">
									<label class="col-md-2 col-xs-12 control-label"></label>
										<div class="col-md-8 col-xs-12">
												<?php
													echo $this->Form->input('image', array(
														'type'					=>	'file',
														'class'					=>	'fileinput btn-primary active help-block ',
														'label'					=>	false,
													));
												?>
										</div>
								</div>
							<div class="panel-footer center-button">
								<input type="submit" value="Publish" class="btn btn-success active" />
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
