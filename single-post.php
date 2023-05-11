<?php get_header() ?>

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

<!-- One -->
<section id="one">
	<div class="inner">
			<h1><?php the_title() ?></h1>
		<!-- <span class="image main"><img src="<?= get_template_directory_uri() ?>/images/mountains.jpg" alt="" /></span> -->
									
		<?php the_content(); ?>

	</div>
</section>

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
