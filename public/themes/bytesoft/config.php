<?php

use Botble\Shortcode\View\View;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
            $theme->setTitle('Copyright ©  2018 - Bytesoft.vn');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function($theme)
        {
            /**
            *
            * Include Css
            *
            **/
            $theme->asset()->usePath()->add('bootstrap', 'css/bootstrap.css');
            $theme->asset()->usePath()->add('font-awesome', 'css/font-awesome.css');
            $theme->asset()->usePath()->add('animate', 'css/animate.css');
            $theme->asset()->usePath()->add('aos', 'css/aos.css');
            $theme->asset()->usePath()->add('slick', 'css/slick.css');
            $theme->asset()->usePath()->add('slick-theme', 'css/slick-theme.css', array('slick'));
            $theme->asset()->usePath()->add('style', 'css/style.min.css');
            $theme->asset()->usePath()->add('sweetalert2', 'css/sweetalert2.min.css');
            $theme->asset()->usePath()->add('main', 'css/main.css');
            


            /**
            *
            * Include Js
            *
            **/

            $theme->asset()->container('footer')->usePath()->add('jquery', 'js/jquery-3.2.1.js');
            $theme->asset()->container('footer')->usePath()->add('bootstrap', 'js/bootstrap.js');
            $theme->asset()->container('footer')->usePath()->add('aos', 'js/aos.js');
            $theme->asset()->container('footer')->usePath()->add('slick', 'js/slick.js');
            $theme->asset()->container('footer')->usePath()->add('sweetalert2', 'js/sweetalert2.min.js');
            $theme->asset()->container('footer')->usePath()->add('main', 'js/main.js');

            /**
            *
            * Include Short code to index, page, category, post
            *
            **/

            $theme->composer(['index', 'page', 'post'], function(View $view) {
                $view->withShortcodes();
            });
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
