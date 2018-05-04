<?php
/**
 * Config genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

return [
    
    'sitename' => "LaraAdmin 1.0",
    'sitename2' => ["Lara", "Admin 1.0"],
    'sitedesc' => "LaraAdmin is a better and smoother way to manage Projects, Clients, Revenue and all the other aspects of Small & Medium Businesses.",
    
    'adminRoute' => 'admin',
    
    /*
    |--------------------------------------------------------------------------
    | ナビゲーションメニュー
    |--------------------------------------------------------------------------
    */
    'logo_lg'   => '<b>EC SITE</b> 管理画面',
    'logo_mini' => '<b>EC</b>',

    /*
    |--------------------------------------------------------------------------
    | AdminLTE Theme
    |--------------------------------------------------------------------------
    |
    | You will be able to decide easily which theme you want to load for the
    | AdminLTE Dashboard template. There are multiple colors to choose from
    | that are already pre-built, or you can create your own as well. The
    | following themes are available by default:
    |
    | - skin-black-light
    | - skin-black
    | - skin-blue-light
    | - skin-blue
    | - skin-green-light
    | - skin-green
    | - skin-purple-light
    | - skin-purple
    | - skin-red-light
    | - skin-red
    | - skin-yellow-light
    | - skin-yellow
    |
    */
    'theme_adminlte' => 'skin-white',
    'theme_icheck' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Uploads Configuration
    |--------------------------------------------------------------------------
    |
    | private_uploads: Show that uploaded file remains private and can be seen by respective owners only
    | default_uploads_security: public / private
    | 
    */
    'uploads' => [
        'private_uploads' => false,
        'default_public' => false,
        'allow_filename_change' => true
    ],
];
