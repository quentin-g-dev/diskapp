<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_ajax_addoneartist' => [[], ['_controller' => 'App\\Controller\\AjaxController::addOneArtist'], [], [['text', '/ajax_add_one_artist']], [], []],
    'app_ajax_deleteoneartist' => [[], ['_controller' => 'App\\Controller\\AjaxController::deleteOneArtist'], [], [['text', '/ajax_delete_one_artist']], [], []],
    'app_ajax_addoneproduction' => [[], ['_controller' => 'App\\Controller\\AjaxController::addOneProduction'], [], [['text', '/ajax_add_one_production']], [], []],
    'app_ajax_deleteoneproduction' => [[], ['_controller' => 'App\\Controller\\AjaxController::deleteOneProduction'], [], [['text', '/ajax_delete_one_production']], [], []],
    'app_ajax_addonestyle' => [[], ['_controller' => 'App\\Controller\\AjaxController::addOneStyle'], [], [['text', '/ajax_add_one_style']], [], []],
    'app_ajax_deleteonestyle' => [[], ['_controller' => 'App\\Controller\\AjaxController::deleteOneStyle'], [], [['text', '/ajax_delete_one_style']], [], []],
    'app_ajax_deleteonedisk' => [[], ['_controller' => 'App\\Controller\\AjaxController::deleteOneDisk'], [], [['text', '/ajax_delete_one_disk']], [], []],
    'app_artist_artists' => [[], ['_controller' => 'App\\Controller\\ArtistController::artists'], [], [['text', '/artists']], [], []],
    'app_artist_add' => [[], ['_controller' => 'App\\Controller\\ArtistController::add'], [], [['text', '/artists/add']], [], []],
    'app_artist_artist' => [['id'], ['_controller' => 'App\\Controller\\ArtistController::artist'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/artists']], [], []],
    'app_artist_setartist' => [['id'], ['_controller' => 'App\\Controller\\ArtistController::setArtist'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/artists/set']], [], []],
    'app_disk_disks' => [[], ['_controller' => 'App\\Controller\\DiskController::disks'], [], [['text', '/disks']], [], []],
    'app_disk_add' => [[], ['_controller' => 'App\\Controller\\DiskController::add'], [], [['text', '/disks/add']], [], []],
    'app_disk_disk' => [['id'], ['_controller' => 'App\\Controller\\DiskController::disk'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/disks']], [], []],
    'app_disk_setdisk' => [['id'], ['_controller' => 'App\\Controller\\DiskController::setDisk'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/disks/set']], [], []],
    'app_production_labels' => [[], ['_controller' => 'App\\Controller\\ProductionController::labels'], [], [['text', '/productions']], [], []],
    'app_production_add' => [[], ['_controller' => 'App\\Controller\\ProductionController::add'], [], [['text', '/productions/add']], [], []],
    'app_production_production' => [['id'], ['_controller' => 'App\\Controller\\ProductionController::production'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/productions']], [], []],
    'app_production_setproduction' => [['id'], ['_controller' => 'App\\Controller\\ProductionController::setProduction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/productions/set']], [], []],
    'app_style_styles' => [[], ['_controller' => 'App\\Controller\\StyleController::styles'], [], [['text', '/styles']], [], []],
    'app_style_add' => [[], ['_controller' => 'App\\Controller\\StyleController::add'], [], [['text', '/styles/add']], [], []],
    'app_style_setstyle' => [['id'], ['_controller' => 'App\\Controller\\StyleController::setStyle'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/styles/set']], [], []],
    'app_style_style' => [['id'], ['_controller' => 'App\\Controller\\StyleController::style'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/styles']], [], []],
    'app_sumup_home' => [[], ['_controller' => 'App\\Controller\\SumupController::home'], [], [['text', '/']], [], []],
    'app_sumup_import' => [[], ['_controller' => 'App\\Controller\\SumupController::import'], [], [['text', '/import']], [], []],
];