<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
		<a href="<?= home_url(); ?>" class="logo">Home</a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<li><a href="index.html">Home</a></li>
				<li><a href="projects.html">Projects</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<!-- <ul class="actions stacked">
				<li><a href="#" class="button primary fit">Get Started</a></li>
				<li><a href="#" class="button fit">Log In</a></li>
			</ul> -->
		</nav>

		<!-- Main -->
		<section id="main" class="wrapper">
			<div class="inner">
				<h1 class="major"><?php the_title() ?></h1>
				<span class="image main"><img src="<?= get_template_directory_uri() ?>/images/mountains.jpg" alt="" /></span>
				<?php the_content() ?>
			</div>
		</section>

<?php
get_footer();
