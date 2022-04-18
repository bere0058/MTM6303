<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Final
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
    get_header();
?>

<main class="wrap">
    <?php 
        while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/page/content', 'home' );
        endwhile;
    ?>
</main>

<?php get_footer(); ?>