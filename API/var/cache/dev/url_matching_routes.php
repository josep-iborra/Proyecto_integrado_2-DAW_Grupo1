<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/addMensaje' => [[['_route' => 'add_mensaje', '_controller' => 'App\\Controller\\MensajesController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/mensaje' => [[['_route' => 'get_all_mensajes', '_controller' => 'App\\Controller\\MensajesController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/addProduct' => [[['_route' => 'add_Product', '_controller' => 'App\\Controller\\ProductosController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/product' => [[['_route' => 'get_all_products', '_controller' => 'App\\Controller\\ProductosController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/addUser' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UsuariosController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/user' => [[['_route' => 'get_all_users', '_controller' => 'App\\Controller\\UsuariosController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|mensaje/([^/]++)(?'
                        .'|(*:69)'
                    .')'
                    .'|product/([^/]++)(?'
                        .'|(*:96)'
                        .'|(*:103)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:128)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [
            [['_route' => 'get_one_mensaje', '_controller' => 'App\\Controller\\MensajesController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_mensaje', '_controller' => 'App\\Controller\\MensajesController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_mensaje', '_controller' => 'App\\Controller\\MensajesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        96 => [
            [['_route' => 'get_one_product', '_controller' => 'App\\Controller\\ProductosController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_product', '_controller' => 'App\\Controller\\ProductosController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductosController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        103 => [[['_route' => 'get_msg_between_contacts', '_controller' => 'App\\Controller\\ProductosController::getByCategoria'], ['categoria'], ['GET' => 0], null, false, true, null]],
        128 => [
            [['_route' => 'get_one_user', '_controller' => 'App\\Controller\\UsuariosController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_user', '_controller' => 'App\\Controller\\UsuariosController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_user', '_controller' => 'App\\Controller\\UsuariosController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
