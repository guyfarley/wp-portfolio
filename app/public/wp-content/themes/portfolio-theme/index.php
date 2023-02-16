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
    <li><a href="projects.html">Projects</a></li>
    <li><a href="blog.html">Blog</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
  <!-- <ul class="actions stacked">
    <li><a href="#" class="button primary fit">Get Started</a></li>
    <li><a href="#" class="button fit">Log In</a></li>
  </ul> -->
</nav>

<!-- Banner -->
<section class="major">
			<div class="inner">
				<header class="major">
					<h1>Blog</h1>
				</header>
		</section>

		
		<?php while ( have_posts() ) : the_post(); ?>

			<section id="one">
				<div class="inner">
					<header class="major">
						<h2><?php the_title() ?></h2>
					</header>
					<span class="image main"><img src="<?= get_template_directory_uri() ?>/images/mountains.jpg" alt="" /></span>
					<?php the_content(); ?>
				</div>
			</section>
			<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
		<?php endwhile; ?>

		<?php get_footer() ?>
</div>
