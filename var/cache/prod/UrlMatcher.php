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
        '/ajax_set_my_username' => [[['_route' => 'app_ajax_setmyusername', '_controller' => 'App\\Controller\\AjaxController::setMyUserName'], null, null, null, false, false, null]],
        '/artists' => [[['_route' => 'artists', '_controller' => 'App\\Controller\\ArtistController::artists'], null, null, null, false, false, null]],
        '/artists/add' => [[['_route' => 'add_artist', '_controller' => 'App\\Controller\\ArtistController::add'], null, null, null, false, false, null]],
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
        '/conditions' => [[['_route' => 'conditions', '_controller' => 'App\\Controller\\StaticController::conditions'], null, null, null, false, false, null]],
        '/privacy' => [[['_route' => 'privacy', '_controller' => 'App\\Controller\\StaticController::privacy'], null, null, null, false, false, null]],
        '/legal' => [[['_route' => 'legal', '_controller' => 'App\\Controller\\StaticController::legal'], null, null, null, false, false, null]],
        '/styles' => [[['_route' => 'styles', '_controller' => 'App\\Controller\\StyleController::styles'], null, null, null, false, false, null]],
        '/styles/add' => [[['_route' => 'add_style', '_controller' => 'App\\Controller\\StyleController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\SumupController::home'], null, null, null, false, false, null]],
        '/import' => [[['_route' => 'import', '_controller' => 'App\\Controller\\SumupController::import'], null, null, null, false, false, null]],
        '/empty_counter' => [[['_route' => 'empty_counter', '_controller' => 'App\\Controller\\UserController::emptyCounter'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/reset\\-password/reset(?:/([^/]++))?(*:188)'
                .'|/styles/(?'
                    .'|set/([^/]++)(*:219)'
                    .'|([^/]++)(*:235)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:261)'
                    .'|delete/([^/]++)(*:284)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'artist', '_controller' => 'App\\Controller\\ArtistController::artist'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'set_artist', '_controller' => 'App\\Controller\\ArtistController::setArtist'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        72 => [[['_route' => 'disk', '_controller' => 'App\\Controller\\DiskController::disk'], ['id'], ['GET' => 0], null, false, true, null]],
        91 => [[['_route' => 'set_disk', '_controller' => 'App\\Controller\\DiskController::setDisk'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        123 => [[['_route' => 'production', '_controller' => 'App\\Controller\\ProductionController::production'], ['id'], ['GET' => 0], null, false, true, null]],
        143 => [[['_route' => 'set_production', '_controller' => 'App\\Controller\\ProductionController::setProduction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        188 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        219 => [[['_route' => 'set_style', '_controller' => 'App\\Controller\\StyleController::setStyle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        235 => [[['_route' => 'style', '_controller' => 'App\\Controller\\StyleController::style'], ['id'], ['GET' => 0], null, false, true, null]],
        261 => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::displayUser'], ['id'], ['GET' => 0], null, false, true, null]],
        284 => [
            [['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
