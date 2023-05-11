<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<ul class="icons">
					<li><a href="https://twitter.com/guyefarley" class="icon brands alt fa-twitter" target="_blank"><span
								class="label">Twitter</span></a></li>
					<!-- <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li> -->
					<li><a href="https://github.com/GuyFarley" class="icon brands alt fa-github" target="_blank"><span
								class="label">GitHub</span></a></li>
					<li><a href="https://www.linkedin.com/in/guyefarley/" class="icon brands alt fa-linkedin-in"
							target="_blank"><span class="label">LinkedIn</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; 2023 Guy Farley</li>
					<li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.min.js"></script>
	<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.scrolly.min.js"></script>
	<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.scrollex.min.js"></script>
	<script src="<?= get_template_directory_uri() ?>/src/js/default/browser.min.js"></script>
	<script src="<?= get_template_directory_uri() ?>/src/js/default/breakpoints.min.js"></script>
	<script src="<?= get_template_directory_uri() ?>/src/js/default/util.js"></script>
	<script src="<?= get_template_directory_uri() ?>/src/js/default/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
