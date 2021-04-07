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
        '/ajax_add_one_artist' => [[['_route' => 'app_ajax_addoneartist', '_controller' => 'App\\Controller\\AjaxController::addOneArtist'], null, null, null, false, false, null]],
        '/ajax_delete_one_artist' => [[['_route' => 'app_ajax_deleteoneartist', '_controller' => 'App\\Controller\\AjaxController::deleteOneArtist'], null, null, null, false, false, null]],
        '/ajax_add_one_production' => [[['_route' => 'app_ajax_addoneproduction', '_controller' => 'App\\Controller\\AjaxController::addOneProduction'], null, null, null, false, false, null]],
        '/ajax_delete_one_production' => [[['_route' => 'app_ajax_deleteoneproduction', '_controller' => 'App\\Controller\\AjaxController::deleteOneProduction'], null, null, null, false, false, null]],
        '/ajax_add_one_style' => [[['_route' => 'app_ajax_addonestyle', '_controller' => 'App\\Controller\\AjaxController::addOneStyle'], null, null, null, false, false, null]],
        '/ajax_delete_one_style' => [[['_route' => 'app_ajax_deleteonestyle', '_controller' => 'App\\Controller\\AjaxController::deleteOneStyle'], null, null, null, false, false, null]],
        '/ajax_delete_one_disk' => [[['_route' => 'app_ajax_deleteonedisk', '_controller' => 'App\\Controller\\AjaxController::deleteOneDisk'], null, null, null, false, false, null]],
        '/ajax_set_my_username' => [[['_route' => 'app_ajax_setmyusername', '_controller' => 'App\\Controller\\AjaxController::setMyUserName'], null, null, null, false, false, null]],
        '/artists' => [[['_route' => 'artists', '_controller' => 'App\\Controller\\ArtistController::artists'], null, null, null, false, false, null]],
        '/artists/add' => [[['_route' => 'add_artist', '_controller' => 'App\\Controller\\ArtistController::add'], null, null, null, false, false, null]],
        '/conditions' => [[['_route' => 'conditions', '_controller' => 'App\\Controller\\ConditionsController::index'], null, null, null, false, false, null]],
        '/disks' => [[['_route' => 'disks', '_controller' => 'App\\Controller\\DiskController::disks'], null, null, null, false, false, null]],
        '/disks/add' => [[['_route' => 'add_disk', '_controller' => 'App\\Controller\\DiskController::add'], null, null, null, false, false, null]],
        '/productions' => [[['_route' => 'productions', '_controller' => 'App\\Controller\\ProductionController::labels'], null, null, null, false, false, null]],
        '/productions/add' => [[['_route' => 'add_production', '_controller' => 'App\\Controller\\ProductionController::add'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/confirm_email' => [[['_route' => 'confirm_email', '_controller' => 'App\\Controller\\RegistrationController::confirmEmail'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/styles' => [[['_route' => 'styles', '_controller' => 'App\\Controller\\StyleController::styles'], null, null, null, false, false, null]],
        '/styles/add' => [[['_route' => 'add_style', '_controller' => 'App\\Controller\\StyleController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\SumupController::home'], null, null, null, false, false, null]],
        '/import' => [[['_route' => 'import', '_controller' => 'App\\Controller\\SumupController::import'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/artists/(?'
                    .'|([^/]++)(*:189)'
                    .'|set/([^/]++)(*:209)'
                .')'
                .'|/disks/(?'
                    .'|([^/]++)(*:236)'
                    .'|set/([^/]++)(*:256)'
                .')'
                .'|/productions/(?'
                    .'|([^/]++)(*:289)'
                    .'|set/([^/]++)(*:309)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:354)'
                .'|/styles/(?'
                    .'|set/([^/]++)(*:385)'
                    .'|([^/]++)(*:401)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:427)'
                    .'|delete/([^/]++)(*:450)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'artist', '_controller' => 'App\\Controller\\ArtistController::artist'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'set_artist', '_controller' => 'App\\Controller\\ArtistController::setArtist'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        236 => [[['_route' => 'disk', '_controller' => 'App\\Controller\\DiskController::disk'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'set_disk', '_controller' => 'App\\Controller\\DiskController::setDisk'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        289 => [[['_route' => 'production', '_controller' => 'App\\Controller\\ProductionController::production'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'set_production', '_controller' => 'App\\Controller\\ProductionController::setProduction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        354 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        385 => [[['_route' => 'set_style', '_controller' => 'App\\Controller\\StyleController::setStyle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        401 => [[['_route' => 'style', '_controller' => 'App\\Controller\\StyleController::style'], ['id'], ['GET' => 0], null, false, true, null]],
        427 => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::displayUser'], ['id'], ['GET' => 0], null, false, true, null]],
        450 => [
            [['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
