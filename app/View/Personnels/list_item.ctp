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
		$.getJSON("<?php echo $settings["cms_url"].$ControllerName?>/Delete/"+id,function(){
			$("#contents_area").load("<?php echo $settings["cms_url"].$ControllerName?>/ListItem/page:<?php echo $page?>/limit:<?php echo $viewpage.$ordered?>");
		});
	}
	return false;
}
</script>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="dataTables_length" id="DataTables_Table_0_length ">
					<label>Show Entries</label>
					<?PHP echo $this->Form->select("view",array(1=>1,5=>5,10=>10,20=>20,50=>50,100=>100,200=>200,1000=>1000),array("onchange"=>"onClickPage('".$settings["cms_url"].$ControllerName."/ListItem/limit:'+this.value+'".$ordered."','#contents_area')","empty"=>false,"default"=>$viewpage))?>
				</div>
			</div>

			<div class="panel-body panel-body-table">

					<div class="table-responsive">
							<table class="table table-bordered table-striped table-actions">
									<thead>
											<tr>
													<th>
														<?php echo $this->Paginator->sort("$ModelName.id",'NO');?>
													</th>
													<th>
														<?php echo $this->Paginator->sort("$ModelName.personnel_name",'Name Siswa');?>
													</th>
													<th>
														PANGKAT/KOPRS/NRP
													</th>
													<th>
														<?php echo $this->Paginator->sort("$ModelName.personel_unity",'KESATUAN');?>
													</th>
													<!-- <th>
														<?php //echo $this->Paginator->sort("ProgramStudy.name",'NAMA PENDIDIKAN');?>
													</th> -->
													<!-- <th>
														<?php //echo $this->Paginator->sort("Country.name",'NEGARA');?>
													</th> -->
													<!-- <th>
														<?php //echo $this->Paginator->sort("EducationType.name",'JENIS PENDIDIKAN');?>
													</th> -->
													<th>
														<?php echo $this->Paginator->sort("$ModelName.personel_course_depart",'BERANGKAT');?>
													</th>
													<th>
														<?php echo $this->Paginator->sort("$ModelName.personel_course_arrived",'KEMBALI');?>
													</th>
													<th>
														<?php echo $this->Paginator->sort("$ModelName.SStatus",'STATUS PENDIDIKAN');?>
													</th>
													<?php
													if(
														$access[$aco_id]["_update"] == 1 or
														$access[$aco_id]["_delete"] == 1
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
												<td class="text-center"><?php echo $no ?></td>
												<td><a href="<?php echo $settings['cms_url'].$ControllerName?>/View/<?php echo $data[$ModelName]["id"]?>/"><?php echo $data[$ModelName]['personnel_name'] ?></td>
												<td><?php echo $data[$ModelName]['personel_occupation'] ?>/<?php echo $data[$ModelName]['SCorps'] ?>/<?php echo $data[$ModelName]['personel_nrp'] ?></td>
												<td><?php echo $data[$ModelName]['personel_unity'] ?>
												<!-- <td><?php //echo $data['ProgramStudy']['name'] ?></td>
												<td><?php //echo $data['Country']['name'] ?></td>
												<td><?php //echo $data['EducationType']['name'] ?></td> -->
												<td><?php echo $data[$ModelName]['personel_course_depart'] ?></td>
												<td><?php echo $data[$ModelName]['personel_course_arrived'] ?></td>
												<td><?php echo $data[$ModelName]['SStatus'] ?></td>
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
															<a href="<?php echo $settings['cms_url'].$ControllerName?>/Delete/<?php echo $data[$ModelName]["id"]?>/" class="btn btn-danger btn-condensed" title="Access Control">
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
