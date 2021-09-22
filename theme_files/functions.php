<?php
// register enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'silvella_enqueue_parent_styles' );

function silvella_enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

    function silvella_styles_child()
    {
    // Register Child Styles
    wp_register_style('child-all', get_stylesheet_directory_uri() . '/css/all.css', array(), '1.0', 'all');

    // Enqueue Child Styles
    wp_enqueue_style('child-all');

    //Register Child Scripts
    //wp_register_script( 'theme-script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ) );
    
    // Enqueue Child Scripts
    //wp_enqueue_script( 'theme-script' );   
}
add_action('wp_enqueue_scripts', 'silvella_styles_child', 20); // Add Theme Child Stylesheet





//Get price for product posts

add_shortcode( 'the_price', 'silvella_get_product_post_price' );
function silvella_get_product_post_price(  ) {
    
    $price = '';
    $price .= '<div class="item-price-outer">';
    $price .= '<div class="item-price">';
    $price .= '<div>Price: ';
    $price .= '<span> €';
    $price .= get_post_meta( get_the_ID(), $key = 'item_price', $single = true );
    $price .= '</span>';
    $price .= '</div>';
    $price .= '</div>';
    $price .= '</div>';

    return $price;
}