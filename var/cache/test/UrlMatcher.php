<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/login_check' => [[['_route' => 'login_check', '_controller' => 'App\\Controller\\SecurityController::loginCheck'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logoutCheck'], null, null, null, false, false, null]],
        '/tasks' => [[['_route' => 'task_list', '_controller' => 'App\\Controller\\TaskController::listAction'], null, null, null, false, false, null]],
        '/tasks/create' => [[['_route' => 'task_create', '_controller' => 'App\\Controller\\TaskController::createAction'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::listAction'], null, null, null, false, false, null]],
        '/users/create' => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\UserController::createAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/tasks/([^/]++)/(?'
                    .'|edit(*:30)'
                    .'|toggle(*:43)'
                    .'|delete(*:56)'
                .')'
                .'|/users/([^/]++)/edit(*:84)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'task_edit', '_controller' => 'App\\Controller\\TaskController::editAction'], ['id'], null, null, false, false, null]],
        43 => [[['_route' => 'task_toggle', '_controller' => 'App\\Controller\\TaskController::toggleTaskAction'], ['id'], null, null, false, false, null]],
        56 => [[['_route' => 'task_delete', '_controller' => 'App\\Controller\\TaskController::deleteTaskAction'], ['id'], null, null, false, false, null]],
        84 => [
            [['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::editAction'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
