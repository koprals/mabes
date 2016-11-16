<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
  <li><a href="javascript:void(0)">Module Object</a></li>
  <li><a href="javascript:void(0)">Acces Control List</a></li>
	<li class="active"><?php echo $detailAro["MyAro"]["alias_name"]?></li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-user"></span> Module Object</h2>
</div>
<!-- END PAGE TITLE -->

<?php echo $this->Session->flash();?>

<?php echo $this->Form->create("AroAcos", array('url' => array("controller"=>$ControllerName,"action"=>"Index",$ID,"?"=>"debug=0"),'class' => 'form')); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
        <h3 class="panel-title">Access Control List</h3>
      </div>
      <div class="panel-body panel-body-table">
        <div class="table-responsive">
          <table class="table table-bordered table-actions">
            <thead>
              <tr>
                <th width="150">
                  &nbsp;
                </th>
                <th class="text-center">
                  <label><input type="checkbox" class="icheckbox"/>
                  <span class="help-block">View</span>
                </th>
                <th class="text-center">
                  <input type="checkbox" class="icheckbox"/>
                  <span class="help-block">Add</span>
                </th>
                <th class="text-center">
                  <input type="checkbox" class="icheckbox"/>
                  <span class="help-block">Edit</span>
                </th>
                <th class="text-center">
                  <input type="checkbox" class="icheckbox"/>
                  <span class="help-block">Delete</span>
                </th>
                <th class="text-center">
                  <input type="checkbox" class="icheckbox"/>
                  <span class="help-block">All</span>
                </th>
              </tr>
            </thead>
            <tbody>
							<?php $count=0;?>
							<?php foreach($data as $data):?>
							<?php $count++;?>
							<?php $style = ($data["MyAco"]["parent_id"] == $top["MyAco"]["id"]) ? "class='warning'" : "";?>
							<?php $bold = ($data["MyAco"]["parent_id"] == $top["MyAco"]["id"]) ? "style='font-weight:bold;'" : "";?>
							<tr <?php echo $style?>>
								<td <?php echo $bold?>><?php echo $data["tree_prefix"].$data["MyAco"]["alias"]?></td>
								<td class="text-center">
									<?php echo $this->Form->input("AroAco.".$data["MyAco"]["id"]."._read",array(
										"name"		=>	"data[AroAco][".$data["MyAco"]["id"]."][_read]",
										"class"		=>	"icheckbox",
										"type"		=>	"checkbox",
										"col"		=>	"col_1",
										"row"		=>	"row_".$count,
										"id"		=>	"chk_".$count."_1",
										"label"		=>	false,
										"div"		=>	false,
										"required"	=>	""
									));?>

								</td>
								<td class="text-center">
									<?php echo $this->Form->input("AroAco.".$data["MyAco"]["id"]."._read",array(
										"name"		=>	"data[AroAco][".$data["MyAco"]["id"]."][_read]",
										"class"		=>	"icheckbox",
										"type"		=>	"checkbox",
										"col"		=>	"col_2",
										"row"		=>	"row_".$count,
										"id"		=>	"chk_".$count."_2",
										"label"		=>	false,
										"div"		=>	false,
										"required"	=>	""
									));?>

								</td>
								<td class="text-center">
									<?php echo $this->Form->input("AroAco.".$data["MyAco"]["id"]."._read",array(
										"name"		=>	"data[AroAco][".$data["MyAco"]["id"]."][_read]",
										"class"		=>	"icheckbox",
										"type"		=>	"checkbox",
										"col"		=>	"col_3",
										"row"		=>	"row_".$count,
										"id"		=>	"chk_".$count."_3",
										"label"		=>	false,
										"div"		=>	false,
										"required"	=>	""
									));?>

								</td>
								<td class="text-center">
									<?php echo $this->Form->input("AroAco.".$data["MyAco"]["id"]."._read",array(
										"name"		=>	"data[AroAco][".$data["MyAco"]["id"]."][_read]",
										"class"		=>	"icheckbox",
										"type"		=>	"checkbox",
										"col"		=>	"col_4",
										"row"		=>	"row_".$count,
										"id"		=>	"chk_".$count."_4",
										"label"		=>	false,
										"div"		=>	false,
										"required"	=>	""
									));?>

								</td>
								<td class="text-center">
									<input type="checkbox" class="icheckbox" id="<?php echo "chk_".$count."_5"?>" col="col_5" row="row_<?php echo $count?>"/>
								</td>
							</tr>
							<?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
			<div class="panel-heading">
				<div class="pull-right">
					<input type="submit" value="Save" class="btn btn-success btn-condense active" style="width:100px;"/>
					<input type="button" value="Cancel" class="btn btn-danger btn-condense active" onclick="location.href = '<?php echo $settings["cms_url"]?>Aros/Index/<?php echo $page?>/<?php echo $viewpage?>'" style="width:100px;"/>
			</div>
		</div>
  </div>
</div>
<?php echo $this->Form->end();?>

<?php $this->start("script");?>
<script>
$(document).ready(function(){
	$("#parent_col_1").bind("click",function(){
		if($(this).is(":checked"))
		{
			$("input[col^=col_1]").attr('checked', 'checked');
			$("input[col^=col_1]").parent("span").addClass("checked");
		}
		else
		{
			$("input[col^=col_1]").removeAttr('checked');
			$("input[col^=col_1]").parent("span").removeClass("checked");
		}
	});

	$("#parent_col_2").bind("click",function(){
		if($(this).is(":checked"))
		{
			$("input[col^=col_2]").attr('checked', 'checked');
			$("input[col^=col_2]").parent("span").addClass("checked");
		}
		else
		{
			$("input[col^=col_2]").removeAttr('checked');
			$("input[col^=col_2]").parent("span").removeClass("checked");
		}
	});

	$("#parent_col_3").bind("click",function(){
		if($(this).is(":checked"))
		{
			$("input[col^=col_3]").attr('checked', 'checked');
			$("input[col^=col_3]").parent("span").addClass("checked");
		}
		else
		{
			$("input[col^=col_3]").removeAttr('checked');
			$("input[col^=col_3]").parent("span").removeClass("checked");
		}
	});

	$("#parent_col_4").bind("click",function(){
		if($(this).is(":checked"))
		{
			$("input[col^=col_4]").attr('checked', 'checked');
			$("input[col^=col_4]").parent("span").addClass("checked");
		}
		else
		{
			$("input[col^=col_4]").removeAttr('checked');
			$("input[col^=col_4]").parent("span").removeClass("checked");
		}
	});

	$("#parent_col_5").bind("click",function(){
		if($(this).is(":checked"))
		{
			$("input[type=checkbox]").attr('checked', 'checked');
			$("input[type=checkbox]").parent("span").addClass("checked");
		}
		else
		{
			$("input[type=checkbox]").removeAttr('checked');
			$("input[type=checkbox]").parent("span").removeClass("checked");
		}
	});
	$("input[col=col_5]").bind("click",function(){
		var row	=	$(this).attr("row").split("_");

		if($(this).is(":checked"))
		{
			$("input[row=row_"+row[1]+"]").attr('checked', 'checked');
			$("input[row=row_"+row[1]+"]").parent("span").addClass("checked");

		}
		else
		{
			$("input[row=row_"+row[1]+"]").removeAttr('checked');
			$("input[row=row_"+row[1]+"]").parent("span").removeClass("checked");
		}
	});

});
</script>
<?php $this->end();?>
