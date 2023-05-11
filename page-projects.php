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

			<!-- One -->
			<!-- <section id="one">
				<div class="inner">
					<header class="major">
						<h2>Sed amet aliquam</h2>
					</header>
					<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In
						efficitur ligula tate urna. Maecenas massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu
						lorem consequat tincidunt. Vivamus et sagittis libero. Nullam et orci eu lorem consequat tincidunt vivamus
						et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna.</p>
				</div>
			</section> -->

			<!-- Two -->
			<section id="two" class="spotlights">
				<section>
					<a href="https://aspect-install-tracker.vercel.app/" class="image" target="_blank">
						<img src="<?= get_template_directory_uri() ?>/images/aspect3.png" alt="" data-position="center center" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<h3>Aspect Install Tracker</h3>
							</header>
							<p>App for tracking and reporting on retail graphic and fixture installations. Logged in users can access,
								modify, create, and delete installations. Front-end built with Next.js framework. Incorporates
								TypeScript. Built-in Next.js API routes communicate with Amazon RDS (PostgreSQL) database using the
								Prisma ORM. Tailwind CSS used for styling.
							</p>
							<ul class="actions">
								<li><a href="https://github.com/guyfarley/aspect-frontend.git" class="button" target="_blank">See the
										Code</a>
								</li>
							</ul>
						</div>
					</div>
				</section>
				<section>
					<a href="https://lassen-fly-shop.netlify.app/" class="image" target="_blank">
						<img src="<?= get_template_directory_uri() ?>/images/lassen2.png" alt="" data-position="top center" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<h3>Lassen's Fly Shop</h3>
							</header>
							<p>A simple eCommerce application representing an online fly fishing catalog. Users can click an item for expanded details, and add or remove items from shopping cart. Front-end built with
								Next.js. AWS (API, Lambda function, and DynamoDB) for data
								management on the back end. Styled using Material UI.</p>
							<ul class="actions">
								<li><a href="https://github.com/GuyFarley/lassen-fly-shop" class="button" target="_blank">See the
										Code</a>
								</li>
							</ul>
						</div>
					</div>
				</section>
				<section>
					<a href="https://code-fellows-glossary.netlify.app/" class="image" target="_blank">
						<img src="<?= get_template_directory_uri() ?>/images/glossary_square2.png" alt="" data-position="25% 25%" />
					</a>
					<div class="content">
						<div class="inner">
							<header class="major">
								<h3>Coding Glossary App</h3>
							</header>
							<p>Commissioned by the VP of Education at Code Fellows, this app allows enrolled students to maintain a
								glossary of terms they have learned. Logged in users can add, update, and delete terms. A 3rd party API
								is used for spell-checking. Built with React, Node.js, Express, and MongoDB.</p>
							<ul class="actions">
								<li><a href="https://github.com/GuyFarley/coding-glossary-frontend" class="button" target="_blank">See
										the Code</a></li>
							</ul>
						</div>
					</div>
				</section>
			</section>

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