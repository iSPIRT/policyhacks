<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ispirt
 */

?>

<footer class="site-footer">
		<div class="grid-x">
			<div class="medium-12 cell">
				<div class="grid-x">


				<div class="medium-6 cell foot foot1">
					<div class="wrap">
						<h3>Follow</h3>
						<div class="social">
							<ul>
								<li> <a href="https://www.facebook.com/ProductNationIN/" target="_blank"> <img src="<?= get_template_directory_uri();?>/img/facebook.svg" alt=""> </a> </li>
								<li> <a href="https://twitter.com/Product_Nation" target="_blank"> <img src="<?= get_template_directory_uri();?>/img/twitter.svg" alt=""> </a> </li>
								<li> <a href="https://www.linkedin.com/company/ispirt-foundation/" target="_blank"> <img src="<?= get_template_directory_uri();?>/img/linkedin.svg" alt=""> </a> </li>
							</ul>
						</div>
						<div class="cleartrip"></div>
					</div>
				</div>
				<div class="medium-6 cell foot foot2">
					<div class="wrap">
						<a href="#"> <img src="<?= get_template_directory_uri();?>/img/isprit_logo_white.svg" alt=""> </a>
					</div>
				</div>
			</div>
			</div>

	</footer>

<script type="text/javascript">
	var templatePath = '/';
</script>
<script src="<?= get_template_directory_uri();?>/js/vendor/jquery.js"></script>
<script src="<?= get_template_directory_uri();?>/js/vendor/what-input.js"></script>
<script src="<?= get_template_directory_uri();?>/js/vendor/foundation.js"></script>
<script src="<?= get_template_directory_uri();?>/js/app.js"></script>

<?php wp_footer(); ?>

</body>
</html>
