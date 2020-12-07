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
        '/admin/admin' => [[['_route' => 'admin_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/categorie/ajout' => [[['_route' => 'categorie_ajout', '_controller' => 'App\\Controller\\Admin\\AdminController::ajouterCategorie'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_aff_user', '_controller' => 'App\\Controller\\Admin\\AdminController::affUser'], null, null, null, false, false, null]],
        '/admin/inscription/solo' => [[['_route' => 'admin_aff_inscription_solo', '_controller' => 'App\\Controller\\Admin\\AdminController::affInscriptionSolo'], null, null, null, false, false, null]],
        '/admin/categorie/admin/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categorieadmin/ajouter-categorie' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/rgpd' => [[['_route' => 'rgpd', '_controller' => 'App\\Controller\\HomeController::rgpd'], null, null, null, false, false, null]],
        '/creer-compte' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'account_edit', '_controller' => 'App\\Controller\\RegistrationController::editAccount'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profile/mon-compte' => [[['_route' => '_app_user_account', '_controller' => 'App\\Controller\\User\\UserController::getInfosUser'], null, null, null, false, false, null]],
        '/profile/modifier-compte' => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\User\\UserController::editUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/inscription/solo' => [[['_route' => 'inscription_solo', '_controller' => 'App\\Controller\\User\\UserController::infosInscriptionSolo'], null, null, null, false, false, null]],
        '/profile/inscription/solo/edit' => [[['_route' => 'inscription_solo_edit', '_controller' => 'App\\Controller\\User\\UserController::inscriptionSolo'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/inscription/solo/minscrire' => [[['_route' => 'inscription_solo_ajout', '_controller' => 'App\\Controller\\User\\UserController::inscriptionSolo'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|user/([^/]++)(?'
                        .'|(*:195)'
                        .'|/sup(*:207)'
                    .')'
                    .'|inscription/solo/([^/]++)/(?'
                        .'|edit(*:249)'
                        .'|delete(*:263)'
                    .')'
                    .'|categorieadmin/categorie/([^/]++)(?'
                        .'|(*:308)'
                        .'|/edit(*:321)'
                        .'|(*:329)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:375)'
                .'|/profile/inscription/solo/([^/]++)/delete(*:424)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        207 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteUser'], ['id'], ['SUP' => 0], null, false, false, null]],
        249 => [[['_route' => 'admin_inscription_solo_edit', '_controller' => 'App\\Controller\\Admin\\AdminController::editInscriptionSolo'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'admin_inscription_solo_delete', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteInscriptionSolo'], ['id'], ['SUPSOLO' => 0], null, false, false, null]],
        308 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        321 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        329 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        375 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        424 => [
            [['_route' => 'inscription_solo_delete', '_controller' => 'App\\Controller\\User\\UserController::deleteInscriptionSolo'], ['id'], ['SUPUSERSOLO' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
