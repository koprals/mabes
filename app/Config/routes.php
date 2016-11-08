<?php
Router::connect('/', array('controller' => 'Home', 'action' => 'Index'));
CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';
Router::parseExtensions('pdf', 'json');
?>
