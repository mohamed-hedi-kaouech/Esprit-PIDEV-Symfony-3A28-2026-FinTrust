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
        '/' => [[['_route' => 'app', '_controller' => 'App\\Controller\\LandingPage::index'], null, null, null, false, false, null]],
        '/loan/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\LoanController\\AdminLoanController::dashboard'], null, null, null, false, false, null]],
        '/loan/simulator' => [[['_route' => 'loan_simulator', '_controller' => 'App\\Controller\\LoanController\\LoanSimulatorController::simulator'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/loan/preview' => [[['_route' => 'loan_preview', '_controller' => 'App\\Controller\\LoanController\\LoanSimulatorController::preview'], null, ['GET' => 0], null, false, false, null]],
        '/loan/confirm' => [[['_route' => 'loan_confirm', '_controller' => 'App\\Controller\\LoanController\\LoanSimulatorController::confirm'], null, ['POST' => 0], null, false, false, null]],
        '/loan/my-loans' => [[['_route' => 'loan_my_loans', '_controller' => 'App\\Controller\\LoanController\\UserLoanController::myLoans'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/loan/(?'
                    .'|admin/loan/([^/]++)/(?'
                        .'|approve(*:241)'
                        .'|re(?'
                            .'|ject(*:258)'
                            .'|view(*:270)'
                            .'|payments(*:286)'
                        .')'
                    .')'
                    .'|(\\d+)/details(*:309)'
                    .'|repayment/(\\d+)/pay(*:336)'
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
        241 => [[['_route' => 'admin_loan_approve', '_controller' => 'App\\Controller\\LoanController\\AdminLoanController::approveLoan'], ['id'], ['POST' => 0], null, false, false, null]],
        258 => [[['_route' => 'admin_loan_reject', '_controller' => 'App\\Controller\\LoanController\\AdminLoanController::rejectLoan'], ['id'], ['POST' => 0], null, false, false, null]],
        270 => [[['_route' => 'admin_loan_review', '_controller' => 'App\\Controller\\LoanController\\AdminLoanController::reviewLoan'], ['id'], null, null, false, false, null]],
        286 => [[['_route' => 'admin_loan_repayments', '_controller' => 'App\\Controller\\LoanController\\AdminLoanController::viewRepayments'], ['id'], null, null, false, false, null]],
        309 => [[['_route' => 'loan_user_details', '_controller' => 'App\\Controller\\LoanController\\UserLoanController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        336 => [
            [['_route' => 'loan_repayment_pay', '_controller' => 'App\\Controller\\LoanController\\UserLoanController::payRepayment'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
