<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>css/cropper/cropper.min.css" />
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
    <div class="col-md-4 col-sm-4 col-xs-5">
      <form action="#" class="form-horizontal">
        <div class="panel panel-default">
          <div class="panel-body">
            <h3><?php echo $detail[$ModelName]['personnel_name']?></h3>
              <p>SPERS TNI</p>
            <div class="text-center" id="user_image">
              <img src="<?php echo $detail["ImageProfil"]["host"].$detail["ImageProfil"]["url"]?>?time=<?php echo time()?>" class="img-thumbnail"/>
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

        <div class="panel panel-default tabs">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab"><h3>Quick Info</h3></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane panel-body active" id="tab1">
              <div class="tab-pane panel-body" id="tab1">
                <div class="form-group">
                  <label>No. Passport</label>
                  <h4><?php echo $this->Text->autoParagraph($detail[$ModelName]['passport'])?></h4>
                </div>
                <div class="form-group">
                  <label>Rek. Mandiri</label>
                  <h4><?php echo $this->Text->autoParagraph($detail[$ModelName]['bank_account_number'])?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div href="#" class="tile tile-default">
          <p><br>
            <h4 style="font-color:#ffffff">
              <?php
                  echo $this->Time->nice($detail[$ModelName]['modified']);
              ?>
            </h4>
          </p>
          <h3 style="font-color:#ffffff">Latest Update</h3>
          <div class="informer informer-warning"></div>
      </div>
      <div class="panel panel-default">
        <a target="_blank" href="<?php echo $settings["cms_url"].$ControllerName?>/Pdf/<?php echo $ID ?>.pdf"  class="btn btn-danger btn-block active" title="Export To PDF">
          <p><h5 style="color:#FFFFFF">EXPORT TO PDF</h5></p>
        </a>
      </div>
      <div class="panel panel-default">
        <a href="<?php echo $detail["ImageMedical"]["host"].$detail["ImageMedical"]["url"]?>"  download="MedicalRecord" class="btn btn-primary btn-block active">
            <p><h5 style="color:#FFFFFF">Download Medical Record File</h5></p>
        </a>
      </div>
      <div class="panel panel-default">
        <a href="<?php echo $detail["ImagePassport"]["host"].$detail["ImagePassport"]["url"]?>"  download="Passport" class="btn btn-primary btn-block active">
            <p><h5 style="color:#FFFFFF">Download Passport File</h5></p>
        </a>
      </div>
      <div class="panel panel-default">
        <a href="<?php echo $detail["ImageSecurity"]["host"].$detail["ImageSecurity"]["url"]?>"  download="SecurityClearance" class="btn btn-primary btn-block active">
            <p><h5 style="color:#FFFFFF">Download Security Celarance File</h5></p>
        </a>
      </div>
    </div>
    <div class="col-md-8 col-sm-8 col-xs-7">
          <form action="#" class="form-horizontal">
          <div class="panel panel-default">
              <div class="panel-body">
                  <h3>Biodata</h3>
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
  </div>
  <!-- START RESPONSIVE TABLES -->
  <div class="row">
      <div class="col-md-12">
          <div class="panel panel-default">

              <div class="panel-heading">
                  <h3 class="panel-title">Riwayat Pendidkan</h3>
              </div>

              <div class="panel-body panel-body-table">

                  <div class="table-responsive">
                      <table class="table table-bordered table-striped table-actions">
                          <thead>
                              <tr>
                                  <th width="50">NO</th>
                                  <th>Nama Pendidikan</th>
                                  <th width="100">Negara</th>
                                  <th width="100">Keberangkatan</th>
                                  <th width="100">Kedatangan</th>
                                  <th width="100">Report Kedatangan</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php $count = 0;?>
        										<?php foreach($historicalEdus as $historicalEdus): ?>
        											<?php $count++;?>
        											<?php $no		=	$count;?>
        											<tr>
        												<td class="text-center"><?php echo $no ?></td>
        												<td><strong><?php echo $historicalEdus['AvailableCourse']['ProgramStudy']['edu_name'] ?></strong></td>
        												<td><?php echo $historicalEdus['AvailableCourse']['Country']['country_name'] ?></td>
                                <td><?php echo $historicalEdus['Process']['depart'] ?></td>
                                <td><?php echo $historicalEdus['Process']['arrive'] ?></td>

                                <td class="text-center">
                                      <a href="<?php echo $historicalEdus["Process"]["report_file_url"]?>"  download="ReportKedatangan" class="btn btn-primary btn-block active">
                                          <p><h5 style="color:#FFFFFF">Download Laporan Kedatangan</h5></p>
                                      </a>
                                </td>
        											</tr>
        										<?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>

              </div>
          </div>

      </div>
  </div>
  <!-- END RESPONSIVE TABLES -->
</div>
<!-- END FORM -->
