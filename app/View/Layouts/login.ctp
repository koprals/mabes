<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
	<!-- META SECTION -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" href="<?php $this->webroot; ?>logo.png" type="image/x-icon" />
	<!-- CSS INCLUDE -->
	<link rel="stylesheet" type="text/css" id="theme" href="<?php echo $this->webroot; ?>css/theme-default.css"/>
	<!-- EOF CSS INCLUDE -->
	<!-- END META SECTION -->
	<title><?php echo $settings['site_title']?></title>
	<?php
	//BLOCK CSS
	echo $this->fetch('css');
	?>
</head>
<body>
<!-- CONTENT -->
<?php echo $this->fetch('content'); ?>
<!-- CONTENT -->
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
