<?php

add_action( 'wp_enqueue_scripts', 'silvella_enqueue_parent_styles' );

function silvella_enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


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