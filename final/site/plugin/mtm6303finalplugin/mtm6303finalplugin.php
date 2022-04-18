<?php
/**
 * @package mtm6303FinalPlugin
 */
/*
Plugin Name: mtm6303 Final Plugin
Plugin URI: http://algonquincollege.com
Description: This is a plugin created to mtm6303 final assignment. Shortcode: <br> [mtm6303finalplugin]
Version: 1.0.0
Author: Guillermo Bereche Chipana
Author URI: http://algonquincollege.com
License: GPLv2 or later
Text Domain: mtm6303FinalPlugin
*/

// Set up plugin function
function mtm6303finalplugin_init() {
}
add_action('init', 'mtm6303finalplugin_init');

// Register Custom Post Type 
function mtm6303finalplugin_register_post_type() {

	$labels = array(
		'name'                  => _x( 'MTM6303 Sliders', 'Post Type General Name', 'mtm6303finalplugin' ),
		'singular_name'         => _x( 'MTM6303 Slider', 'Post Type Singular Name', 'mtm6303finalplugin' ),
		'menu_name'             => __( 'MTM6303 Sliders', 'mtm6303finalplugin' ),
		'name_admin_bar'        => __( 'MTM6303 Sliders', 'mtm6303finalplugin' ),
		'archives'              => __( 'Item Archives', 'mtm6303finalplugin' ),
		'attributes'            => __( 'Item Attributes', 'mtm6303finalplugin' ),
		'parent_item_colon'     => __( 'Parent Item:', 'mtm6303finalplugin' ),
		'all_items'             => __( 'All Items', 'mtm6303finalplugin' ),
		'add_new_item'          => __( 'Add New Item', 'mtm6303finalplugin' ),
		'add_new'               => __( 'Add New', 'mtm6303finalplugin' ),
		'new_item'              => __( 'New Item', 'mtm6303finalplugin' ),
		'edit_item'             => __( 'Edit MTM6303 Slider', 'mtm6303finalplugin' ),
		'update_item'           => __( 'Update MTM6303 Slider', 'mtm6303finalplugin' ),
		'view_item'             => __( 'View MTM6303 Slider', 'mtm6303finalplugin' ),
		'view_items'            => __( 'View MTM6303 Sliders', 'mtm6303finalplugin' ),
		'search_items'          => __( 'Search MTM6303 Slider', 'mtm6303finalplugin' ),
		'not_found'             => __( 'Not found', 'mtm6303finalplugin' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mtm6303finalplugin' ),
		'featured_image'        => __( 'Featured Image', 'mtm6303finalplugin' ),
		'set_featured_image'    => __( 'Set featured image', 'mtm6303finalplugin' ),
		'remove_featured_image' => __( 'Remove featured image', 'mtm6303finalplugin' ),
		'use_featured_image'    => __( 'Use as featured image', 'mtm6303finalplugin' ),
		'insert_into_item'      => __( 'Insert into MTM6303 Slider', 'mtm6303finalplugin' ),
		'uploaded_to_this_item' => __( 'Uploaded to this MTM6303 Slider', 'mtm6303finalplugin' ),
		'items_list'            => __( 'Items list', 'mtm6303finalplugin' ),
		'items_list_navigation' => __( 'Items list navigation', 'mtm6303finalplugin' ),
		'filter_items_list'     => __( 'Filter MTM6303 Sliders list', 'mtm6303finalplugin' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
		'rewrite'				=> array('slug' => 'mtm6303slider'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'			=> true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'sliders', $args );
}
add_action( 'init', 'mtm6303finalplugin_register_post_type', 0);

// Slider code
function mtm6303finalplugin_build_slider() {
	$args = array(
        'post_type'         => 'sliders',
        'posts_per_page'    => -1
	);
	$the_query = new WP_Query( $args );
	$count = 0;
	function wp_total_posts() { 
		$total = wp_count_posts( 'sliders' )->publish;
		echo $total;
		} 
	?>
	<!-- Slideshow container -->
	<section>
		<div class="slideshow-container">
			<?php 
				if($the_query->have_posts())
				{
				while($the_query->have_posts()) { 
					$the_query->the_post();
						$count++;
						?>
							<!-- Full-width images with number and caption text -->
							<div class="mySlides fade">
								<div class="numbertext"><?php echo $count ?> / <?php wp_total_posts(); ?></div>
								<img src="<?php the_post_thumbnail_url(); ?>" style="width:100%">
								<div class="text">
									<p><b><?php the_title() ;?></b></p>
									<p><?php the_content() ;?></p>
								</div>
							</div>
						<?php
					}
				}
			?>
		<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>
		<!-- The dots/circles -->
		<div style="text-align:center">
			<?php
				for($i = 1; $i <= $count; $i++) {
					echo '<span class="dot" onclick="currentSlide('.$i.')"></span>';
				}
			?>
		</div>
	</section>
	<?php
}

// Enqueue styles and scripts
function mtm6303finalplugin_enqueue_my_custom_styles() {
    wp_enqueue_style( 'style', plugins_url( 'slider.css', __FILE__ ) );
    wp_enqueue_script( 'script', plugins_url( 'slider.js', __FILE__ ), [], '1.0.0', true );
}

add_action( 'wp_enqueue_styles',  'mtm6303finalplugin_enqueue_my_custom_styles');

//[shortcode]
function mtm6303finalplugin_func( $atts ){
	return mtm6303finalplugin_build_slider();
}
add_shortcode( 'mtm6303finalplugin', 'mtm6303finalplugin_func' );
?>