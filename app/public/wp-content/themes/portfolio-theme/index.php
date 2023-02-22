<?php get_header() ?>

<!-- Wrapper -->
<div id="wrapper">

<?php get_template_part("template-parts/navbar") ?>

<!-- Banner -->
		<!-- Note: The "styleN" class below should match that of the header element. -->
		<section id="banner" class="alt">
			<div class="inner">
				<span class="image">
					<img src="<?= get_template_directory_uri() ?>/images/mountains.jpg" alt="" />
				</span>
				<header class="major">
					<h1>Welcome to my blog</h1>
				</header>
				<div class="content">
					<p>Musings of a Web Developer</p>
				</div>
			</div>
		</section>

		
<?php while ( have_posts() ) : the_post(); ?>
	<section id="one">
		<div class="inner">
			<header class="major">
				<h2><?php the_title() ?></h2>
			</header>
				<?php the_content(); ?>
		</div>
	</section>
	<?php if ( comments_open() || get_comments_number() ) : comments_template();
	endif; ?>
<?php endwhile; ?>

<?php get_footer() ?>

</div>
