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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/categorie' => [[['_route' => 'admin_categorie_index', '_controller' => 'App\\Controller\\Admin\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categorie/new' => [[['_route' => 'admin_categorie_new', '_controller' => 'App\\Controller\\Admin\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/item' => [[['_route' => 'admin_item_index', '_controller' => 'App\\Controller\\Admin\\ItemController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/item/new' => [[['_route' => 'admin_item_new', '_controller' => 'App\\Controller\\Admin\\ItemController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\Front\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\Front\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/item' => [[['_route' => 'app_item_index', '_controller' => 'App\\Controller\\Front\\ItemController::index'], null, ['GET' => 0], null, true, false, null]],
        '/item/new' => [[['_route' => 'app_item_new', '_controller' => 'App\\Controller\\Front\\ItemController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app', '_controller' => 'App\\Controller\\LandingPage::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|categorie/([^/]++)(?'
                        .'|(*:233)'
                        .'|/edit(*:246)'
                        .'|(*:254)'
                    .')'
                    .'|item/([^/]++)(?'
                        .'|(*:279)'
                        .'|/edit(*:292)'
                        .'|(*:300)'
                    .')'
                .')'
                .'|/categorie/([^/]++)(?'
                    .'|(*:332)'
                    .'|/edit(*:345)'
                    .'|(*:353)'
                .')'
                .'|/item/([^/]++)(?'
                    .'|(*:379)'
                    .'|/edit(*:392)'
                    .'|(*:400)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        233 => [[['_route' => 'admin_categorie_show', '_controller' => 'App\\Controller\\Admin\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        246 => [[['_route' => 'admin_categorie_edit', '_controller' => 'App\\Controller\\Admin\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        254 => [[['_route' => 'admin_categorie_delete', '_controller' => 'App\\Controller\\Admin\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        279 => [[['_route' => 'admin_item_show', '_controller' => 'App\\Controller\\Admin\\ItemController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        292 => [[['_route' => 'admin_item_edit', '_controller' => 'App\\Controller\\Admin\\ItemController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [[['_route' => 'admin_item_delete', '_controller' => 'App\\Controller\\Admin\\ItemController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        332 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\Front\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        345 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\Front\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        353 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\Front\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        379 => [[['_route' => 'app_item_show', '_controller' => 'App\\Controller\\Front\\ItemController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        392 => [[['_route' => 'app_item_edit', '_controller' => 'App\\Controller\\Front\\ItemController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [
            [['_route' => 'app_item_delete', '_controller' => 'App\\Controller\\Front\\ItemController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
