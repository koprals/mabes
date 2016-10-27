<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- META SECTION -->
	<title><?php echo  $settings["site_title"] ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- END META SECTION -->

	<!-- CSS INCLUDE -->
	<link rel="stylesheet" type="text/css" id="theme" href="<?php echo $this->webroot; ?>css/theme-default.css"/>
	<!-- EOF CSS INCLUDE -->
</head>
<?php
//FAVICON
echo $this->Html->meta('icon',$this->webroot."img/favicon.png",array("type"=>"png"));

//BLOCK CSS
echo $this->fetch('css');

//************ JS NEEDED ******************/
echo $this->Html->script(array(
	/* START PLUGINS */
	"js/plugins/jquery/jquery.min.js",
	"js/plugins/jquery/jquery-ui.min.js",
	"js/plugins/bootstrap/bootstrap.min.js",
	/* END PLUGINS */

	/* START THIS PAGE PLUGINS */
	'js/plugins/icheck/icheck.min.js',
	"js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js",
	"js/plugins/scrolltotop/scrolltopcontrol.js",

	"js/plugins/morris/raphael-min.js",
	"js/plugins/morris/morris.min.js",
	"js/plugins/rickshaw/d3.v3.js",
	"js/plugins/rickshaw/rickshaw.min.js",
	'js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
	'js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
	'js/plugins/bootstrap/bootstrap-datepicker.js',
	"js/plugins/owl/owl.carousel.min.js",

	"js/plugins/moment.min.js",
	"js/plugins/daterangepicker/daterangepicker.js",
	/* END THIS PAGE PLUGINS */

	/* START TEMPLATE */
	"js/plugins.js",
	"js/actions.js",
	"js/demo_dashboard.js",
	/* END TEMPLATE */
));
//************ JS NEEDED ******************/

//BLOCK JAVASCRIPT
echo $this->fetch('script');


?>
</head>

<body>
	<!-- Left side content -->
	<div id="leftSide">
		<div class="logo" style="text-align:center;">
			<a href="javascript:void(0)">
				<img src="<?php echo $this->webroot ?>img/logo.png" alt="" width="150"/>
			</a>
		</div>
		<div class="sidebarSep mt0"></div>

		<?php
			echo $this->element('leftnavigation',array("lft_menu_category_id"=>$lft_menu_category_id));
		?>

	</div>
	<!-- Right side -->
	<div id="rightSide">
		<div class="topNav">
			<div class="wrapper">
				<div class="welcome">
					<span>
						<?php echo $profile["Admin"]["fullname"]?>
					</span>
				</div>
				<div class="userNav">
					<ul>
						<li>
							<a href="<?php echo $settings["cms_url"]?>Account/Logout" title="">
								<img src="<?php echo $this->webroot ?>img/icons/topnav/logout.png" alt="" />
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Responsive header -->
		<div class="resp">
			<div class="respHead">
				<a href="<?php echo $settings["cms_url"]?>" title="">
					<img src="<?php echo $this->webroot ?>img/client_logo.png" alt="" />
				</a>
			</div>
			<?php echo $this->element('leftnavigation_small'); ?>
		</div>

		<!-- CONTENT -->

		<?php echo $this->fetch('content'); ?>
		<!-- CONTENT -->
		<?php /*
		<!-- Footer line -->
		<div id="footer">
			<div class="wrapper">
				<a href="<?PHP echo $settings["web_url"]?>" title="<?PHP echo $settings["web_url"]?>">
					<?PHP echo $settings["site_name"]?>
				</a>
			</div>
		</div>
		*/ ?>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
