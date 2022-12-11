<?php
/**
 * Theme Plugins
 */
namespace App;
require_once __DIR__ . '/../plugins/activation/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', function(){
    $download_url = 'https://modysolutions.com/repository/';
    $plugins = array(
        array(
            'name'   => 'Advanced Custom Fields Pro',
            'slug'   => 'advanced-custom-fields-pro',
            'source' => "{$download_url}advanced-custom-fields-pro.zip",
        ),
        array(
            'name' => 'Post SMTP',
            'slug' => 'post-smtp',
        ),
        array(
            'name' => 'Really Simple SSL',
            'slug' => 'really-simple-ssl',
        ),
        array(
            'name' => 'Custom post types UI',
            'slug' => 'custom-post-type-ui',
        ),
        array(
            'name' => 'JWT Authentication',
            'slug' => 'jwt-authentication-for-wp-rest-api',
        ),
    );

    $config = array(
        'id'           => 'maxi',
        'default_path' => '',
        'menu'         => 'phy-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => false,
        'is_automatic' => true,
        'message'      => '',
    );
    tgmpa( $plugins, $config );
} );
