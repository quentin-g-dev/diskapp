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
        '/artists' => [[['_route' => 'app_artist_artists', '_controller' => 'App\\Controller\\ArtistController::artists'], null, null, null, false, false, null]],
        '/artists/add' => [[['_route' => 'app_artist_add', '_controller' => 'App\\Controller\\ArtistController::add'], null, null, null, false, false, null]],
        '/disks' => [[['_route' => 'app_disk_disks', '_controller' => 'App\\Controller\\DiskController::disks'], null, null, null, false, false, null]],
        '/disks/add' => [[['_route' => 'app_disk_add', '_controller' => 'App\\Controller\\DiskController::add'], null, null, null, false, false, null]],
        '/productions' => [[['_route' => 'app_production_labels', '_controller' => 'App\\Controller\\ProductionController::labels'], null, null, null, false, false, null]],
        '/productions/add' => [[['_route' => 'app_production_add', '_controller' => 'App\\Controller\\ProductionController::add'], null, null, null, false, false, null]],
        '/styles' => [[['_route' => 'app_style_styles', '_controller' => 'App\\Controller\\StyleController::styles'], null, null, null, false, false, null]],
        '/styles/add' => [[['_route' => 'app_style_add', '_controller' => 'App\\Controller\\StyleController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_sumup_home', '_controller' => 'App\\Controller\\SumupController::home'], null, null, null, false, false, null]],
        '/import' => [[['_route' => 'app_sumup_import', '_controller' => 'App\\Controller\\SumupController::import'], null, null, null, false, false, null]],
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
                .'|/styles/(?'
                    .'|set/([^/]++)(*:341)'
                    .'|([^/]++)(*:357)'
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
        189 => [[['_route' => 'app_artist_artist', '_controller' => 'App\\Controller\\ArtistController::artist'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'app_artist_setartist', '_controller' => 'App\\Controller\\ArtistController::setArtist'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        236 => [[['_route' => 'app_disk_disk', '_controller' => 'App\\Controller\\DiskController::disk'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'app_disk_setdisk', '_controller' => 'App\\Controller\\DiskController::setDisk'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        289 => [[['_route' => 'app_production_production', '_controller' => 'App\\Controller\\ProductionController::production'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'app_production_setproduction', '_controller' => 'App\\Controller\\ProductionController::setProduction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        341 => [[['_route' => 'app_style_setstyle', '_controller' => 'App\\Controller\\StyleController::setStyle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        357 => [
            [['_route' => 'app_style_style', '_controller' => 'App\\Controller\\StyleController::style'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
