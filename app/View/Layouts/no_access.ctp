<!DOCTYPE html PUBLIC>
<html lang="en">
<head>
	<!-- META SECTION -->
	<title><?php echo  $settings["site_title"] ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- END META SECTION -->
	<link rel="stylesheet" type="text/css" id="theme" href="<?php echo $this->webroot; ?>css/theme-default.css"/>

	<?php
	//BLOCK CSS
	echo $this->fetch('css');

	//BLOCK JAVASCRIPT
	echo $this->fetch('script');
	?>
</head>
<style>

</style>

<body>
	<!-- START PAGE CONTAINER -->
	<div class="page-container">

		<div class="page-content">
			<!-- START X-NAVIGATION VERTICAL -->
			<ul class="x-navigation x-navigation-horizontal x-navigation-panel"
					<!-- SEARCH -->
					<!-- <li class="xn-search">
							<form role="form">
									<input type="text" name="search" placeholder="Cari..."/>
							</form>
					</li> -->
					<!-- END SEARCH -->
					<!-- POWER OFF -->
					<li class="xn-icon-button pull-right last">
							<a href="#"><span class="fa fa-power-off"></span></a>
							<ul class="xn-drop-left animated zoomIn">
									<li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
							</ul>
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
			<?php //echo $this->fetch('content'); ?>
			<h1>No Access: Sorry you dont have privileges to access this page</h1>
			<!-- CONTENT -->
		</div>
		<!-- END PAGE CONTENT -->
	</div>
	<!-- END PAGE CONTAINER -->

	<?php echo $this->element('sql_dump'); ?>

	<!-- START SCRIPTS -->
			<!-- START PLUGINS -->
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/jquery/jquery.min.js"></script>
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
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/owl/owl.carousel.min.js"></script>

			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/moment.min.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins/daterangepicker/daterangepicker.js"></script>
			<!-- END THIS PAGE PLUGINS-->

			<!-- START TEMPLATE -->
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/plugins.js"></script>
			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/actions.js"></script>

			<script type="text/javascript" src="<?php echo $this->webroot; ?>js/demo_dashboard.js"></script>
			<!-- END TEMPLATE -->
	<!-- END SCRIPTS -->
</body>
</html>
