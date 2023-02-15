<?php get_header() ?>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header -->
<header id="header" class="alt">
  <a href="<?= home_url(); ?>" class="logo">Home</a>
  <nav>
    <a href="#menu">Menu</a>
  </nav>
</header>

<!-- Menu -->
<nav id="menu">
  <ul class="links">
    <li><a href="index.html">Home</a></li>
    <li><a href="<?= site_url('/projects.php'); ?>">Projects</a></li>
    <li><a href="blog.html">Blog</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
  <!-- <ul class="actions stacked">
    <li><a href="#" class="button primary fit">Get Started</a></li>
    <li><a href="#" class="button fit">Log In</a></li>
  </ul> -->
</nav>

<!-- Banner -->
		<!-- Note: The "styleN" class below should match that of the header element. -->
		<section id="banner" class="style2">
			<div class="inner">
				<!-- <span class="image">
					<img src="<?= get_template_directory_uri() ?>/images/pic07.jpg" alt="" />
				</span> -->
				<header class="major">
					<h1>Blog</h1>
				</header>
				<div class="content">
					<p>Deep Thoughts</p>
				</div>
			</div>
		</section>

<!-- Main -->
<div id="main">

		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

</div><!-- #main -->

<?php

get_footer();
