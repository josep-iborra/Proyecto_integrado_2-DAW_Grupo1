<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/addCategoria' => [[['_route' => 'add_categoria', '_controller' => 'App\\Controller\\CategoriasController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/categorias' => [[['_route' => 'get_all_categorias', '_controller' => 'App\\Controller\\CategoriasController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/addEmpresa' => [[['_route' => 'add_empresa', '_controller' => 'App\\Controller\\EmpresaController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/empresas' => [[['_route' => 'get_all_empresas', '_controller' => 'App\\Controller\\EmpresaController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/addMensaje' => [[['_route' => 'add_mensaje', '_controller' => 'App\\Controller\\MensajesController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/mensaje' => [[['_route' => 'get_all_mensajes', '_controller' => 'App\\Controller\\MensajesController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/addProduct' => [[['_route' => 'add_Product', '_controller' => 'App\\Controller\\ProductosController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/product' => [[['_route' => 'get_all_products', '_controller' => 'App\\Controller\\ProductosController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/subcategorias' => [[['_route' => 'get_all_subcategorias', '_controller' => 'App\\Controller\\SubcategoriasController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/addUser' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::add'], null, ['POST' => 0], null, false, false, null]],
        '/api/user' => [[['_route' => 'get_all_users', '_controller' => 'App\\Controller\\UserController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|categoria/([^/]++)(?'
                        .'|(*:71)'
                    .')'
                    .'|empresa(?'
                        .'|/([^/]++)(?'
                            .'|(*:101)'
                        .')'
                        .'|User/([^/]++)(*:123)'
                        .'|Cat/([^/]++)(*:143)'
                    .')'
                    .'|mensaje/([^/]++)(?'
                        .'|(*:171)'
                    .')'
                    .'|product/([^/]++)(?'
                        .'|(*:199)'
                        .'|(*:207)'
                    .')'
                    .'|subcategoria(?'
                        .'|/([^/]++)(*:240)'
                        .'|s/([^/]++)(*:258)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:283)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        71 => [
            [['_route' => 'get_one_categoria', '_controller' => 'App\\Controller\\CategoriasController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_categoria', '_controller' => 'App\\Controller\\CategoriasController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_categoria', '_controller' => 'App\\Controller\\CategoriasController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        101 => [
            [['_route' => 'get_one_empresa', '_controller' => 'App\\Controller\\EmpresaController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_empresa', '_controller' => 'App\\Controller\\EmpresaController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_empresa', '_controller' => 'App\\Controller\\EmpresaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        123 => [[['_route' => 'get_one_empresa_by_userId', '_controller' => 'App\\Controller\\EmpresaController::getByUID'], ['id'], ['GET' => 0], null, false, true, null]],
        143 => [[['_route' => 'get_empresa_by_categoria', '_controller' => 'App\\Controller\\EmpresaController::getByCat'], ['id'], ['GET' => 0], null, false, true, null]],
        171 => [
            [['_route' => 'get_one_mensaje', '_controller' => 'App\\Controller\\MensajesController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_mensaje', '_controller' => 'App\\Controller\\MensajesController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_mensaje', '_controller' => 'App\\Controller\\MensajesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        199 => [
            [['_route' => 'get_one_product', '_controller' => 'App\\Controller\\ProductosController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_product', '_controller' => 'App\\Controller\\ProductosController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductosController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        207 => [[['_route' => 'get_msg_between_contacts', '_controller' => 'App\\Controller\\ProductosController::getByCategoria'], ['categoria'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'get_one_subcategoria', '_controller' => 'App\\Controller\\SubcategoriasController::get'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'get_one_subcategoria_by_idCategoria', '_controller' => 'App\\Controller\\SubcategoriasController::getByCat'], ['id'], ['GET' => 0], null, false, true, null]],
        283 => [
            [['_route' => 'get_one_user', '_controller' => 'App\\Controller\\UserController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_user', '_controller' => 'App\\Controller\\UserController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
