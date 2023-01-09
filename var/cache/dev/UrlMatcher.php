<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/login_check' => [[['_route' => 'login_check', '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheck'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'AppBundle\\Controller\\SecurityController::logoutCheck'], null, null, null, false, false, null]],
        '/tasks' => [[['_route' => 'task_list', '_controller' => 'AppBundle\\Controller\\TaskController::listAction'], null, null, null, false, false, null]],
        '/tasks/create' => [[['_route' => 'task_create', '_controller' => 'AppBundle\\Controller\\TaskController::createAction'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'user_list', '_controller' => 'AppBundle\\Controller\\UserController::listAction'], null, null, null, false, false, null]],
        '/users/create' => [[['_route' => 'user_create', '_controller' => 'AppBundle\\Controller\\UserController::createAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/tasks/([^/]++)/(?'
                    .'|edit(*:191)'
                    .'|toggle(*:205)'
                    .'|delete(*:219)'
                .')'
                .'|/users/([^/]++)/edit(*:248)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        191 => [[['_route' => 'task_edit', '_controller' => 'AppBundle\\Controller\\TaskController::editAction'], ['id'], null, null, false, false, null]],
        205 => [[['_route' => 'task_toggle', '_controller' => 'AppBundle\\Controller\\TaskController::toggleTaskAction'], ['id'], null, null, false, false, null]],
        219 => [[['_route' => 'task_delete', '_controller' => 'AppBundle\\Controller\\TaskController::deleteTaskAction'], ['id'], null, null, false, false, null]],
        248 => [
            [['_route' => 'user_edit', '_controller' => 'AppBundle\\Controller\\UserController::editAction'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
