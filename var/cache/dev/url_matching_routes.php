<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/consent' => [[['_route' => 'consent', '_controller' => 'App\\Controller\\ConsentController::help'], null, ['GET' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactPageController::contact'], null, ['GET' => 0], null, false, false, null]],
        '/password-reset' => [[['_route' => 'password', '_controller' => 'App\\Controller\\ForgotPasswordController::contact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/edit_material/([^/]++)(*:65)'
                .'|/all_materials/([^/]++)(*:95)'
                .'|/profile/([^/]++)(*:119)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'edit_material', '_controller' => 'App\\Controller\\MaterialEditController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        95 => [[['_route' => 'single_material_category', '_controller' => 'App\\Controller\\MaterialSingleSubjectController::homepage'], ['subject'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        119 => [
            [['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::profile'], ['name'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
