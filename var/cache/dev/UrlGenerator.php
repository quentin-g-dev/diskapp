<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
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
    'conditions' => [[], ['_controller' => 'App\\Controller\\ConditionsController::index'], [], [['text', '/conditions']], [], []],
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
    'styles' => [[], ['_controller' => 'App\\Controller\\StyleController::styles'], [], [['text', '/styles']], [], []],
    'add_style' => [[], ['_controller' => 'App\\Controller\\StyleController::add'], [], [['text', '/styles/add']], [], []],
    'set_style' => [['id'], ['_controller' => 'App\\Controller\\StyleController::setStyle'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/styles/set']], [], []],
    'style' => [['id'], ['_controller' => 'App\\Controller\\StyleController::style'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/styles']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\SumupController::home'], [], [['text', '/']], [], []],
    'import' => [[], ['_controller' => 'App\\Controller\\SumupController::import'], [], [['text', '/import']], [], []],
    'user' => [['id'], ['_controller' => 'App\\Controller\\UserController::displayUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'delete_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::deleteUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/delete']], [], []],
];
