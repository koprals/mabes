<?php if(!empty($data)): ?>
<?php
	$order		=	array_keys($this->params['paging'][$ModelName]['order']);
	$direction	=	$this->params['paging'][$ModelName]["order"][$order[0]];
	$ordered	=	($order[0]!==0) ? "/sort:".$order[0]."/direction:".$direction: "";
?>

<?php $this->Paginator->options(array(
				'url'	=> array(
					'controller'	=> $ControllerName,
					'action'		=> 'ListItem/limit:'.$viewpage.'/parent_id:'.$parent_id,
				),
				'onclick'=>"return onClickPage(this,'#contents_area');")
			);
?>

<script>
function ChangeStatus(msg,id,status)
{
	var a	=	confirm(msg);
	if(a)
	{
		$.getJSON("<?php echo $settings["cms_url"].$ControllerName?>/ChangeStatus/"+id+"/"+status,function(){
			$("#contents_area").load("<?php echo $settings["cms_url"].$ControllerName?>/ListItem/page:<?php echo $page?>/limit:<?php echo $viewpage.$ordered?>/parent_id:<?php echo $parent_id?>");
		});
	}
	return false;
}

function Delete(msg,id)
{
	var a	=	confirm(msg);
	if(a)
	{
		$.getJSON("<?php echo $settings["cms_url"].$ControllerName?>/Delete/"+id,function(result){
			alert(result.data.message);
			if(result.data.status == "1")
			{
				$("#contents_area").load("<?php echo $settings["cms_url"].$ControllerName?>/ListItem/page:<?php echo $page?>/limit:<?php echo $viewpage.$ordered?>",function(){
					$("#view, input:checkbox, #action").uniform();
					$('.tipS').tipsy({gravity: 's',fade: true});
					$("a[rel^='lightbox']").prettyPhoto({
						social_tools :''
					});
				});
			}
		});
	}
	return false;
}
</script>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php if(!empty($check[$ModelName]['parent_id'])):?>
					<div class="horControlB" style="width:auto; height:100%; display:block; float:left; padding:0px; margin-top:15px; margin-left:10px;">
						<a href="javascript:void(0);" class="button redB" onclick="onClickPage('<?php echo $settings["cms_url"].$ControllerName?>/ListItem/page:<?php echo $page?>/limit:<?php echo $viewpage.$ordered?>/parent_id:<?php echo $check[$ModelName]['parent_id']?>','#contents_area');">
							<span ><img src="<?php echo $this->webroot?>/img/icons/control/16/back.png" style="float:left; margin-right:5px; margin-top:-2px;"/>BACK</span>
						</a>
					</div>
				<?php endif;?>
			</div>

			<div class="panel-body panel-body-table">

					<div class="table-responsive">
							<table class="table table-bordered table-striped table-actions">
									<thead>
											<tr>
													<th width="50">
														<?php echo $this->Paginator->sort("$ModelName.id",'ID');?>
													</th>
													<th>
														<?php echo $this->Paginator->sort("$ModelName.alias",'Name');?>
													</th>
													<th>
														<?php echo $this->Paginator->sort("$ModelName.description", 'Description');?>
													</th>
													<th width="150">
														<?php echo $this->Paginator->sort("Parent.name",'Parent');?>
													</th>
													<th>
														<?php echo $this->Paginator->sort("$ModelName.modified",'Modified');?>
													</th>
													<?php
													if(
														$access[$aco_id]["_update"] == 1 or
														$access[$aco_id]["_delete"] == 1 or
														$access[$aco_id]["_read"] == 1
													):
													?>
													<th width="120">
														actions
													</th>
													<?php endif;?>
											</tr>
									</thead>
									<tbody>
										<?php $count = 0;?>
										<?php foreach($data as $data): ?>
											<?php $count++;?>
											<?php $no		=	(($page-1)*$viewpage) + $count;?>
											<tr>
												<td><?php echo $data[$ModelName]['id'] ?></td>
												<td><?php echo $data[$ModelName]['alias'] ?></td>
												<td><?php echo $this->Text->truncate($this->Aimfox->IsEmptyText($data[$ModelName]['description']),100,array("html"=>true))?></td>
												<td><?php echo $data["Parent"]['alias'] ?></td>
												<td style="text-align:center;"><?php echo date("d M Y",strtotime($data[$ModelName]['modified'])) ?></td>
												<?php
												if(
													$access[$aco_id]["_update"] == 1 or
													$access[$aco_id]["_delete"] == 1 or
													$access[$aco_id]["_read"] == 1
												):
												?>
												<td style="text-align:center;">
													<?php if($access[$aco_id]["_update"] == 1):?>
														<a href="<?php echo $settings['cms_url'].$ControllerName?>/Edit/<?php echo $data[$ModelName]["id"]?>/<?php echo $page?>/<?php echo $viewpage?>" class="btn btn-success btn-condensed" title="Access Control">
															<span class="fa fa-pencil"></span>
														</a>
													<?php endif;?>
													<?php if($access[$aco_id]["_delete"] == 1):?>
														<a href="javascript:void(0);" onclick="Delete('All child from this module will be up one level, Do you realy want delete this Module?','<?php echo $data[$ModelName]['id']?>')" class="btn btn-danger btn-condensed" title="Access Control">
															<span class="fa fa-close"></span>
														</a>
													<?php endif;?>
													<?php if($access[$aco_id]["_read"] == 1):?>
														<?php if($data[$ModelName]['rght']-$data[$ModelName]['lft'] > 1):?>
															<a href="javascript:void(0);" class="btn btn-primary btn-condensed" title="See Child" onclick="$(this).tipsy('hide');onClickPage('<?php echo $settings["cms_url"].$ControllerName?>/ListItem/page:<?php echo $page?>/limit:<?php echo $viewpage.$ordered?>/parent_id:<?php echo $data[$ModelName]['id']?>','#contents_area');">
																<span class="fa fa-folder-open"></span>
															</a>
														<?php else:?>
															<a href="javascript:void(0);" class="btn btn-primary btn-condensed" title="See Child" style=" cursor:default;">
																<span class="fa fa-folder-open"></span>
															</a>
														<?php endif;?>
													<?php endif;?>
												</td>
												<?php endif;?>
											</tr>
										<?php endforeach; ?>
									</tbody>
							</table>
					</div>

			</div>

			<!-- START PAGINATION -->
			<div class="panel-heading">
				<div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite"><?php echo $this->Paginator->counter(array('format' => 'Showing %start% to %end% of %count% entries'));?></div>
					<?php if($this->Paginator->hasPrev() or $this->Paginator->hasNext()):?>
					<ul class="pagination pagination-sm pull-right">
						<?php echo $this->Paginator->prev("",
								array(
									"escape"	=>	false,
									'tag'		=>	"li",
								),
								"<a href='javascript:void(0)'></a>",
								array(
									'tag'		=>	"li",
									"escape"	=>	false,
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
								),
								"<a href='javascript:void(0)'></a>",
								array(
									'tag'		=>"li",
									"escape"	=>	false,
								)
							);
						?>

					</ul>
					<?php endif;?>
				</div>
			<!-- END PAGINATION -->

		</div>
	</div>
</div>
<?php else:?>
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-danger" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<strong>DATA IS EMPTY</strong>.
			</div>
		</div>
	</div>
<?php endif;?>
