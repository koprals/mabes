<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)"><?php echo $ControllerName?></li>
	<li class="javascript:void(0)"><?php echo "Edit $ControllerName"?></li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-plus-circle"></span> Edit <?php echo $ModelName; ?></h2>
</div>
<!-- END PAGE TITLE -->

<!-- START FORM -->
<div class="page-content-wrap">
	<div class="row">
			<div class="col-md-12">
				<?php echo $this->Form->create($ModelName, array('url' => array("controller"=>$ControllerName,"action"=>"Edit", $ID,$page,$viewpage),'class' => 'form-horizontal',"type"=>"file")); ?>
						<?php
							echo $this->Form->input('id_personnel', array(
								'type'			=>	'hidden',
								'readonly'		=>	'readonly'
							));
						?>
					<div class="panel panel-default">
						<div class="panel-heading">
								<h3 class="panel-title"><strong>Edit</strong> Personel</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
                				<label class="col-md-6 col-xs-12 control-label"><h5>Data Pribadi</h5></label>
              				</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Nama Lengkap <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon " style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('personnel_name', array(
														'type'					=>	'text',
														'class'					=>	'form-control',
														'label'					=>	false,
														"required"				=>	"",
														"autocomplete"			=>	"off",
													));
												?>
										</div>
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Tempat Lahir <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('place_of_birth', array(
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
								<label class="col-md-3 col-xs-12 control-label">Tanggal Lahir <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-calendar"></span></span>
												<?php
													echo $this->Form->input('date_of_birth', array(
														'type'					=>	'text',
														'class'					=>	'form-control datepicker',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
													));
												?>
										</div>
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Matra/PNS <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('personel_matra', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														'options'				=>  $list_matra,
														'empty'					=> "Pilih Matra",
													));
												?>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Pangkat <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon " style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('personel_occupation', array(
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
								<label class="col-md-3 col-xs-12 control-label">Korps <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('personel_corps', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														'options'				=> 	$list_corp,
														'empty'					=> "Pilih Corps",
													));
												?>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">NRP/NIP <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('personel_nrp', array(
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
								<label class="col-md-3 col-xs-12 control-label">Kesatuan/Jabatan <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('personel_unity', array(
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
								<label class="col-md-3 col-xs-12 control-label">Sumber Dikma/Diktuk & TMT Prajurit</label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('personel_dikma', array(
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
                  <label class="col-md-6 col-xs-12 control-label"><h5>Administrasi</h5></label>
              </div>
              <div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Keputusan Panglima TNI </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('commander_name', array(
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
								<label class="col-md-3 col-xs-12 control-label">Sprin Angkatan </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('sprin_force', array(
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
								<label class="col-md-3 col-xs-12 control-label">Medical Record </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('medical_record', array(
														'type'					=>	'text',
														'class'					=>	'form-control',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
													));
												?>
										</div>
										<?php
											echo $this->Form->input('image2', array(
												'type'					=>	'file',
												'class'					=>	'fileinput btn-primary active help-block',
												'label'					=>	false,
											));
										?>
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Passport </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('passport', array(
														'type'					=>	'text',
														'class'					=>	'form-control',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
													));
												?>
										</div>
										<?php
											echo $this->Form->input('image3', array(
												'type'					=>	'file',
												'class'					=>	'fileinput btn-primary active help-block',
												'label'					=>	false,
											));
										?>
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Security Clearance </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('security_clearance', array(
														'type'					=>	'text',
														'class'					=>	'form-control',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
													));
												?>
										</div>
										<?php
											echo $this->Form->input('image4', array(
												'type'					=>	'file',
												'class'					=>	'fileinput btn-primary active help-block',
												'label'					=>	false,
											));
										?>
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Alamat Kantor <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('office_address', array(
														'type'					=>	'textarea',
														'class'					=>	'form-control',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
													));
												?>
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Telepon Kantor <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('office_phone_number', array(
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
								<label class="col-md-3 col-xs-12 control-label">Alamat Rumah <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('home_address', array(
														'type'					=>	'textarea',
														'class'					=>	'form-control',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
													));
												?>
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Telepon Rumah/HP <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('home_phone_number', array(
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
								<label class="col-md-3 col-xs-12 control-label">Email <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('personel_email', array(
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
                  	<label class="col-md-7 col-xs-12 control-label"><h5>Keluarga Yang Bisa Dihubungi di Indonesia</h5></label>
              </div>
              <div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Hubungan <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('family_relationship', array(
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
								<label class="col-md-3 col-xs-12 control-label">Alamat Rumah <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('family_address', array(
														'type'					=>	'textarea',
														'class'					=>	'form-control',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
													));
												?>
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Telepon Rumah <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('family_phone_number', array(
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
								<label class="col-md-3 col-xs-12 control-label">Nomor Rekening Bank di Indonesia </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon" style="padding-bottom:6px;"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('bank_account_number', array(
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
								<label class="col-md-3 col-xs-12 control-label">Foto Personel <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('image1', array(
														'type'					=>	'file',
														'class'					=>	'fileinput btn-primary',
														'label'					=>	false,
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
