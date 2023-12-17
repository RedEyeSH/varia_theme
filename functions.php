<!-- l stands for load. (l = load) -->
<?php 
    // connecting bootstrap
    function l_bootstrap() {
        wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), false, "all");
        wp_enqueue_style("bootstrap");
    }

    add_action('wp_enqueue_scripts', 'l_bootstrap')
?>

<?php
    // Connecting css
    function l_css() {
        wp_register_style("style", get_template_directory_uri() . "/style.css", array(), false, "all");
        wp_enqueue_style("style");
    }

    add_action('wp_enqueue_scripts', 'l_css');  
?>

<?php

    // TBC
    // wp_register_menu(); 
    // add_theme_support('menus');      

    register_nav_menus(array(
        'top-menu-list' => 'top-menu-links',
        'footer-menu-list' => 'footer-menu-links'
    ));

    // add_theme_support("post-thumbnails")
?>

<?php 
    function general_support() {
        add_theme_support("post-thumbnails");
        add_image_size("mountain", 100, 90, true);
    }
    add_action("after_setup_theme", "general_support");
?>

