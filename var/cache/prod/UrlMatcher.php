<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/entrar' => [[['_route' => 'entrar', '_controller' => 'App\\Controller\\DashboardController::entrar'], null, null, null, false, false, null]],
        '/dashboard/editar' => [[['_route' => 'editar_talleres', '_controller' => 'App\\Controller\\DashboardController::editar'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'inicio', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/salvar/articulo' => [[['_route' => 'articulo_nuevo', '_controller' => 'App\\Controller\\DefaultController::salvar'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
