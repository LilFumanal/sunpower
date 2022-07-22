<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sunpower
 */

?>
<footer>
	<div class="container-fluid">

		<div class="row d-flex pl-5 pt-3 bg-custom">

			<div class="col-6 text-black text-lg-start">

				<h5 class="text-uppercase mb-4">A propos de SunPower</h5>

				<p>La société Sunpower conçoit et commercialise des panneaux solaires à haut rendement (25%).</p>
				<p>Dans le cadre de ses activités Sunpower à développé des ombrières solaires pour la recharge des véhicules électriques.</p>

			</div>

			<div class="col-6 text-black text-lg-start pl-5">

				<h5 class="text-uppercase mb-4 pb-1">Contact</h5>

				<ul class="fa-ul ml-3">

					<li class="mb-3">
						<span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Montpellier, 34000, FR</span>
					</li>
					<li class="mb-3">
						<span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">info@example.com</span>
					</li>
					<li class="mb-3">
						<span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+33 6 33 33 33 33</span>
					</li>
					<li class="mb-3">
						<span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+33 4 33 33 33 33</span>
					</li>

				</ul>

			</div>
		</div>
		<div class="row bg-custom">

			<div class="col-12 text-center">
				<h5 class="text-uppercase">Nos partenaires</h5>
			</div>

		</div>

		<!-- Widget Partenaires -->
		<div class="row bg-grey pt-4">
			<?php
			get_sidebar();
			?>
		</div>

		<!-- Copyright -->
		<div class="row bg-custom justify-content-center">

			<div class="text-center p-3 ">
				© 2021 Copyright:
				<a class="text-white" href="https://mdbootstrap.com/">SunPower.com</a>
			</div>

		</div>

	</div>
</footer>
<?php wp_footer(); ?>
</body><!-- #page -->


</html>