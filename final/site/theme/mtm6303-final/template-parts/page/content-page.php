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
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
               <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>">
            </div>
        </div>
    </div>
</div>

<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <h1><?php the_title() ;?></h1>
                     </div>   
                        <p class="section-container-spacer">
                            <?php the_content() ;?>
                        </p>
               </div>
            </div>
    </div>
</div>