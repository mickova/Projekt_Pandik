<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/help' => [[['_route' => 'help', '_controller' => 'App\\Controller\\HelpPageController::help'], null, ['GET' => 0], null, false, false, null]],
        '/homepage' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomePageController::homepage'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginFormController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\LogoutController::logout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/material' => [[['_route' => 'material2', '_controller' => 'App\\Controller\\MaterialFormController::material'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/all_materials' => [[['_route' => 'all_materials', '_controller' => 'App\\Controller\\MaterialPageController::homepage'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'my_profile', '_controller' => 'App\\Controller\\ProfileController::my_profile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterFormController::test'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/settings' => [[['_route' => 'settings', '_controller' => 'App\\Controller\\SettingFormController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'welcome_page', '_controller' => 'App\\Controller\\WelcomePageController::homepage'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/profile/([^/]++)(*:59)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [
            [['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::profile'], ['name'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
