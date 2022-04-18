<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Final
 */
?>
<div class="col-md-6">
        <h2><a href="<?php echo get_permalink()?>"><?php the_title() ?></a></h2>
                <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>"><br>
        <p><?php the_content() ?></p>
      </div>