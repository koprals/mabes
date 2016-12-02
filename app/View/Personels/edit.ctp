<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)"><?php echo $ControllerName?></li>
	<li class="javascript:void(0)"><?php echo "Edit $ControllerName"?></li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-plus-circle"></span> Data <?php echo $ModelName; ?></h2>
</div>
<!-- END PAGE TITLE -->

<!-- START FORM -->
<div class="page-content-wrap">
	<div class="row">
			<div class="col-md-3 col-sm-4 col-xs-5">
				<?php echo $this->Form->create($ModelName, array('url' => array("controller"=>$ControllerName,"action"=>"Edit", $ID,$page,$viewpage),'class' => 'form-horizontal',"type"=>"file")); ?>
						<?php
							echo $this->Form->input('id', array(
								'type'			=>	'hidden',
								'readonly'		=>	'readonly'
							));
						?>
					<div class="panel panel-default">
						<div class="panel-body form-group-separated">
							<div class="form-group">
								<h3><span class="fa fa-user"></span>
									<?php 
										echo $this->Form->input('name', array(
											'type' 			=> 'text',
											'class'			=> '',
											'label'			=> false,
											'required'		=> "",
											'maxlength'		=> 30,

										));
									?>
								</h3>
                                    <p>SPERS TNI</p>
                                    <div class="text-center" id="user_image">
                                        <img src="<?php echo $this->webroot; ?>assets/images/users/user2.jpg" class="img-thumbnail"/>
                                    </div> 
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-5 control-label">#ID</label>
									<div class="col-md-9 col-xs-7">
												<?php
													echo $this->Form->input('id', array(
														'type'					=>	'text',
														'class'					=>	'form-control',
														'label'					=>	false,
														"required"			=>	"",
														"maxlength"			=>	20,
														'disabled' => 'disabled'
													));
												?>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-5 control-label">Login</label>
									<div class="col-md-9 col-xs-7">
												<?php
													echo $this->Form->input('id', array(
														'type'					=>	'text',
														'class'					=>	'form-control',
														'label'					=>	false,
														"required"			=>	"",
														"maxlength"			=>	20
													));
												?>
										</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-xs-5 control-label">Email</label>
									<div class="col-md-9 col-xs-7">
												<?php
													echo $this->Form->input('nama', array(
														'type'					=>	'text',
														'class'					=>	'form-control',
														'label'					=>	false,
														"required"			=>	"",
														"maxlength"			=>	20
													));
												?>
										</div>
							</div>
							<!--
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
							-->
							<!--
							<div class="panel-footer center-button">
								<input type="submit" value="Edit" class="btn btn-success active" />
								<input type="reset" value="Reset" class="btn btn-info active"/>
								<input type="button" value="Cancel" class="btn btn-danger active" onclick="location.href = '<?php //echo $settings["cms_url"].$ControllerName?>/Index'"/>
							</div>
						-->
					</div>
				</div>
			</div>
			  	<div class="col-md-6 col-sm-8 col-xs-7">
                        <?php echo $this->Form->create($ModelName, array('url' => array("controller"=>$ControllerName,"action"=>"Edit", $ID,$page,$viewpage),'class' => 'form-horizontal',"type"=>"file")); ?>
						<?php
							echo $this->Form->input('id', array(
								'type'			=>	'hidden',
								'readonly'		=>	'readonly'
							));
						?>    
                            <form action="#" class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3><span class="fa fa-pencil"></span> Profile</h3>
                                    <p>This information lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer faucibus, est quis molestie tincidunt, elit arcu faucibus erat.</p>
                                </div>
                                <div class="panel-body form-group-separated">
                                    <div class="form-group">
										<label class="col-md-3 col-xs-5 control-label">Login</label>
											<div class="col-md-9 col-xs-7">
													<?php
														echo $this->Form->input('name', array(
															'type'					=>	'text',
															'class'					=>	'form-control',
															'label'					=>	false,
															"required"			=>	"",
															"maxlength"			=>	20
														));
													?>
											</div>
									</div>
                                    <div class="form-group">
                                            <label class="col-md-3 control-label ">Matra/PNS</label>
                                            <div class="col-md-9">

                                                <div class="form-group form-material">
                                            <label class="radio-material">
                                                <input id="radio1" type="radio" name="radios" checked>
                                                <span class="outer"><span class="inner"></span></span> Matra
                                            </label>
                                            <label class="radio-material">
                                                <input id="radio2" type="radio" name="radios">
                                                <span class="outer"><span class="inner"></span></span> PNS
                                            </label>
                                        </div>
                                                <select class="form-control select">
                                                    <option>AD</option>
                                                    <option>AU</option>
                                                    <option>AL</option>
                                                    <option>PNS</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-group">
										<label class="col-md-3 col-xs-5 control-label">NIP/NRP</label>
											<div class="col-md-9 col-xs-7">
													<?php
														echo $this->Form->input('nrp_nip', array(
															'type'					=>	'text',
															'class'					=>	'form-control',
															'label'					=>	false,
															"required"			=>	"",
															"maxlength"			=>	20
														));
													?>
											</div>
									</div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Pangkat/Golongan</label>
                                        <div class="col-md-9 col-xs-7">
                                            <select class="form-control select">
                                                    <option>Serda</option>
                                                    <option>Sertu</option>
                                                    <option>Serka</option>
                                                    <option>Serma</option>
                                                    <option>Pelda</option>
                                                    <option>Peltu</option>
                                                    <option>Letda</option>
                                                    <option>Lettu</option>
                                                    <option>Kapten</option>
                                                    <option>Mayor</option>
                                                    <option>Letkol</option>
                                                    <option>Kolonel</option>
                                                    <option>Pati</option>
                                                    <option>PNS</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
										<label class="col-md-3 col-xs-5 control-label">Alamat Kantor</label>
											<div class="col-md-9 col-xs-7">
													<?php
														echo $this->Form->input('office_address', array(
															'type'					=>	'text',
															'class'					=>	'form-control',
															'label'					=>	false,
															"required"			=>	"",
															"maxlength"			=>	20
														));
													?>
											</div>
											<label class="col-md-3 col-xs-5 control-label">Telp Kantor</label>
											<div class="col-md-9 col-xs-7">
													<?php
														echo $this->Form->input('tlp_office', array(
															'type'					=>	'text',
															'class'					=>	'form-control',
															'label'					=>	false,
															"required"			=>	"",
															"maxlength"			=>	20
														));
													?>
											</div>
									</div>
                                    <div class="form-group">
										<label class="col-md-3 col-xs-5 control-label">Alamat Rumah</label>
											<div class="col-md-9 col-xs-7">
													<?php
														echo $this->Form->input('office_address', array(
															'type'					=>	'text',
															'class'					=>	'form-control',
															'label'					=>	false,
															"required"			=>	"",
															"maxlength"			=>	20
														));
													?>
											</div>
											<label class="col-md-3 col-xs-5 control-label">Telp / HP</label>
											<div class="col-md-9 col-xs-7">
													<?php
														echo $this->Form->input('tlp_office', array(
															'type'					=>	'text',
															'class'					=>	'form-control',
															'label'					=>	false,
															"required"			=>	"",
															"maxlength"			=>	20
														));
													?>
											</div>
											<label class="col-md-3 col-xs-5 control-label">Email</label>
											<div class="col-md-9 col-xs-7">
													<?php
														echo $this->Form->input('tlp_office', array(
															'type'					=>	'text',
															'class'					=>	'form-control',
															'label'					=>	false,
															"required"			=>	"",
															"maxlength"			=>	20
														));
													?>
											</div>
									</div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Alamat Rumah</label>
                                        <div class="col-md-9 col-xs-7">
                                             <textarea class="form-control" rows="2">Perumahan Cilangkap Jln. XYZ no.90</textarea>
                                        </div>
                                          <label class="col-md-3 col-xs-5 control-label">Telp / HP</label>
                                        <div class="col-md-9 col-xs-7">
                                              <input type="text" value="0812345678" class="form-control"/>
                                        </div>
                                        <label class="col-md-3 col-xs-5 control-label">Email</label>
                                        <div class="col-md-9 col-xs-7">
                                              <input type="text" value="admirall12@gmail.com" class="form-control"/>
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Sprin Angkatan</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="Sprin II" class="form-control"/>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Medical Record</label>
                                        <div class="col-md-9 col-xs-7">
                                            <textarea class="form-control" rows="2">Sehat sehat saja...</textarea>
                                            <p class="panel-body"><span style="color:red;">*</span> Gunakan (-) untuk melewati</p>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Security Clearance</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="Clear" class="form-control"/>
                                            <p class="panel-body"><span style="color:red;">*</span> Gunakan (-) untuk melewati</p>
                                        </div>
                                    </div>
                                                                   
                                    <div class="form-group">
                                        <label class="col-md-9 col-xs-5 control-label">Keluarga yang bisa dihubungi di Indonesia </label>                    
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Hubungan</label>
                                        <div class="col-md-9 col-xs-7">
                                             <input type="text" value="Istri" class="form-control" disabled/>
                                        </div>
                                          <label class="col-md-3 col-xs-5 control-label">Alamat</label>
                                        <div class="col-md-9 col-xs-7">
                                             <textarea class="form-control" rows="2">Jln XyZ no 30d</textarea>
                                        </div>
                                        <label class="col-md-3 col-xs-5 control-label">Telp / HP</label>
                                        <div class="col-md-9 col-xs-7">
                                              <input type="text" value="08123456789" class="form-control"/>
                                        </div>   
                                    </div>
                                     
                                    <div class="form-group">
                                        <div class="col-md-12 col-xs-5">
                                            <button class="btn btn-primary btn-rounded pull-right">Save</button>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            </form>
            </div>
            <div class="col-md-3">
                            <div class="panel panel-default form-horizontal">
                                <div class="panel-body">
                                    <h3><span class="fa fa-info-circle"></span> Quick Info</h3>
                                    <p>Some quick info about this user</p>
                                </div>
                                <div class="panel-body form-group-separated"> 
                                <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">Negara</label>
                                        <div class="col-md-7 col-xs-7 line-height-30">USA</div>
                                    </div>                                   
                                    <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">Keberangkatan</label>
                                        <div class="col-md-7 col-xs-7 line-height-30">27.11.2015</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">Kepulangan</label>
                                        <div class="col-md-7 col-xs-7 line-height-30">10.10.2016</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">Nama Sekolah</label>
                                        <div class="col-md-7 col-xs-7 line-height-30">Army US War College</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">Pendidikan</label>
                                        <div class="col-md-7 col-xs-7">administrators, managers, team-leaders, developers</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">Nama Program</label>
                                        <div class="col-md-7 col-xs-7 line-height-30">14.02.1989</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">No. Paspor</label>
                                        <div class="col-md-7 col-xs-7 line-height-30">14.02.1989</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">Rek. Mandiri</label>
                                        <div class="col-md-7 col-xs-7 line-height-30">14.02.1989</div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3><span class="fa fa-cog"></span> Settings</h3>
                                    <p>Sample of settings block</p>
                                </div>
                                <div class="panel-body form-horizontal form-group-separated">                                    
                                    <div class="form-group">
                                        <label class="col-md-6 col-xs-6 control-label">Notifications</label>
                                        <div class="col-md-6 col-xs-6">
                                            <label class="switch">
                                                <input type="checkbox" checked value="1"/>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="col-md-6 col-xs-6 control-label">Mailing</label>
                                        <div class="col-md-6 col-xs-6">
                                            <label class="switch">
                                                <input type="checkbox" checked value="1"/>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-6 col-xs-6 control-label">Priority</label>
                                        <div class="col-md-6 col-xs-6">
                                            <label class="switch">
                                                <input type="checkbox" value="0"/>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
	</div>
</div>
<!-- END FORM -->
