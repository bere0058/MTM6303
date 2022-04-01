<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Assg2.
 */

?>

<div class="section-container no-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact.jpg">
            </div>
            <div class="col-xs-12">

                <div class="row">
                    <div class="col-md-6">
                        <?php the_content()?>
                    </div>


                    <div class="col-md-5 col-md-offset-1">
                            
                        <h3>Head Office</h3>
                        
                        <div>
                            <p>1385 Woodroffe Ave<br/>Nepean, ON K2G</p>
                        </div>
                        <div>
                          <p>contact@mybusiness.com<br>+331 45 31 64 32</p>
                        </div>

                        <div class="mapouter">
                          <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                              src="https://maps.google.com/maps?q=Algonquin%20college%20Campus&t=&z=13&ie=UTF8&iwloc=&output=embed"
                              frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                            <style>
                              .mapouter {
                                position: relative;
                                text-align: right;
                                height: 300px;
                                width: 100%;
                              }
                              .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 300px;
                                width: 100%;
                              }
                            </style>
                          </div>
                        </div>
                    
                        <div>
                            <h3>Employment</h3>
                        </div>
                        <div>
                            <p>To apply for a job with our team, please feel free to send us your Linkedin profile link
                                ou CV to : employment@mybusiness.com</p>
                        </div>
                       
                    </div>
                </div>


            </div>

        </div>

    </div>
</div>