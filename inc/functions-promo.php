<?php

// Shortcode [promo]
function promo_area( $atts ){

    $html = '<div class="promo-area clearfix"><div class="promo-content">';

    for ( $i=1 ; $i<=3 ; $i++ ) {

        $img = get_option('promo_img_'.$i);
        $txt = get_option('promo_txt_'.$i);
        $url = get_option('promo_url_'.$i);

        $html .= '<div class="col-md-4">';
        $html .= '<a href="' . $url . '">';
        $html .= '<img src="' . $img . '" alt="' . $txt . '">';
        $html .= '<h3>' . $txt . '</h3>';
        $html .= '</a>';
        $html .= '</div>';
    }

    $html .= '</div></div>';

    return $html;
}
