<?php
/**
 * Main template file.
 * 
 * @package ITService
 */

get_header();
?>

<?php get_template_part('template-parts/hero/hero');?>
<?php get_template_part('template-parts/features/features');?>
<?php get_template_part('template-parts/features/stages');?>
<?php get_template_part('template-parts/contact/contact');?>

<?php
get_footer();
?>