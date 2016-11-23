<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)"><?php echo $ControllerName?></li>
	<li class="javascript:void(0)"><?php echo "Tambah $ControllerName"?></li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-pencil"></span> Tambah <?php echo $ModelName; ?></h2>
</div>
<!-- END PAGE TITLE -->

<!-- START FORM -->
<div class="page-content-wrap">
	<div class="row">
			<div class="col-md-12">
				<?php echo $this->Form->create($ModelName, array('url' => array("controller"=>$ControllerName,"action"=>"Add"),'class' => 'form-horizontal',"type"=>"file")); ?>
					<div class="panel panel-default">
						<div class="panel-heading">
								<h3 class="panel-title"><strong>Tambah <?php echo $ModelName; ?></strong></h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
                                        <label class="col-md-6 col-xs-12 control-label"><h5>Data Pribadi</h5></label>
                                    </div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Name <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('name', array(
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
								<label class="col-md-3 col-xs-12 control-label">Tempat Lahir <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('place_of_birth', array(
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
								<label class="col-md-3 col-xs-12 control-label">Tanggal Lahir <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
												<?php
													echo $this->Form->input('date_of_birth', array(
														'type'					=>	'text',
														'class'					=>	'form-control datepicker',
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
								<label class="col-md-3 col-xs-12 control-label">Matra/PNS <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('matra_id_list', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=> $matra_id_list,
														'empty'					=> "Pilih Matra",
													));
												?>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Pangkat <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('occupation_id_list', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=> $occupation_id_list,
														'empty'					=> "Pilih Pangkat",
													));
												?>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Corps <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('corp_id_list', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=> $corp_id_list,
														'empty'					=> "Pilih Corps",
													));
												?>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">NRP/NIP <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('name', array(
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
								<label class="col-md-3 col-xs-12 control-label">Kesatuan/Jabatan <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('unity', array(
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
								<label class="col-md-3 col-xs-12 control-label">Sumber Dikma/Diktuk & TMT Prajurit <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('source_dikma', array(
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
                                        <label class="col-md-6 col-xs-12 control-label"><h5>Pendidikan</h5></label>
                                    </div>
                            <div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Negara <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('countries_id_list', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=> $countries_id_list,
														'empty'					=> "Pilih Negara",
													));
												?>
										</div>
							</div>  
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Nama Pendidikan <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('study_program_id_list', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=> $study_program_id_list,
														'empty'					=> "Pilih Nama Pendidikan",
													));
												?>
										</div>
							</div>   
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Jenis Pendidikan <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('education_type_id_list', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=> $education_type_id_list,
														'empty'					=> "Pilih Jenis Pendidikan",
													));
												?>
										</div>
							</div> 
							<div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Berangkat <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
												<?php
													echo $this->Form->input('date_of_birth', array(
														'type'					=>	'text',
														'class'					=>	'form-control datepicker',
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
								<label class="col-md-3 col-xs-12 control-label">Kembali <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
												<?php
													echo $this->Form->input('date_of_birth', array(
														'type'					=>	'text',
														'class'					=>	'form-control datepicker',
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
								<label class="col-md-3 col-xs-12 control-label">Status Pendidikan <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
												<?php
													echo $this->Form->input('education_status', array(
														'class'					=>	'form-control select',
														'label'					=>	false,
														"required"			=>	"",
														'default'				=>	1,
														"autocomplete"	=>	"off",
														"maxlength"			=>	20,
														'options'				=> array("1"=>"Berjalan","2"=>"Selesai","3"=>"Tidak Selesai"),
														'empty'					=> false,

													));
												?>
										</div>
							</div>
							<div class="form-group">
                                        <label class="col-md-6 col-xs-12 control-label"><h5>Administrasi</h5></label>
                                    </div>
                            <div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Kepala Panglima TNI </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('commander_tni', array(
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
								<label class="col-md-3 col-xs-12 control-label">Sprin Angkatan </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('sprin_force', array(
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
								<label class="col-md-3 col-xs-12 control-label">Medical Record </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('medical_record', array(
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
								<label class="col-md-3 col-xs-12 control-label">Pasport </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('pasport', array(
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
								<label class="col-md-3 col-xs-12 control-label">Security Clearance </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('security_clearance', array(
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
								<label class="col-md-3 col-xs-12 control-label">Alamat Kantor <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('office_address', array(
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
								<label class="col-md-3 col-xs-12 control-label">TLP Kantor <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('tlp_office', array(
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
								<label class="col-md-3 col-xs-12 control-label">Alamat Rumah <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('home_address', array(
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
								<label class="col-md-3 col-xs-12 control-label">TLP Rumah <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('tlp_home', array(
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
								<label class="col-md-3 col-xs-12 control-label">Email <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('email', array(
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
                                        <label class="col-md-7 col-xs-12 control-label"><h5>Keluarga Yang Bisa Dihubungi di Indonesia</h5></label>
                                    </div>
                            <div class="form-group">
								<label class="col-md-3 col-xs-12 control-label">Hubungan <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('relationship', array(
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
								<label class="col-md-3 col-xs-12 control-label">Alamat Rumah <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('home_adress_a', array(
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
								<label class="col-md-3 col-xs-12 control-label">TLP/HP <span style="color:red;">(*)</span></label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('tlp_hp', array(
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
								<label class="col-md-3 col-xs-12 control-label">No. Rekening Bank di Indonesia </label>
									<div class="col-md-6 col-xs-12">
										<div class="input-group">
												<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													echo $this->Form->input('no_rek', array(
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
							<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"><span style="color:red;">*</span>Photo</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <div class="btn btn-primary btn-file"><i class="glyphicon glyphicon-folder-open"></i> &nbsp;Browse Photo<input type="file" multiple="" id="file-simple"></div>
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
			</div>
	</div>
</div>
<!-- END FORM -->
