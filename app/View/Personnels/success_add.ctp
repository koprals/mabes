<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="active">Personel</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2>Success Add New Personel</h2>
</div>
<!-- END PAGE TITLE -->

<div class="page-content-wrap">
	<div class="row">
			<div class="col-md-12">
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong>SUCCESS:</strong> add new Personel.
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="panel-footer center-button">
              <a href="<?php echo $settings["cms_url"].$ControllerName?>/Edit/<?php echo $ID?>" title="Back to Edit" class="btn btn-danger active" style="margin: 5px;"><span>Edit this <?php echo strtolower($ControllerName)?></span></a>
        			<a href="<?php echo $settings["cms_url"].$ControllerName?>/Add" title="Back to List" class="btn btn-success active" style="margin: 5px;"><span>Add More</span></a>
        			<a href="<?php echo $settings["cms_url"].$ControllerName?>/Index" title="Back to List" class="btn btn-primary active" style="margin: 5px;"><span>Back to List</span></a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
