<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/addEmpresa' => [[['_route' => 'add_empresa', '_controller' => 'App\\Controller\\EmpresaController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/empresas' => [[['_route' => 'get_all_empresas', '_controller' => 'App\\Controller\\EmpresaController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/addMensaje' => [[['_route' => 'add_mensaje', '_controller' => 'App\\Controller\\MensajesController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/mensaje' => [[['_route' => 'get_all_mensajes', '_controller' => 'App\\Controller\\MensajesController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/addProduct' => [[['_route' => 'add_Product', '_controller' => 'App\\Controller\\ProductosController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/product' => [[['_route' => 'get_all_products', '_controller' => 'App\\Controller\\ProductosController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/addUser' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/user' => [[['_route' => 'get_all_users', '_controller' => 'App\\Controller\\UserController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|empresa(?'
                        .'|/([^/]++)(?'
                            .'|(*:72)'
                        .')'
                        .'|User/([^/]++)(*:93)'
                    .')'
                    .'|mensaje/([^/]++)(?'
                        .'|(*:120)'
                    .')'
                    .'|product/([^/]++)(?'
                        .'|(*:148)'
                        .'|(*:156)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:181)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [
            [['_route' => 'get_one_empresa', '_controller' => 'App\\Controller\\EmpresaController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_empresa', '_controller' => 'App\\Controller\\EmpresaController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_empresa', '_controller' => 'App\\Controller\\EmpresaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        93 => [[['_route' => 'get_one_empresa_by_userId', '_controller' => 'App\\Controller\\EmpresaController::getByUID'], ['id'], ['GET' => 0], null, false, true, null]],
        120 => [
            [['_route' => 'get_one_mensaje', '_controller' => 'App\\Controller\\MensajesController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_mensaje', '_controller' => 'App\\Controller\\MensajesController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_mensaje', '_controller' => 'App\\Controller\\MensajesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        148 => [
            [['_route' => 'get_one_product', '_controller' => 'App\\Controller\\ProductosController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_product', '_controller' => 'App\\Controller\\ProductosController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductosController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        156 => [[['_route' => 'get_msg_between_contacts', '_controller' => 'App\\Controller\\ProductosController::getByCategoria'], ['categoria'], ['GET' => 0], null, false, true, null]],
        181 => [
            [['_route' => 'get_one_user', '_controller' => 'App\\Controller\\UserController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_user', '_controller' => 'App\\Controller\\UserController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
