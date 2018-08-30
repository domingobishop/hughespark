<div class="container">
    <div class="row">
        <?php
        $html = '<div class="promo-area clearfix"><div class="promo-content">';

        for ( $i=1 ; $i<=3 ; $i++ ) {

            $img = get_option('promo_img_'.$i);
            $lbl = get_option('promo_lbl_'.$i);
            $txt = get_option('promo_txt_'.$i);
            $url = get_option('promo_url_'.$i);

            $html .= '<div class="col-md-4">';
            $html .= '<a href="' . $url . '">';
            $html .= '<img src="' . $img . '" alt="' . $lbl . '" class="img-responsive">';
            $html .= '<h3>' . $lbl . '</h3>';
            $html .= '</a>';
            $html .= '<p>' . $txt . '</p>';
            $html .= '</div>';
        }

        $html .= '</div></div>';

        echo $html;
        ?>
    </div>
</div>
