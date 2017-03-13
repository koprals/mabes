<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="javascript:void(0)"><?php echo $ControllerName?></li>
	<li class="javascript:void(0)"><?php echo "Edit $ControllerName"?></li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
		<h2><a href="#"><span class="fa fa-arrow-circle-o-left"></a></span> <?php echo $detail['Personnel']['personnel_name']?>.</h2>
</div>
<!-- END PAGE TITLE -->

<div class="page-content-wrap">
		<div class="row">
				<div class="col-md-12">
						<div class="panel panel-primary">
						<!-- START RESPONSIVE TABLES -->
								<div class="row">
										<div class="col-md-0">
											<!-- START MANY COLUMNS  -->
												<div class="panel panel-heading">
													 <div class="pull-left">
														<h3 class="page-title"></span><strong>Subject :</strong> <?php echo $detail[$ModelName]['judul_pesan']?> </h3>
													</div>
													<div class="pull-right">
															<button type="submit" class="btn btn-success"> <i class="fa fa-envelope"></i><a href="pages-compose.html" style="color:#ffffff;">Compose New Message</a></button>
													</div>
												</div>
												<?php foreach($detailMessages as $dm): ?>
													<div class="col-md-0">
														<div class="messages messages-img">
															<div class="item">
																<div class="image">
																	<img src="<?php echo $this->webroot; ?>assets/images/users/user2.jpg" alt="John Doe">
																</div>
																<div class="text">
																	<div class="heading">
																		<a href="#"><?php echo $dm['Personnel']['personnel_name']?></a>
																		<span class="date"><?php echo $this->Time->niceShort($dm[$ModelName]['date_create']);?></span>
																	</div>
																		<?php echo $dm['DetailMessage']['pesan']?>
																	</div>
																</div>
															</div>
													</div>
											<?php endforeach; ?>

											<?php echo $this->Form->create("DetailMessage"); ?>
												<div class="block">
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
													<?php
														echo $this->Form->input('id_pesan', array(
															'type'					=>	'hidden',
															'label'					=>	false,
															'default'				=>	$ID
														));
													?>
													<?php
														echo $this->Form->input('id_personel', array(
															'type'					=>	'hidden',
															'label'					=>	false,
															'default'				=>	$detail['Personnel']['id_personnel']
														));
													?>
													<?php
														echo $this->Form->input('is_attach', array(
															'type'					=>	'hidden',
															'label'					=>	false,
															'default'				=>	0
														));
													?>
													<?php
														echo $this->Form->input('is_read', array(
															'type'					=>	'hidden',
															'label'					=>	false,
															'default'				=>	0
														));
													?>
												</div>
												<p class="pull-right">
												<!-- <button class="btn btn-primary btn-file"> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;Browse … <input type="file" multiple="" id="file-simple"></button> -->
												<input type="submit" value="Send Message" class="btn btn-success active" />
												</p>
										<!-- END MANY COLUMNS  -->
										</div>
								</div>
						</div>
						<!-- END RESPONSIVE TABLES -->
				</div>
		</div>
</div>
<!-- PAGE CONTENT WRAPPER -->
