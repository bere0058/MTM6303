<?php 
/*
Template Name: Contact Page
*/

get_header();
?>

<main>
    <?php 
        while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/page/content', 'contact' );
        endwhile;
    ?>
</main>
<?php get_footer();?>