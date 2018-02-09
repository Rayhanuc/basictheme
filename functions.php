<?php

add_action('after_setup_theme', 'theme_setup');
function theme_setup(){

	add_theme_support('title-tag');
	add_theme_support('custom-header',array(
		'default-image' => get_template_directory_uri().'/images/bagoni.png',

	));
	add_theme_support('custom-background');

	add_theme_support('post-thumbnails');

	load_theme_textdomain('basictheme',get_template_directory().'/language');

	register_nav_menu('main-menu',__('Main Menu','basictheme') );

	register_post_type('basic-testimonial',array(
			'labels' => array(
			'name' => 'Testimonials',
			'add_new_item' => 'Add New Testimonials',
			// 'view_item' => 'View Testimonials', 
			'edit_item' => 'Edit Testimonial',

		),
		'public' => true,
		'menu_icon' => 'dashicons-carrot',
		'menu_position' => 4,
		'supports' => array('title','thumbnail'),
	));
}

add_action('wp_enqueue_scripts','basic_theme_style');
function basic_theme_style () {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css');
}

add_action('widgets_init', function(){
	register_sidebar(array(
	'name' => 'Right Sidebar',
	'description' => 'Keep Your Right Sidebar Widget Here',
	'id' => 'right-sidebar',
	'before_widget' => '<section class="right-sidebar">',
	'after_widget' => '</section>',
	'before_title' => '<div class="contentTitle">',
	'after_title' => '</div>',

));

});


// add_action('admin_enqueue_scripts','admin_basic_theme_style');
// function admin_basic_theme_style() {
// 	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css');
// }

//cmb2 adding

if(file_exists(dirname(__FILE__).'/metabox/init.php')){
	require_once(dirname(__FILE__).'/metabox/init.php');
}


if(file_exists(dirname(__FILE__).'/metabox/custom-metabox.php')){
	require_once(dirname(__FILE__).'/metabox/custom-metabox.php');
}

//class-2 of tbtd
add_shortcode( 'ami', 'output_shortcode' );

function output_shortcode($first,$content){

	$output = shortcode_atts(array(
		"kalar" => 'red',
		"kondika" => '',
		"f_size" => '',
		"margin" => '',


		),$first);
	extract($output);

	return "<h1 style='text-align:".$kondika."; color:".$kalar."; font-size:".$f_size.";'>".do_shortcode($content)."</h1>";
}

add_shortcode( 'abar', function(){
	return "<h1>Output</h1>";
} );

if (function_exists('kc_add_map')) 
{ 
kc_add_map(array(
	'team' => array(
		'name' =>'TF TEAM',
		'category' => 'TF',
		'icon' => 'fa fa-facebook',
		'params' => array(
			array(
			'name' => 'name',
			'type' => 'text',
			'label' => 'name'
		)
		)
	)
));
}


add_shortcode( 'team', 'team_shortcode' );

function team_shortcode($first,$second){
	$output = shortcode_atts(array(
		'name' => '',

		),$first);
		extract($output);
			?>

	  <div class="column">
	    <div class="card">
	      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
	      <div class="container">
	        <h2><?php echo $output ['name'];?></h2>
	        <p class="title">CEO & Founder</p>
	        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
	        <p>example@example.com</p>
	        <p><button class="button">Contact</button></p>
	      </div>
	    </div>
	  </div>

<?php }







add_filter( 'widget_text', 'do_shortcode' );



add_shortcode( 'testimonial', function (){
?>

<?php ob_start();?>
<div class="contentBox">
  	<div class="innerBox">

	<?php

	$testimonial = new WP_Query(array(
		'post_type' => 'basic-testimonial',
		'post_per_page' => 1,
	));

	?>
	<?php while($testimonial->have_posts()):$testimonial->the_post();?>

	<h2><?php the_title();?></h2>
	<p><?php the_post_thumbnail();?></p>
	<p><?php echo get_post_meta(get_the_id(),'desig',true);?></p>
	<p><?php echo get_post_meta(get_the_id(),'text-box',true);?></p>

	<?php endwhile;?>
	</div>
</div>

<?php return ob_get_clean();?>

<?php });



?>

<!-- class TF-3 done -->