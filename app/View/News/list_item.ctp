<?php if(!empty($data)): ?>
<?php
	$order		=	array_keys($this->params['paging'][$ModelName]['order']);
	$direction	=	$this->params['paging'][$ModelName]["order"][$order[0]];
	$ordered	=	($order[0]!==0) ? "/sort:".$order[0]."/direction:".$direction: "";
?>
<?php $this->Paginator->options(array(
	'url'	=> array(
	'controller'	=> $ControllerName,
	'action'		=> 'ListItem/limit:'.$viewpage,
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
			$("#contents_area").load("<?php echo $settings["cms_url"].$ControllerName?>/ListItem/page:<?php echo $page?>/limit:<?php echo $viewpage.$ordered?>");
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
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="dataTables_length" id="DataTables_Table_0_length ">
					<label>Show Entries</label>
					<?PHP echo $this->Form->select("DataTables_Table_0_length",array(1=>1,5=>5,10=>10,20=>20,50=>50,100=>100,200=>200,1000=>1000),array("onchange"=>"onClickPage('".$settings["cms_url"].$ControllerName."/ListItem/limit:'+this.value+'".$ordered."','#contents_area')","empty"=>false,"default"=>$viewpage))?>
				</div>
			</div>

			<div class="panel-body panel-body-table">

					<div class="table-responsive">
							<table class="table table-bordered table-striped table-actions">
									<thead>
											<tr>
													<th width="50">
														No
													</th>
													<th>
														Judul Berita
													</th>
													<th>
														Isi Berita
													</th>
													<?php
													if(
														$access[$aco_id]["_update"] == 1 or
														$access[$aco_id]["_delete"] == 1
													):
													?>
													<th width="120" class="text-center">
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
												<td class="text-center"><?php echo $no ?></td>
												<td><?php echo $data[$ModelName]['title'] ?></td>
												<td><?php echo $this->text->truncate($data[$ModelName]['description'],150)?></td>
												<?php
												if(
													$access[$aco_id]["_update"] == 1 or
													$access[$aco_id]["_delete"] == 1
												):
												?>
												<td>
													<?php if($access[$aco_id]["_update"] == 1):?>
														<a href="<?php echo $settings['cms_url'].$ControllerName?>/Edit/<?php echo $data[$ModelName]["id"]?>/" class="btn btn-success btn-condensed" title="Access Control">
															<span class="fa fa-pencil"></span>
														</a>
													<?php endif;?>
													<?php if($access[$aco_id]["_delete"] == 1):?>
															<a href="javascript:void(0);" onclick="Delete('Do you realy want to delete this item?','<?php echo $data[$ModelName]['id']?>')" class="btn btn-danger btn-condensed" title="Access Control">
																<span class="fa fa-times"></span>
															</a>
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
				<div class="pull-right">
				<?php if($this->Paginator->hasPrev() or $this->Paginator->hasNext()):?>
				<?php echo $this->Paginator->prev('Previous', array('style'	=>	'font-weight:bold;font-size:13px'))?>
						<?php
							echo $this->Paginator->numbers(array('style' => 'font-weight:bold;font-size:13px', 'modulus' => 4));
						?>
					<?php echo $this->Paginator->next('Next', array('style'	=>	'font-weight:bold;font-size:13px'))?>
				<?php endif ?>
			</div>
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
