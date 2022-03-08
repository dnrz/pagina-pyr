<?php

function init_template(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme','init_template');

function assets(){
    //wp_register_style('bootstrapcs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', '','5.0.1','all');
    wp_register_style('bootstrapcs', get_template_directory_uri( ) . '/css/bootstrap.css', '','5.0.1','all');
    wp_register_style('poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap', '','1.0','all');
    wp_register_style('icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', '','1.0','all');
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrapcs','poppins','icons'), '1.0', 'all');
    wp_enqueue_style('fonts','https://fonts.gstatic.com','','1.0','all');
    wp_enqueue_script('kit', 'https://kit.fontawesome.com/c0b03f5830.js', '', '1.0', false);
    wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js','','5.0.1', true);
    wp_enqueue_script( 'appjs', get_template_directory_uri( ) . '/js/app.js', array('bootstrapjs'), '1.0', true );
}

add_action('wp_enqueue_scripts', 'assets');

function register_my_menus(){
    register_nav_menus(
        array(
            'top_menu' => __( 'Menú Principal' )
       )  
    );
}
add_action ('init', 'register_my_menus');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/walker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function widgets(){
    register_sidebar( array(
        'id' => 'widgets-derecha',
        'name' => __( 'Widgets Derecha' ),
        'description' => __( 'Arrastra lo que quieras' ),
        'before_widget' => '<div class="card mb-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title'   => '</h4><hr>'

    ));
}

add_action( 'widgets_init', 'widgets' );