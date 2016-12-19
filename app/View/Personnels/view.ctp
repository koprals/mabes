<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)"><?php echo $ControllerName?></li>
	<li class="javascript:void(0)"><?php echo "Data $ControllerName"?></li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-user"></span> Data Personel</h2>
</div>
<!-- END PAGE TITLE -->

<!-- START FORM -->
<div class="page-content-wrap">
	<div class="row">                        
                        <div class="col-md-3 col-sm-4 col-xs-5">
                            
                            <form action="#" class="form-horizontal">
                            <div class="panel panel-default">                                
                                <div class="panel-body">
                                    <h3><span class="fa fa-user"></span> <?php echo $detail[$ModelName]['personnel_name']?></h3>
                                    <p>SPERS TNI</p>
                                    <div class="text-center" id="user_image">
                                        <img src="<?php echo $this->webroot; ?>assets/images/users/user2.jpg" class="img-thumbnail"/>
                                    </div> 
                                </div>
                                <div class="panel-body form-group-separated">
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Email</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="<?php echo $detail[$ModelName]['personel_email']?>" class="form-control" disabled/>
                                        </div>
                                    </div>
               
                                </div>
                            </div>
							<!-- Di Tutup Dulu
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Send Message</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane panel-body active" id="tab1">
                                        <div class="tab-pane panel-body" id="tab1">                                        
                                            <p>Feel free to contact us for any issues you might have with our products.</p>
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="email" class="form-control" placeholder="Message subject">
                                            </div>                                
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea class="form-control" placeholder="Your message" rows="3" ></textarea>
                                            </div>                                
                                        </div>                                                                                     
                                    </div>  
                                </div>
                                
                            </div> -->
                            </form>
                            
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-7">
                            
                            <form action="#" class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3><span class="fa fa-pencil"></span> Profile</h3>
                                </div>
                                <div class="panel-body form-group-separated">
                                
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Nama</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="<?php echo $detail[$ModelName]['personnel_name']?>" class="form-control" disabled/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Matra/PNS</label>
                                        <div class="col-md-9 col-xs-7">
                                            <select class="form-control select">
                                                    <option><?php echo $detail[$ModelName]['SMatra']?></option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">NIP/NRP</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="<?php echo $detail[$ModelName]['personel_nrp']?>" class="form-control" disabled/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Pangkat/Golongan</label>
                                        <div class="col-md-9 col-xs-7">
                                            <select class="form-control select">
                                                    <option><?php echo $detail[$ModelName]['personel_occupation']?></option>
                                                </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Alamat Kantor</label>
                                        <div class="col-md-9 col-xs-7">
                                            <textarea class="form-control" rows="2" disabled><?php echo $detail[$ModelName]['office_address']?></textarea>
                                        </div>
                                          <label class="col-md-3 col-xs-5 control-label">Telp Kantor</label>
                                        <div class="col-md-9 col-xs-7">
                                              <input type="text" value="<?php echo $detail[$ModelName]['office_phone_number']?>" class="form-control" disabled/>
                                        </div>
                                        
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Alamat Rumah</label>
                                        <div class="col-md-9 col-xs-7">
                                             <textarea class="form-control" rows="2" disabled><?php echo $detail[$ModelName]['home_address']?></textarea>
                                        </div>
                                          <label class="col-md-3 col-xs-5 control-label">Telp / HP</label>
                                        <div class="col-md-9 col-xs-7">
                                              <input type="text" value="<?php echo $detail[$ModelName]['home_phone_number']?>" class="form-control" disabled/>
                                        </div>
                                        <label class="col-md-3 col-xs-5 control-label">Email</label>
                                        <div class="col-md-9 col-xs-7">
                                              <input type="text" value="<?php echo $detail[$ModelName]['personel_email']?>" class="form-control" disabled/>
                                        </div>   
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Sprin Angkatan</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="<?php echo $detail[$ModelName]['sprin_force']?>" class="form-control" disabled/>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Medical Record</label>
                                        <div class="col-md-9 col-xs-7">
                                            <textarea class="form-control" rows="2" disabled><?php echo $detail[$ModelName]['medical_record']?></textarea>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Security Clearance</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="<?php echo $detail[$ModelName]['security_clearance']?>" class="form-control" disabled/>
                                        </div>
                                    </div>
                                                                   
                                    <div class="form-group">
                                        <label class="col-md-9 col-xs-5 control-label">Keluarga yang bisa dihubungi di Indonesia </label>                    
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Hubungan</label>
                                        <div class="col-md-9 col-xs-7">
                                             <input type="text" value="<?php echo $detail[$ModelName]['family_relationship']?>" class="form-control" disabled/>
                                        </div>
                                          <label class="col-md-3 col-xs-5 control-label">Alamat</label>
                                        <div class="col-md-9 col-xs-7">
                                             <textarea class="form-control" rows="2" disabled><?php echo $detail[$ModelName]['family_address']?></textarea>
                                        </div>
                                        <label class="col-md-3 col-xs-5 control-label">Telp / HP</label>
                                        <div class="col-md-9 col-xs-7">
                                              <input type="text" value="<?php echo $detail[$ModelName]['family_phone_number']?>" class="form-control" disabled/>
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
                                    <p>Some quick info about this personel</p>
                                </div>
                                <div class="panel-body form-group-separated">                                  
                                    <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">Keberangkatan</label>
                                        <div class="col-md-7 col-xs-7 line-height-30"><?php echo $detail['Process']['depart'] ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">Kepulangan</label>
                                        <div class="col-md-7 col-xs-7 line-height-30"><?php echo $detail[$ModelName]['arrive']?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">No. Paspor</label>
                                        <div class="col-md-7 col-xs-7 line-height-30"><?php echo $detail[$ModelName]['passport']?></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 col-xs-5 control-label">Rek. Mandiri</label>
                                        <div class="col-md-7 col-xs-7 line-height-30"><?php echo $detail[$ModelName]['bank_account_number']?></div>
                                    </div>
                                </div>
                                
                            </div>
                            <!--
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
                            -->
                        </div>
                        
                    </div>
</div>
<!-- END FORM -->
