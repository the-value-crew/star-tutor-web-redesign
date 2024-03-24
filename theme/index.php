<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thestartutor
 */

get_header();

$test_img = thestartutor_get_static_img("test.png");
$stress_img = thestartutor_get_static_img("stress.png");
$intro_img_png = thestartutor_get_static_img("introImage.png");


?>




<?php get_template_part("template-parts/section/section", "hero"); ?>

    <?php get_template_part("template-parts/section/section", "score-card"); ?>

    <?php get_template_part("template-parts/section/section", "intro"); ?>

    <?php get_template_part("template-parts/section/section", "reviews"); ?>

    <?php get_template_part("template-parts/section/section", "value"); ?>

    <?php get_template_part("template-parts/section/section", "stats"); ?>

    <?php get_template_part("template-parts/section/section", "success-stories"); ?>

    <?php get_template_part("template-parts/section/section", "blog"); ?>

    <?php get_template_part("template-parts/section/section", "contact"); ?>

<?php



get_footer();
