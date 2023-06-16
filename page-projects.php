<?php get_header() ?>

<!-- Wrapper -->
<div id="wrapper">

	<?php get_template_part("template-parts/navbar") ?>

	<!-- Banner -->
	<!-- Note: The "styleN" class below should match that of the header element. -->
	<section id="banner" class="style2">
		<div class="inner">
			<span class="image">
				<img src="<?= get_template_directory_uri() ?>/images/pic07.jpg" alt="" />
			</span>
			<header class="major">
				<h1>Projects</h1>
			</header>
			<div class="content">
				<p>A few things I've built</p>
			</div>
		</div>
	</section>

	<!-- Main -->
	<div id="main">

		<!-- Project Left -->
		<?php
		$projectsLeft = new WP_Query(array(
			'post_type' => 'project-left',
			'posts_per_page' => 1,
			'order' => 'ASC'
		));

		while ($projectsLeft->have_posts()) {
			$projectsLeft->the_post();
			$image = get_field('project-image');
			$description = get_field('project-description');
			$githubLink = get_field('github-link');
			$projectLink = get_field('project-link');

		?>

			<section id="two" class="spotlights">
				<section>
					<a href="<?php echo $projectLink; ?>" class="image" target="_blank">

						<img src="<?php echo $image; ?>" alt="" data-position="center center" />

					</a>
					<div class=" content">
						<div class="inner">
							<header class="major">
								<h3><?php the_title() ?></h3>
							</header>
							<p><?php echo $description; ?>
							</p>
							<ul class="actions">
								<li><a href="<?php echo $githubLink; ?>" class="button" target="_blank">See the
										Code</a>
								</li>
							</ul>
						</div>
					</div>
				</section>

			<?php }
			?>

			<!-- Project Right -->
			<?php
			$projectsRight = new WP_Query(array(
				'post_type' => 'project-right',
				'posts_per_page' => 1,
				'order' => 'ASC'
			));

			while ($projectsRight->have_posts()) {
				$projectsRight->the_post();
				$image = get_field('project-image');
				$description = get_field('project-description');
				$githubLink = get_field('github-link');
				$projectLink = get_field('project-link');

			?>
				<section>
					<a href="<?php echo $projectLink; ?>" class="image" target="_blank">
						<img src="<?php echo $image; ?>" alt="" data-position="top center" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<h3><?php the_title() ?></h3>
							</header>
							<p><?php echo $description; ?></p>
							<ul class="actions">
								<li><a href="<?php echo $githubLink; ?>" class="button" target="_blank">See the
										Code</a>
								</li>
							</ul>
						</div>
					</div>
				</section>
			<?php }
			?>

			<!-- Project Left -->
			<?php
			$projectsLeft = new WP_Query(array(
				'post_type' => 'project-left',
				'posts_per_page' => 1,
				'order' => 'DESC'
			));

			while ($projectsLeft->have_posts()) {
				$projectsLeft->the_post();
				$image = get_field('project-image');
				$description = get_field('project-description');
				$githubLink = get_field('github-link');
				$projectLink = get_field('project-link');

			?>
				<section>
					<a href="<?php echo $projectLink; ?>" class="image" target="_blank">
						<img src="<?php echo $image; ?>" alt="" data-position="25% 25%" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<h3><?php the_title() ?></h3>
							</header>
							<p><?php echo $description; ?></p>
							<ul class="actions">
								<li><a href="<?php echo $githubLink; ?>" class="button" target="_blank">See
										the Code</a></li>
							</ul>
						</div>
					</div>
				</section>
			</section>
		<?php }
		?>

		<!-- Three -->
		<section id="three">
			<div class="inner">
				<header class="major">
					<h2>What I'm Working On</h2>
				</header>
				<p>I'm currently learning PHP for WordPress development and deepening my understanding of software testing
					practices for Agile workflows.<br /><br />
					<!-- <ul class="actions">
						<li><a href="https://github.com/GuyFarley/install-tracker-frontend" class="button next"
								target="_blank">GitHub Repo</a></li>
					</ul> -->
			</div>
		</section>

	</div>

	<!-- Contact -->
	<section id="contact">
		<div class="inner">
			<section>
				<form method="post" action="https://formspree.io/f/xlevlrbg">
					<div class="fields">
						<div class="field half">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6"></textarea>
						</div>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Send Message" class="primary" /></li>
						<li><input type="reset" value="Clear" /></li>
					</ul>
				</form>
			</section>
			<section class="split">
				<section>
					<div class="contact-method">
						<span class="icon solid alt fa-envelope"></span>
						<h3>Email</h3>
						<a href="mailto:guy.e.farley@gmail.com">guy.e.farley@gmail.com</a>
					</div>
				</section>
				<section>
					<div class="contact-method">
						<span class="icon solid alt fa-phone"></span>
						<h3>Phone</h3>
						<span>(615) 491-5951</span>
					</div>
				</section>
				<section>
					<div class="contact-method">
						<span class="icon brands alt fa-linkedin-in"></span>
						<h3>LinkedIn</h3>
						<a href="https://www.linkedin.com/in/guyefarley/" target="_blank">linkedin.com/in/guyefarley</a>
					</div>
				</section>
			</section>
		</div>
	</section>

	<?php get_footer() ?>

</div>