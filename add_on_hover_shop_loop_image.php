<?php
// Shop loop product image hover change with another on gallery image

function add_on_hover_shop_loop_image() {
    $image_id = wc_get_product()->get_gallery_image_ids();
    if ( $image_id) {
        echo wp_get_attachment_image( $image_id[1] ) ;
    } 
	else {  //assuming not all products have galleries set
        echo wp_get_attachment_image( wc_get_product()->get_image_id() ) ; 
    }
}
add_action( 'woocommerce_before_shop_loop_item_title', 'add_on_hover_shop_loop_image' ); 


// Required CSS

ul.products li.product a img:nth-of-type(2) {
    display: none;
}
ul.products li.product a:hover img:nth-of-type(2) {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

// or below CSS

ul.products li.product a img+img {
    display: none;
}
ul.products li.product a:hover img+img {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}
