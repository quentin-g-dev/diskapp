<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/artists/(?'
                    .'|([^/]++)(*:27)'
                    .'|set/([^/]++)(*:46)'
                .')'
                .'|/disks/(?'
                    .'|([^/]++)(*:72)'
                    .'|set/([^/]++)(*:91)'
                .')'
                .'|/productions/(?'
                    .'|([^/]++)(*:123)'
                    .'|set/([^/]++)(*:143)'
                .')'
                .'|/styles/(?'
                    .'|set/([^/]++)(*:175)'
                    .'|([^/]++)(*:191)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_artist_artist', '_controller' => 'App\\Controller\\ArtistController::artist'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'app_artist_setartist', '_controller' => 'App\\Controller\\ArtistController::setArtist'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        72 => [[['_route' => 'app_disk_disk', '_controller' => 'App\\Controller\\DiskController::disk'], ['id'], ['GET' => 0], null, false, true, null]],
        91 => [[['_route' => 'app_disk_setdisk', '_controller' => 'App\\Controller\\DiskController::setDisk'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        123 => [[['_route' => 'app_production_production', '_controller' => 'App\\Controller\\ProductionController::production'], ['id'], ['GET' => 0], null, false, true, null]],
        143 => [[['_route' => 'app_production_setproduction', '_controller' => 'App\\Controller\\ProductionController::setProduction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        175 => [[['_route' => 'app_style_setstyle', '_controller' => 'App\\Controller\\StyleController::setStyle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        191 => [
            [['_route' => 'app_style_style', '_controller' => 'App\\Controller\\StyleController::style'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
