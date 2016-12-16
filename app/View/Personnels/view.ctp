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
			<div class="col-md-12">
				<?php echo $this->Form->create($ModelName, array('url' => array("controller"=>$ControllerName,"action"=>"View"),'class' => 'form-horizontal',"type"=>"file")); ?>
						<?php
							echo $this->Form->input('id', array(
								'type'			=>	'hidden',
								'readonly'		=>	'readonly'
							));
						?>
					<div class="col-md-3 col-sm-4 col-xs-5">
						<?php $count = 0;?>
						<?php foreach($data as $data): ?>
						<?php $count++;?>	
							<?php $count++;?>
							<?php $no		=	(($page-1)*$viewpage) + $count;?>

						<div class="panel panel-default">
							<div class="panel-body">
								<h3><span class="fa fa-user"></span> Topan Agung</h3>
                                    <p>SPERS TNI</p>
                                    <div class="text-center" id="user_image">
                                        <img src="<?php echo $this->webroot; ?>assets/images/users/user2.jpg" class="img-thumbnail"/>
                                    </div>
							</div>
							<div class="panel-body form-group-separated">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">#ID</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="AD1301" class="form-control" disabled/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">E-mail</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" value="addmirall@gmail.com" class="form-control"/>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
						</div>
						<?php endforeach; ?>
					</div>
			</div>
	</div>
</div>
<!-- END FORM -->
