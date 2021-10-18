<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/manageInstantMessage' => [[['_route' => 'manageMessage', '_controller' => 'App\\Controller\\ChatController::manageInstantMessage'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/room' => [[['_route' => 'room', '_controller' => 'App\\Controller\\RoomController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/chat(?:/([^/]++))?(*:26)'
                .'|/getLastMessages(?:/([^/]++))?(*:63)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:98)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'chat', 'id' => 0, '_controller' => 'App\\Controller\\ChatController::index'], ['id'], null, null, false, true, null]],
        63 => [[['_route' => 'lastMessages', 'idRoom' => 0, '_controller' => 'App\\Controller\\ChatController::getLastMessages'], ['idRoom'], null, null, false, true, null]],
        98 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
