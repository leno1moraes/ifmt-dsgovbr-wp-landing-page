<?php

require get_template_directory() . '/assets/customizer.php';

function ifmtwp_land_scripts(){
    
    wp_enqueue_style('ifmtwp-carousel', 'https://getbootstrap.com/docs/5.2/examples/carousel/');

    wp_enqueue_style('ifmtwp-bootstrapcss', get_template_directory_uri() . '/bootstrap/assets/dist/css/bootstrap.min.css');

    wp_enqueue_style('ifmtwp-googleapis', 'https://fonts.googleapis.com');

    wp_enqueue_style('ifmtwp-gstatic', 'https://fonts.gstatic.com');
    
    wp_enqueue_style('ifmtwp-OpenSans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap');
    
    wp_enqueue_style('ifmtwp-carouselcss', get_template_directory_uri() . '/style-owner/carousel.css');

    wp_enqueue_script('ifmtwp-bootstrapjs', get_template_directory_uri(). '/bootstrap/assets/dist/js/bootstrap.bundle.min.js', array(), '1.0', true);    
    //wp_enqueue_style('', '');
        
}
add_action( 'wp_enqueue_scripts', 'ifmtwp_land_scripts' );


function ifmtwp_land_config(){
    //4
    add_theme_support('post-thumbnails');

    //5
    add_theme_support('automatic-feed-links');

    //6
    add_theme_support( 'title-tag' );

    //7
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action('after_setup_theme', 'ifmtwp_land_config', 0);


add_action('widgets_init', 'ifmtwp_land_sidebars');
function ifmtwp_land_sidebars(){

    register_sidebar(
        array(
            'name' => 'Instituicao 1',
            'id' => 'instituicao-1',
            'description' => 'Instituição 1',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );     
    
    register_sidebar(
        array(
            'name' => 'Instituicao 2',
            'id' => 'instituicao-2',
            'description' => 'Instituição 2',
            'before_widget' => '',
            'after_widget' => '',             
        )
    ); 
    
    register_sidebar(
        array(
            'name' => 'Instituicao 3',
            'id' => 'instituicao-3',
            'description' => 'Instituição 3',
            'before_widget' => '',
            'after_widget' => '',             
        )
    ); 
    
    register_sidebar(
        array(
            'name' => 'Instituicao 4',
            'id' => 'instituicao-4',
            'description' => 'Instituição 4',
            'before_widget' => '',
            'after_widget' => '',             
        )
    ); 
    
    register_sidebar(
        array(
            'name' => 'Instituicao 5',
            'id' => 'instituicao-5',
            'description' => 'Instituição 5',
            'before_widget' => '',
            'after_widget' => '',             
        )
    ); 
    
    register_sidebar(
        array(
            'name' => 'Instituicao 6',
            'id' => 'instituicao-6',
            'description' => 'Instituição 6',
            'before_widget' => '',
            'after_widget' => '',             
        )
    ); 
    
    register_sidebar(
        array(
            'name' => 'Instituicao 7',
            'id' => 'instituicao-7',
            'description' => 'Instituição 7',
            'before_widget' => '',
            'after_widget' => '',             
        )
    ); 
    
    register_sidebar(
        array(
            'name' => 'Instituicao 8',
            'id' => 'instituicao-8',
            'description' => 'Instituição 8',
            'before_widget' => '',
            'after_widget' => '',             
        )
    ); 
    
    register_sidebar(
        array(
            'name' => 'Instituicao 9',
            'id' => 'instituicao-9',
            'description' => 'Instituição 9',
            'before_widget' => '',
            'after_widget' => '',             
        )
    ); 
    
    register_sidebar(
        array(
            'name' => 'Instituicao 10',
            'id' => 'instituicao-10',
            'description' => 'Instituição 10',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );

    /********************************************************** */
    register_sidebar(
        array(
            'name' => 'Instituicao 11',
            'id' => 'instituicao-11',
            'description' => 'Instituição 11',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );        

    register_sidebar(
        array(
            'name' => 'Instituicao 12',
            'id' => 'instituicao-12',
            'description' => 'Instituição 12',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );  
    
    register_sidebar(
        array(
            'name' => 'Instituicao 13',
            'id' => 'instituicao-13',
            'description' => 'Instituição 13',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );  
    
    register_sidebar(
        array(
            'name' => 'Instituicao 14',
            'id' => 'instituicao-14',
            'description' => 'Instituição 14',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );  
    
    register_sidebar(
        array(
            'name' => 'Instituicao 15',
            'id' => 'instituicao-15',
            'description' => 'Instituição 15',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );  
    
    register_sidebar(
        array(
            'name' => 'Instituicao 16',
            'id' => 'instituicao-16',
            'description' => 'Instituição 16',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );  
    
    register_sidebar(
        array(
            'name' => 'Instituicao 17',
            'id' => 'instituicao-17',
            'description' => 'Instituição 17',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );  
    
    register_sidebar(
        array(
            'name' => 'Instituicao 18',
            'id' => 'instituicao-18',
            'description' => 'Instituição 18',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );  
    
    register_sidebar(
        array(
            'name' => 'Instituicao 19',
            'id' => 'instituicao-19',
            'description' => 'Instituição 19',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );  
    
    register_sidebar(
        array(
            'name' => 'Instituicao 20',
            'id' => 'instituicao-20',
            'description' => 'Instituição 20',
            'before_widget' => '',
            'after_widget' => '',             
        )
    );      

}


if ( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
        do_action( 'wp_body_open' );
    }
}
