<?php function new_excerpt_length($length) {
 return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');
?>

<?php
add_theme_support( 'post-thumbnails' );

add_action('init', 'my_custom_init');
function my_custom_init()
{
/* notre code PHP pour rajouter les custom post type */
register_post_type('projet', array(
  'label' => __('Projets'),
  'singular_label' => __('Projet'),
  'public' => true,
  'show_ui' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'supports' => array('title', 'excerpt', 'thumbnail')
));


}
function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
?>
