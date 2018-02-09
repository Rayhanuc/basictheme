<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

<meta charset=utf-8"/>

  <?php wp_head();?>

</head>

<body <?php body_class();?>>

<?php

wp_nav_menu(array(
	'theme_location' => 'main-menu',
	'menu_id' => 'page',
));

?>