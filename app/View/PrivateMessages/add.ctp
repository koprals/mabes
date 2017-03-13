<!-- START BREADCRUMB -->
<script type="text/javascript">
$('.selectpicker').selectpicker({
  style: 'btn-info',
  size: 4
});

</script>
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)"><?php echo $ControllerName?></li>
	<li class="javascript:void(0)"><?php echo "Tambah $ControllerName"?></li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-pencil"></span> Tulis Pesan Baru</h2>
</div>
<!-- END PAGE TITLE -->

<!-- START FORM -->
<div class="page-content-wrap">
	<div class="row">
			<div class="col-md-12">
				<?php echo $this->Form->create($ModelName, array('url' => array("controller"=>$ControllerName,"action"=>"Add" ),'class' => 'form-horizontal',"type"=>"file", 'role' => 'form')); ?>
					<div class="panel panel-primary">
						<div class="block">
								<div class="form-group">
									<label class="col-md-2 control-label">To: Personel</label>
										<div class="col-md-7">
											<?php
													echo $this->Form->input('id_personnel', array(
														'label'					=>	false,
														'class'					=>	'form-control select',
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=>  $list_personnel,
														'empty'					=>	"Pilih Personel",
													));
													?>
										</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Subject : </label>
										<div class="col-md-7">
                      <?php
                          echo $this->Form->input('judul_pesan', array(
                            'label'					=>	false,
                            'class'					=>	'form-control select',
                            "required"			=>	"",
                            "autocomplete"	=>	"off",
                          ));
                          ?>
										</div>
								</div>
                <?php echo $this->Form->create('DetailMessage'); ?>
								<div class="form-group">
										<div class="col-md-12">
												<?php
													echo $this->Form->input('pesan', array(
														'type'					=>	'textarea',
														'class'					=>	'summernote_email',
														'label'					=>	false,
														'placeholder'			=> '',
														"required"			=>	"",
														"autocomplete"	=>	"off",
													));
												?>
										</div>
								</div>
                <?php
                  echo $this->Form->input('is_attach', array(
                    'type'					=>	'hidden',
                    'default'       =>  0
                  ));
                ?>
                <?php
                  echo $this->Form->input('read_status', array(
                    'type'					=>	'hidden',
                    'default'       =>  0
                  ));
                ?>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <!-- <button class="btn btn-primary btn-file"> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;Browse … <input type="file" multiple="" id="file-simple"></button> -->
                            <input type="submit" value="Send Message" class="btn btn-success active" />
                        </div>
                    </div>
                </div>
							</div>
						</form>
					</div>
				</div>
				<?php echo $this->Form->end; ?>
			</div>
	</div>
</div>

<!-- <script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/bootstrap/bootstrap-select.js"></script> -->
<!-- END FORM -->
