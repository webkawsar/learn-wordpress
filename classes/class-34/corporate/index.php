<!doctype html>
<html class="no-js" lang="zxx">
<?php

// access custom header file by name
// get_header("custom");
get_header();

?>

<body>

	<!-- Preloader -->
	<?php get_template_part("template-parts/preloader") ?>
	<!-- End Preloader -->

	<!-- Get Pro Button -->
	<?php get_template_part("template-parts/pro_features") ?>

	<!-- Header Area -->
	<?php get_template_part("template-parts/header_area") ?>
	<!-- End Header Area -->

	<!-- Slider Area -->
	<?php get_template_part("template-parts/slider_area") ?>
	<!--/ End Slider Area -->

	<!-- Start Schedule Area -->
	<?php get_template_part("template-parts/schedule_area") ?>
	<!--/End Start schedule Area -->

	<!-- Start Feautes -->
	<?php get_template_part("template-parts/features_section") ?>
	<!--/ End Feautes -->

	<!-- Start Fun-facts -->
	<?php get_template_part("template-parts/fun_facts") ?>
	<!--/ End Fun-facts -->

	<!-- Start Why choose -->
	<?php get_template_part("template-parts/why_choose") ?>
	<!--/ End Why choose -->

	<!-- Start Call to action -->
	<?php get_template_part("template-parts/cta") ?>
	<!--/ End Call to action -->

	<!-- Start portfolio -->
	<?php get_template_part("template-parts/portfolio") ?>
	<!--/ End portfolio -->

	<!-- Start service -->
	<?php get_template_part("template-parts/services_section") ?>
	<!--/ End service -->

	<!-- Pricing Table -->
	<?php get_template_part("template-parts/pricing") ?>
	<!--/ End Pricing Table -->

	<!-- Start Blog Area -->
	<?php get_template_part("template-parts/blogs") ?>
	<!-- End Blog Area -->

	<!-- Start clients -->
	<?php get_template_part("template-parts/clients") ?>
	<!--/Ens clients -->

	<!-- Start Appointment -->
	<?php get_template_part("template-parts/appointment") ?>
	<!-- End Appointment -->

	<!-- Start Newsletter Area -->
	<?php get_template_part("template-parts/newsletter") ?>
	<!-- /End Newsletter Area -->

	<?php get_footer(); ?>
</body>

</html>