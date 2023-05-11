<?php

/**
 * The header for our theme
 * new note here
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->

	<?php wp_head(); ?>
</head>

<body class="is-preload" <?php body_class(); ?>>
	<?php wp_body_open(); ?>