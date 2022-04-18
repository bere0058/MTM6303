<?php
/**
 * The footer for MTM6303_Final
 *
 * This is the template that displays all of the <footer> section and everything up until </html>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MTM6303_Final
 */
?>
<footer>
    <div class="section-container footer-container">
        <div class="container">
            <div class="row">
                    <div class="col-md-4">
                        <h4>About us</h4>
                        <!-- This would be added Using the Widget Added to Footer Sidebar  -->
                        <?php dynamic_sidebar('mtm6303-sidebar'); ?>
                    </div>

                    <div class="col-md-4">
                        <h4>Do you like ? Share this !</h4>
                        <div>
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'social',
                                'add_li_class'  => 'social-round-icon white-round-icon fa fa-icon',
                                'depth'           => 1,
                                'link_before'     => '<span class="screen-reader-text">',
                                'link_after'      => '</span>',
                                'fallback_cb'     => ''
                                ) );
                            ?>
                        </div>
                        <p><small>© Untitled <?php echo date('Y'); ?>| <a href="http://www.unsplash.com/" class="link-like-text" title="Beautiful Free Images">Unsplash</a></small></p>    
                    </div>

                    <div class="col-md-4">
                        <h4>Subscribe to newsletter</h4>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control footer-input-text">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary btn-newsletter ">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</html>