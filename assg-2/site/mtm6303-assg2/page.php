<?php 
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Assg-2
 */

get_header();
?>

<main>
    <?php 
        while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/page/content', 'page' );
        endwhile;
    ?>
</main>
<?php get_footer();?>