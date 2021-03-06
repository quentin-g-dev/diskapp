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
    'app_ajax_setmyusername' => [[], ['_controller' => 'App\\Controller\\AjaxController::setMyUserName'], [], [['text', '/ajax_set_my_username']], [], []],
    'artists' => [[], ['_controller' => 'App\\Controller\\ArtistController::artists'], [], [['text', '/artists']], [], []],
    'add_artist' => [[], ['_controller' => 'App\\Controller\\ArtistController::add'], [], [['text', '/artists/add']], [], []],
    'artist' => [['id'], ['_controller' => 'App\\Controller\\ArtistController::artist'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/artists']], [], []],
    'set_artist' => [['id'], ['_controller' => 'App\\Controller\\ArtistController::setArtist'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/artists/set']], [], []],
    'disks' => [[], ['_controller' => 'App\\Controller\\DiskController::disks'], [], [['text', '/disks']], [], []],
    'add_disk' => [[], ['_controller' => 'App\\Controller\\DiskController::add'], [], [['text', '/disks/add']], [], []],
    'disk' => [['id'], ['_controller' => 'App\\Controller\\DiskController::disk'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/disks']], [], []],
    'set_disk' => [['id'], ['_controller' => 'App\\Controller\\DiskController::setDisk'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/disks/set']], [], []],
    'productions' => [[], ['_controller' => 'App\\Controller\\ProductionController::labels'], [], [['text', '/productions']], [], []],
    'add_production' => [[], ['_controller' => 'App\\Controller\\ProductionController::add'], [], [['text', '/productions/add']], [], []],
    'production' => [['id'], ['_controller' => 'App\\Controller\\ProductionController::production'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/productions']], [], []],
    'set_production' => [['id'], ['_controller' => 'App\\Controller\\ProductionController::setProduction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/productions/set']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'confirm_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::confirmEmail'], [], [['text', '/confirm_email']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/reset-password/reset']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'conditions' => [[], ['_controller' => 'App\\Controller\\StaticController::conditions'], [], [['text', '/conditions']], [], []],
    'privacy' => [[], ['_controller' => 'App\\Controller\\StaticController::privacy'], [], [['text', '/privacy']], [], []],
    'legal' => [[], ['_controller' => 'App\\Controller\\StaticController::legal'], [], [['text', '/legal']], [], []],
    'styles' => [[], ['_controller' => 'App\\Controller\\StyleController::styles'], [], [['text', '/styles']], [], []],
    'add_style' => [[], ['_controller' => 'App\\Controller\\StyleController::add'], [], [['text', '/styles/add']], [], []],
    'set_style' => [['id'], ['_controller' => 'App\\Controller\\StyleController::setStyle'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/styles/set']], [], []],
    'style' => [['id'], ['_controller' => 'App\\Controller\\StyleController::style'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/styles']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\SumupController::home'], [], [['text', '/']], [], []],
    'import' => [[], ['_controller' => 'App\\Controller\\SumupController::import'], [], [['text', '/import']], [], []],
    'user' => [['id'], ['_controller' => 'App\\Controller\\UserController::displayUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'delete_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::deleteUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/delete']], [], []],
    'empty_counter' => [[], ['_controller' => 'App\\Controller\\UserController::emptyCounter'], [], [['text', '/empty_counter']], [], []],
];
