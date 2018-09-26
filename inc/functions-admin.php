<?php
/**
 * Admin
 *
 */

function hp_settings() {
    add_menu_page('Hughes Park theme settings', 'Hughes Park', 'administrator', 'hughes-park', 'hp_settings_page', 'dashicons-admin-generic', 21);
}

function hp_settings_data() {
    register_setting('hp_settings_group', 'hp_facebook');
    register_setting('hp_settings_group', 'hp_twitter');
    register_setting('hp_settings_group', 'hp_address_1');
    register_setting('hp_settings_group', 'hp_address_2');
    register_setting('hp_settings_group', 'hp_tel');
    register_setting('hp_settings_group', 'hp_email');

    register_setting('hp_settings_group', 'header_img');
    register_setting('hp_settings_group', 'slider_img_1');
    register_setting('hp_settings_group', 'slider_img_2');
    register_setting('hp_settings_group', 'slider_img_3');
    register_setting('hp_settings_group', 'footer_img');

    for ( $i=1 ; $i<=3 ; $i++ ) {
        register_setting('hp_settings_group', 'promo_img_'.$i);
        register_setting('hp_settings_group', 'promo_lbl_'.$i);
        register_setting('hp_settings_group', 'promo_txt_'.$i);
        register_setting('hp_settings_group', 'promo_url_'.$i);
    }
}

function hp_settings_page()
{
    // admin
    ?>
    <style>
        .hp-admin input[type=text] {
            width: 100%;
            max-width: 320px;
        }
        .hp-admin textarea {
            width: 100%;
            max-width: 320px;
            height: 12em;
        }
    </style>
    <div class="hp-admin wrap">
        <h1>Theme settings</h1>

        <form method="post" action="options.php" novalidate="novalidate">
            <?php settings_fields( 'hp_settings_group' ); ?>
            <?php do_settings_sections( 'hp_settings_group' ); ?>
            <table class="form-table">
                <h3>Contact details</h3>
                <tr valign="top">
                    <th scope="row"><label for="hp_facebook">Facebook</label></th>
                    <td><input type="text" name="hp_facebook" value="<?php echo esc_attr( get_option('hp_facebook') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="hp_twitter">Twitter</label></th>
                    <td><input type="text" name="hp_twitter" value="<?php echo esc_attr( get_option('hp_twitter') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="hp_tel">Contact number</label></th>
                    <td><input type="text" name="hp_tel" value="<?php echo esc_attr( get_option('hp_tel') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="hp_address_1">Address line 1</label></th>
                    <td><input type="text" name="hp_address_1" value="<?php echo esc_attr( get_option('hp_address_1') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="hp_address_2">Address line 2</label></th>
                    <td><input type="text" name="hp_address_2" value="<?php echo esc_attr( get_option('hp_address_2') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="hp_email">Email</label></th>
                    <td><input type="text" name="hp_email" value="<?php echo esc_attr( get_option('hp_email') ); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
            <table class="form-table">
                <h3>Homapage images</h3>
                <p>Copy/paste the image URL from the Media Library. Please crop images with the focus is in the centre.</p>
                <tr valign="top">
                    <th scope="row"><label for="slider_img_1">Slider image 1</label></th>
                    <td><input type="text" name="slider_img_1" value="<?php echo esc_attr( get_option('slider_img_1') ); ?>" /></td>
                    <td>Image size 1600px x 750px</td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="slider_img_2">Slider image 2</label></th>
                    <td><input type="text" name="slider_img_2" value="<?php echo esc_attr( get_option('slider_img_2') ); ?>" /></td>
                    <td>Image size 1600px x 750px</td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="slider_img_3">Slider image 3</label></th>
                    <td><input type="text" name="slider_img_3" value="<?php echo esc_attr( get_option('slider_img_3') ); ?>" /></td>
                    <td>Image size 1600px x 750px</td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="footer_img">Footer image</label></th>
                    <td><input type="text" name="footer_img" value="<?php echo esc_attr( get_option('footer_img') ); ?>" /></td>
                    <td>Image size 1600px x 750px</td>
                </tr>
            </table>
            <?php submit_button(); ?>
            <table class="form-table">
                <h3>Promotional area</h3>
                <p>Copy/paste the image URL from the Media Library.</p>
                <?php for ( $i=1 ; $i<=3 ; $i++ ) { ?>
                    <tr valign="top">
                        <th scope="row">Section <?php echo $i; ?></th>
                        <td></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label for="promo_img_<?php echo $i; ?>">Image</label></th>
                        <td><input type="text" name="promo_img_<?php echo $i; ?>" value="<?php echo esc_attr( get_option('promo_img_'.$i) ); ?>" /></td>
                        <td>Image size 480px x 480px</td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label for="promo_lbl_<?php echo $i; ?>">Label</label></th>
                        <td><input type="text" name="promo_lbl_<?php echo $i; ?>" value="<?php echo esc_attr( get_option('promo_lbl_'.$i) ); ?>" /></td>
                        <td></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label for="promo_txt_<?php echo $i; ?>">Description</label></th>
                        <td><input type="text" name="promo_txt_<?php echo $i; ?>" value="<?php echo esc_attr( get_option('promo_txt_'.$i) ); ?>" /></td>
                        <td></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label for="promo_url_<?php echo $i; ?>">Link</label></th>
                        <td><input type="text" name="promo_url_<?php echo $i; ?>" value="<?php echo esc_attr( get_option('promo_url_'.$i) ); ?>" /></td>
                        <td></td>
                    </tr>
                <?php } ?>
            </table>
            <?php submit_button(); ?>
        </form>

    </div>
    <?php
}