<?php
// *** ============================================= ***
// *** ALL Menu Register Funtion and condition Start ***
// *** ============================================= ***
register_nav_menus(array(
    'primary_menu' => 'primary menu',
    'footer_menu' => 'footer menu',
));
    function callback(){ ?>
            <ul>
                <li><a href="<?php echo esc_url(site_url()); ?>/wp-admin/nav-menus.php?action=edit&menu=0">Creat new menu</a></li>
            </ul>
    <?php
    };
        if (!file_exists(get_template_directory() . '/wp-bootstrap-navwalker.php')) {
            // File does not exist... return an error.
            return new WP_Error('wp-bootstrap-navwalker-missing', __('It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
        } else {
            // File exists... require it.
            require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
        };
//  ***   =============================================   ***
//  ***   ALL Menu Register Funtion and condition End     ***
//  ***   =============================================   ***