// Product review Star Reting Founction

function emerce_get_star_rating($r_count = '')
{
    global $woocommerce, $product;
    $average = $product->get_average_rating();

    echo '<div class="star-rating"> '. $r_count .' <span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
}
add_action('woocommerce_after_shop_loop_item', 'emerce_get_star_rating' );



// Function Uses into product loop
<?php emerce_get_star_rating('(' . $product->get_review_count() . ')'); ?>
