<!-- START BREADCRUMB -->
<ul class="breadcrumb">
		<li><a href="javascript:void(0)">Home</a></li>
		<li class="active">Data Form Studi</li>
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
                                    <h2 class="panel-title pull-right">
                                    	<a href="<?php echo $settings["cms_url"].$ControllerName?>/Add"</a><strong>Tambah Jenis Pendidikan</strong>
                                    </h2>
                                    <button class="btn btn-danger btn-condensed pull-right"><i class="fa fa-plus"></i></button>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                        	<?php
						                    	echo $this->Form->input('Search.name', array(
													'label'			=>	'Name',
						                    		'div'			=>	array("class"=>"table-responsive"),
						                    		'between'		=>	'<div class="table table-bordered table-striped table-actions">>',
						                    		'after'			=>	'</div>',
													"style"			=>	"width:50px"
						                    	));
											?>
                                            <thead>
                                                <tr>
                                                    <th width="50">No</th>
                                                    <th>jenis Pendidikan</th>
                                                    <th width="120">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                <tr id="trow_1">
                                                    <td class="text-center"></td>
                                                    <td><strong></strong></td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
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
<!-- END PAGE CONTENT WRAPPER -->
