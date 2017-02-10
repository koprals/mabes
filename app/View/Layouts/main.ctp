<!DOCTYPE html PUBLIC>
<html lang="en">
<head>
	<!-- META SECTION -->
	<title><?php echo  $settings["site_title"] ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="<?php $this->webroot; ?>favicon.png" type="image/x-icon" />
	<!-- END META SECTION -->
	<link rel="stylesheet" type="text/css" id="theme" href="<?php echo $this->webroot; ?>css/theme-default.css"/>
	<link rel="stylesheet" type="text/css" id="theme" href="<?php echo $this->webroot; ?>css/custom.css"/>

	<?php
	//BLOCK CSS
	echo $this->fetch('css');

	//************ JS NEEDED ******************/
	/*echo $this->Html->script(array(
	"jquery-1.7.2.min",
	"jquery-ui-1.8.21.custom.min",
	"/js/plugins/spinner/jquery.mousewheel.js",

	"/js/globalize/globalize.js",
	"/js/globalize/globalize.culture.de-DE.js",
	"/js/globalize/globalize.culture.ja-JP.js",

	"/js/plugins/charts/excanvas.min.js",
	"/js/plugins/charts/jquery.flot.js",
	"/js/plugins/charts/jquery.flot.orderBars.js",
	"/js/plugins/charts/jquery.flot.pie.js",
	"/js/plugins/charts/jquery.flot.resize.js",
	"/js/plugins/charts/jquery.sparkline.min.js",

	"/js/plugins/forms/uniform.js",
	"/js/plugins/forms/jquery.cleditor.js",
	"/js/plugins/forms/jquery.validationEngine-en.js",
	"/js/plugins/forms/jquery.validationEngine.js",
	"/js/plugins/forms/jquery.tagsinput.min.js",
	"/js/plugins/forms/jquery.autosize.js",
	"/js/plugins/forms/jquery.maskedinput.min.js",
	"/js/plugins/forms/jquery.dualListBox.js",
	"/js/plugins/forms/jquery.inputlimiter.min.js",
	"/js/plugins/forms/chosen.jquery.min.js",

	"/js/plugins/wizard/jquery.form.js",
	"/js/plugins/wizard/jquery.validate.min.js",
	"/js/plugins/wizard/jquery.form.wizard.js",
	"/js/plugins/uploader/plupload.js",
	"/js/plugins/uploader/plupload.html5.js",
	"/js/plugins/uploader/jquery.plupload.queue.js",
	"/js/plugins/tables/datatable.js",
	"/js/plugins/tables/tablesort.min.js",
	"/js/plugins/tables/resizable.min.js",
	"/js/plugins/ui/jquery.tipsy.js",
	"/js/plugins/ui/jquery.collapsible.min.js",
	"/js/plugins/ui/jquery.prettyPhoto.js",
	"/js/plugins/ui/jquery.progress.js",
	"/js/plugins/ui/jquery.timeentry.min.js",
	"/js/plugins/ui/jquery.colorpicker.js",
	"/js/plugins/ui/jquery.jgrowl.js",
	"/js/plugins/ui/jquery.breadcrumbs.js",
	"/js/plugins/ui/jquery.sourcerer.js",
	"/js/plugins/jquery.fullcalendar.js",
	"/js/plugins/jquery.elfinder.js",
	"/js/jquery-ui.multidatespicker.js",
	"/js/jquery.timeentry.js",
	"/js/jquery.jCounter-0.1.4.js"
));
//************ JS NEEDED ******************/


	?>

    <!-- START SCRIPTS -->
			<!-- START PLUGINS -->
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo $this->webroot?>js/plugins/jquery/jquery-migrate.min.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/jquery/jquery-ui.min.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/bootstrap/bootstrap.min.js"></script>
			<!-- END PLUGINS -->

			<!-- START THIS PAGE PLUGINS-->
			<script type='text/javascript' src='<?php echo $this->webroot; ?>js/plugins/icheck/icheck.min.js'></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/scrolltotop/scrolltopcontrol.js"></script>

			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/morris/raphael-min.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/morris/morris.min.js"></script>

			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/rickshaw/d3.v3.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/rickshaw/rickshaw.min.js"></script>

			<script type='text/javascript' src='<?php echo $this->webroot; ?>js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
			<script type='text/javascript' src='<?php echo $this->webroot; ?>js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>

			<script type='text/javascript' src='<?php echo $this->webroot; ?>js/plugins/bootstrap/bootstrap-datepicker.js'></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/bootstrap/bootstrap-select.js"></script>

			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/owl/owl.carousel.min.js"></script>

			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/moment.min.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/daterangepicker/daterangepicker.js"></script>
			<!-- END THIS PAGE PLUGINS-->

<<<<<<< HEAD
			<!-- THIS PAGE PLUGINS -->
        
        
         
        
                
        
        <!-- END PAGE PLUGINS -->  			
            
=======
			<!-- START TEMPLATE -->
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/actions.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/faq.js"></script>
			<!-- END TEMPLATE -->

>>>>>>> c2fe340e729b419296fc0ff725a128b38bf0899c
            <script type='text/javascript' src='<?php echo $this->webroot; ?>js/plugins/ui/jquery.prettyPhoto.js'></script>
            <script type='text/javascript' src='<?php echo $this->webroot; ?>js/plugins/forms/uniform.js'></script>
            <script type='text/javascript' src='<?php echo $this->webroot; ?>js/plugins/ui/jquery.tipsy.js'></script>

            <script type='text/javascript' src='<?php echo $this->webroot; ?>/js/plugins/wizard/jquery.form.js   '></script>

<<<<<<< HEAD
            <!-- START TEMPLATE -->
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/actions.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/faq.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/summernote/summernote.js"></script>
			<!-- END TEMPLATE -->
        
            
=======

>>>>>>> c2fe340e729b419296fc0ff725a128b38bf0899c
	<!-- END SCRIPTS -->

    <?php
    	//BLOCK JAVASCRIPT
		echo $this->fetch('script');
	?>
</head>

<body>
	<!-- START PAGE CONTAINER -->
	<div class="page-container">

		<!-- START PAGE SIDEBAR -->
		<div class="page-sidebar">
			<!-- START X-NAVIGATION -->
			<ul class="x-navigation">
			    <li class="xn-logo">
			        <a href="index-dashboard.html"></a>
			        <a href="#" class="x-navigation-control"></a>
			    </li>
			    <li class="xn-profile">
			        <a href="#" class="profile-mini">
			            <img src="<?php echo $this->webroot; ?>assets/images/users/avatars.jpg" alt="John Doe"/>
			        </a>
			        <div class="profile">
			            <div class="profile-image">
			                <img src="<?php echo $this->webroot; ?>assets/images/users/avatars.jpg" alt="John Doe"/>
			            </div>
			            <div class="profile-data">
			                <div class="profile-data-name"><?php echo $profile["Admin"]["fullname"]?></div>
			                <div class="profile-data-title">Superadmin</div>
			            </div>
			            <div class="profile-controls">
			                <a href="" class="profile-control-left"><span class="fa fa-info"></span></a>
			                <a href="" class="profile-control-right"><span class="fa fa-envelope"></span></a>
			            </div>
			        </div>
			    </li>
			    <li class="xn-title">Main Menu</li>
					<?php
						echo $this->element('leftnavigation',array("lft_menu_category_id"=>$lft_menu_category_id));
					?>
			</ul>
			<!-- END X-NAVIGATION -->
		</div>
		<!-- END PAGE SIDEBAR -->

		<!-- PAGE CONTENT -->
		<div class="page-content">
			<!-- START X-NAVIGATION VERTICAL -->
			<ul class="x-navigation x-navigation-horizontal x-navigation-panel"
					<!-- SEARCH -->
					<li class="xn-search">
							<form role="form">
									<input type="text" name="search" placeholder="Cari..."/>
							</form>
					</li>
					<!-- END SEARCH -->
					<!-- POWER OFF -->
					<li class="xn-icon-button pull-right last">
							<a href="<?php echo $settings["cms_url"]?>Account/Logout"><span class="fa fa-power-off"></span></a>
					</li>
					<!-- END POWER OFF -->
					<!-- MESSAGES -->
					<li class="xn-icon-button pull-right">
							<a href="#"><span class="fa fa-comments"></span></a>
							<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
									<div class="panel-heading">
											<h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
									</div>
									<div class="panel-footer text-center">
											<a href="pages-messages.html">Data Is Empty</a>
									</div>
							</div>
					</li>
					<!-- END MESSAGES -->
					<!-- TASKS -->
					<li class="xn-icon-button pull-right">
							<a href="#"><span class="fa fa-tasks"></span></a>
							<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
									<div class="panel-heading">
											<h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>
											<div class="pull-right">
											</div>
									</div>
									<div class="panel-footer text-center">
											<a href="pages-tasks.html">Data Is Empty</a>
									</div>
							</div>
					</li>
					<!-- END TASKS -->
			</ul>
			<!-- END X-NAVIGATION VERTICAL -->

			<!-- CONTENT -->
			<?php echo $this->fetch('content'); ?>
			<!-- CONTENT -->
		</div>
		<!-- END PAGE CONTENT -->
	</div>
	<!-- END PAGE CONTAINER -->

	<?php echo $this->element('sql_dump'); ?>


</body>
</html>
