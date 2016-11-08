<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Data Form Studi</a></li>
        <li class="active">Jenis Pendidikan</li>
    </ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> List Jenis Pendidikan</h2>
                </div>
<!-- END PAGE TITLE -->
<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading"> 
                                    <h2 class="panel-title pull-right"><strong>Tambah Jenis Pendidikan</strong></h2>.
                                    <button class="btn btn-danger btn-condensed pull-right"><i class="fa fa-plus"></i></button>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="50">No</th>
                                                    <th>jenis Pendidikan</th>
                                                    <th width="120">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                <tr id="trow_1">
                                                    <td class="text-center">1</td>
                                                    <td><strong>Dikbangum</strong></td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                    </td>
                                                </tr>
                                                <tr id="trow_2">
                                                    <td class="text-center">2</td>
                                                    <td><strong>Dikbangspes</strong></td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                                    </td>
                                                </tr>
                                                <tr id="trow_3">
                                                    <td class="text-center">3</td>
                                                    <td><strong>DikIptek</strong></td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_3');"><span class="fa fa-times"></span></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->

                        </div>
                    </div>

                </div>
<!-- PAGE CONTENT WRAPPER -->
<div class="widget">
	<div class="title">
		<img src="<?php echo $this->webroot ?>img/icons/dark/frames.png" alt="" class="titleIcon">
		<h6>
			<?php echo $ControllerName?> - Page <?php echo $this->Paginator->counter(); ?>
		</h6>
	</div>
	<div class="title">
		<div class="itemsPerPage">
			<div id="DataTables_Table_0_length" class="dataTables_length">
				<label>
					<span>Show entries:</span>
					<?PHP echo $this->Form->select("view",array(1=>1,5=>5,10=>10,20=>20,50=>50,100=>100,200=>200,1000=>1000),array("onchange"=>"onClickPage('".$settings["cms_url"].$ControllerName."/ListItem/limit:'+this.value+'".$ordered."','#contents_area')","empty"=>false,"default"=>$viewpage))?>
				</label>
			</div>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable">
		<thead>
			<tr>
				<td style="width:5%;">
					No
				</td>
				<td style="width:13%;">
					Image
				</td>
				<td style="width:5%;">
					<?php echo $this->Paginator->sort("$ModelName.id",'ID');?>
				</td>
				<td style="width:20%;">
					<?php echo $this->Paginator->sort("$ModelName.fullname",'Name');?>
				</td>
				<td style="width:22%;">
					<?php echo $this->Paginator->sort("MyAro.alias", 'Admin Group');?>
				</td>
				<td style="width:10%;">
					<?php echo $this->Paginator->sort("$ModelName.SStatus",'Status');?>
				</td>

				<td style="width:10%;">
					<?php echo $this->Paginator->sort("$ModelName.modified",'Modified');?>
				</td>
				<?php
				if(
					$access[$aco_id]["_update"] == 1 or
					$access[$aco_id]["_delete"] == 1
				):
				?>
				<td style="width:15%;">
					Action
				</td>
				<?php endif;?>
			</tr>
		</thead>
		<tbody>
			<?php $count = 0;?>
			<?php foreach($data as $data): ?>
				<?php $count++;?>
				<?php $no		=	(($page-1)*$viewpage) + $count;?>
				<?php $class	=	($data[$ModelName]['status'] == "0") ? "style='background-color:#FFDDDE'" : "";?>
				<tr <?php echo $class?>>
					<td>
						<?php echo $no ?>
					</td>
					<td>
						<a rel="lightbox" title="<?php echo $data[$ModelName]['fullname'] ?>" href="<?php echo $data["Image"]["host"].$data["Image"]["url"]?>?time=<?php echo time()?>" style="border:0px;">
						<img src="<?php echo $data["Image"]["host"].$data["Image"]["url"]?>?time=<?php echo time()?>" width="60"/>
						</a>
					</td>

					<td><?php echo $data[$ModelName]['id'] ?></td>
					<td><?php echo $data[$ModelName]['fullname'] ?></td>
					<td><?php echo $data["MyAro"]['alias_name'] ?></td>
					<td><?php echo $data[$ModelName]['SStatus'] ?></td>
					<td style="text-align:center;"><?php echo date("d M Y",strtotime($data[$ModelName]['modified'])) ?></td>
					<?php
					if(
						$access[$aco_id]["_update"] == 1 or
						$access[$aco_id]["_delete"] == 1
					):
					?>
					<td style="text-align:center;">
						<?php if($super_admin_id == $profile["Admin"]["id"] or $data[$ModelName]['id'] != $super_admin_id):?>
							<?php if($access[$aco_id]["_update"] == 1):?>
								<a href="<?php echo $settings['cms_url'].$ControllerName?>/Edit/<?php echo $data[$ModelName]["id"]?>/<?php echo $page?>/<?php echo $viewpage?>" class="tipS smallButton blueB" title="Edit">
									<img src="<?php echo $this->webroot?>img/icons/topnav/pencil.png" alt="Edit" />
								</a>
								<?php if($data[$ModelName]['id'] != $profile["Admin"][id]):?>
									<?php if($data[$ModelName]['status']=="1"):?>
										<a href="javascript:void(0);" onclick="ChangeStatus('Do you realy want hide this item ?','<?php echo $data[$ModelName]['id']?>','0')" class="tipS smallButton greenB" title="Hide">
											<img src="<?php echo $this->webroot?>img/icons/topnav/arrowDown.png" alt="Hide"/>
										</a>
									<?php else:?>
										<a href="javascript:void(0);" onclick="ChangeStatus('Do you realy want publish this item ?','<?php echo $data[$ModelName]['id']?>','1')" class="tipS smallButton blackB" title="Publish">
											<img src="<?php echo $this->webroot?>img/icons/topnav/arrowUp.png" alt="Publish"/>
										</a>
									<?php endif;?>
								<?php else:?>
									<a href="javascript:void(0);" onclick="javascript:alert('Cannot change status your self!')" class="tipS smallButton greyB" title="Hide">
										<img src="<?php echo $this->webroot?>img/icons/topnav/arrowDown.png" alt="Hide"/>
									</a>
								<?php endif;?>
							<?php endif;?>

							<?php if($access[$aco_id]["_delete"] == 1):?>
								<?php if($data[$ModelName]['id'] != $profile["Admin"][id]):?>
									<a href="javascript:void(0);" onclick="Delete('Do you realy want delete this Admin ?','<?php echo $data[$ModelName]['id']?>')" class="tipS smallButton redB" title="Delete">
										<img src="<?php echo $this->webroot?>img/icons/topnav/subTrash.png" alt="Delete"/>
									</a>
								<?php else:?>
									<a href="javascript:void(0);" onclick="javascript:alert('Cannot delete your self!')" class="tipS smallButton greyB" title="Delete">
										<img src="<?php echo $this->webroot?>img/icons/topnav/subTrash.png" alt="Delete"/>
									</a>
								<?php endif;?>
							<?php endif;?>
						<?php endif;?>
					</td>
					<?php endif;?>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<?php
				if(
					$access[$aco_id]["_update"] == 1 or
					$access[$aco_id]["_delete"] == 1
				):
				?>
				<td colspan="8">
				<?php else:?>
				<td colspan="7">
				<?php endif;?>
					<div class="itemActions">
						<label><?php echo $this->Paginator->counter(array('format' => 'Showing %start% to %end% of %count% entries'));?></label>
					</div>
					<?php if($this->Paginator->hasPrev() or $this->Paginator->hasNext()):?>
					<div class="tPagination">
						<ul class="pages">
							<?php echo $this->Paginator->prev("",
									array(
										"escape"	=>	false,
										'tag'		=>	"li",
										"class"		=>	"prev"
									),
									"<a href='javascript:void(0)'></a>",
									array(
										'tag'		=>	"li",
										"escape"	=>	false,
										"class"		=>	"prev"
									)
								);
							?>

							<?php
								echo $this->Paginator->numbers(array(
									'separator'		=>	null,
									'tag'			=>	"li",
									'currentclass'	=>	'active',
									'modulus'		=>	4
								));
							?>
							<?php echo $this->Paginator->next("",
									array(
										"escape"	=>	false,
										'tag'		=>	"li",
										"class"		=>	"next"
									),
									"<a href='javascript:void(0)'></a>",
									array(
										'tag'		=>"li",
										"escape"	=>	false,
										"class"		=>	"next"
									)
								);
							?>
						</ul>
					</div>
					<?php endif;?>
				</td>
			</tr>
		</tfoot>
	</table>
</div>
<?php else:?>
<div class="nNote nFailure">
	<p><strong>DATA IS EMPTY!</strong></p>
</div>
<?php endif;?>
