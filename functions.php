<?
function dessertdelightstheme_theme_support(){
    //Add dynamic title tag support
    add_theme_support( 'title-tag' );
    //Able to add logo
    add_theme_support( 'custom-logo' );
    //Able to add feature image in post
    add_theme_support( 'post-thumbnails' );
}
//Hook
add_action('after_setup_theme','dessertdelightstheme_theme_support');
function dessertdelightstheme_theme_menus(){
    $locations=array(
    'primary' =>"Desktop Primary Menu",
    'footer'=>"Footer Menu Items"
    );
    register_nav_menus($locations);
}    
add_action('init','dessertdelightstheme_theme_menus');
function dessertdelightstheme_register_styles(){
    $version=wp_get_theme()->get('Version');
    wp_enqueue_style('dessertdelightstheme-style', get_template_directory_uri()."/style.css",array('dessertdelightstheme-bootstrap'),$version,'all' );
    wp_enqueue_style('dessertdelightstheme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" ,array(),'4.4.1','all' );
    wp_enqueue_style('dessertdelightstheme-fontawesomee', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css",array(),'6.4.0','all' );
}
add_action( 'wp_enqueue_scripts', 'dessertdelightstheme_register_styles' );
//For Script
//True make sure the script is added at the footer
function dessertdelightstheme_register_scripts(){
    wp_enqueue_script('dessertdelightstheme-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js",array(),'3.6.4',true);
    wp_enqueue_script('dessertdelightstheme-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js",array(),'1.12.9',true);
    wp_enqueue_script('dessertdelightstheme-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js",array(),'4.0.0',true);
    wp_enqueue_script('dessertdelightstheme-script', get_template_directory_uri()."/assets/js/main.js",array(),'1.0',true);
}
add_action( 'wp_enqueue_scripts', 'dessertdelightstheme_register_scripts' );

//Add nav-link class to menu anchor
function add_class_to_all_menu_anchors( $atts ) {
    $atts['class'] = 'nav-link text-uppercase pl-4 pr-4';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );
//Add active to menu item
function active_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'active_nav_class' , 10 , 2);

// Sidebar-1 Widgets
function dessertdelightstheme_widget_areas(){
    register_sidebar(
        array(
            'before_title'=>'<h2>',
            'after_title'=>'</h2>',
            'before_widget'=>'',
            'after_widget'=>'',
            'name'=>'Sidebar Area',
            'id'=>'sidebar-1',
            'description'=>'Sidebar Widget Area'
        ),       
    );
    register_sidebar(
        array(
            'before_title'=>'<h2>',
            'after_title'=>'</h2>',
            'before_widget'=>'<div id="recent-posts-list">',
            'after_widget'=>'</div>',
            'name'=>'Search Sidebar Area',
            'id'=>'search-2',
            'description'=>'Search Sidebar Widget Area'
        ),       
    );
    register_sidebar(
        array(
            'before_title'=>'<h2>',
            'after_title'=>'</h2>',
            'before_widget'=>'',
            'after_widget'=>'',
            'name'=>'Search Widget',
            'id'=>'search-1',
            'description'=>'Search Widget Area'
        ),       
    );
}
add_action('widgets_init','dessertdelightstheme_widget_areas');

?>