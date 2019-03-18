//Custom blocks using ACF
add_action('acf/init', 'my_acf_init');
function my_acf_init() {

  // check function exists
  if( function_exists('acf_register_block') ) {

    acf_register_block(array(
      'name'  => 'featured-business',
      'title' => __('Featured Business'),
      'description' => __('A block that displays the selected business.'),
      'render_callback' => 'my_acf_block_render_callback',
      'category'  => 'formatting',
      'icon'  => 'admin-comments',
      'keywords'  => array('custom post type', 'custom post'),
    ));
  }
}

function my_acf_block_render_callback( $block ) {

  // convert name ("acf/featured-business") into path friendly slug ("featured-business")
  $slug = str_replace('acf/', '', $block['name']);

  // include a template part from within the "template-parts/block" folder
  if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
    include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
  }
}
