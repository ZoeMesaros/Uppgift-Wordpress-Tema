<?php
//Theme Options
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails', array('post', 'page'));


wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.1, true);

//Menus
function register_menus()
{
    register_nav_menus(

        array(
            'top-menu' => 'Top Menu Location',
            'footer-menu' => 'Footer Menu Location'

        )
    );
}
add_action('init', 'register_menus');


//Sidebar
function my_sidebars()
{
    register_sidebar(
        array(
            'name' => __('Primary Sidebar'),
            'id' => 'sidebar-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Secondary Sidebar'),
            'id' => 'sidebar-2',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action('widgets_init', 'my_sidebars');

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(
        array(
            'page_title' => 'Theme General Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        )
    );

    acf_add_options_sub_page(
        array(
            'page_title' => 'Theme Header Settings',
            'menu_title' => 'Header',
            'parent_slug' => 'theme-general-settings',
        )
    );

    acf_add_options_sub_page(
        array(
            'page_title' => 'Theme Footer Settings',
            'menu_title' => 'Footer',
            'parent_slug' => 'theme-general-settings',
        )
    );

}

?>