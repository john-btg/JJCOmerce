<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/products' => [[['_route' => 'products_list', '_controller' => 'App\\Controller\\APICatalogController::listAllProduct'], null, ['GET' => 0], null, false, false, null]],
        '/api/product' => [[['_route' => 'NouveauProduit', '_controller' => 'App\\Controller\\APICatalogController::addProduct'], null, ['POST' => 0], null, false, false, null]],
        '/api/orders' => [[['_route' => 'orderAll', '_controller' => 'App\\Controller\\APIOrderController::getOrder'], null, ['GET' => 0], null, false, false, null]],
        '/api/cart' => [[['_route' => 'getCart', '_controller' => 'App\\Controller\\APIShoppingCartController::getCart'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/api/user' => [[['_route' => 'infoUser', '_controller' => 'App\\Controller\\APIUserController::listAllProduct'], null, ['GET' => 0], null, false, false, null]],
        '/api/login' => [
            [['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null],
            [['_route' => 'api_login_check'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/api/register' => [[['_route' => 'Register', '_controller' => 'App\\Controller\\RegisterController::register'], null, ['POST' => 0, 'HEAD' => 1], null, false, false, null]],
        '/verifyEmail' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegisterController::verifyUserEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|product/([^/]++)(?'
                        .'|(*:69)'
                        .'|(*:76)'
                        .'|(*:83)'
                    .')'
                    .'|order/([^/]++)(*:105)'
                    .'|cart/(?'
                        .'|([^/]++)(?'
                            .'|(*:132)'
                        .')'
                        .'|validate(*:149)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [[['_route' => 'getProduct', '_controller' => 'App\\Controller\\APICatalogController::getProduct'], ['productId'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'ModifieProduct', '_controller' => 'App\\Controller\\APICatalogController::ModifieProduct'], ['id'], ['PUT' => 0], null, false, true, null]],
        83 => [[['_route' => 'delProduct', '_controller' => 'App\\Controller\\APICatalogController::delProduct'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        105 => [[['_route' => 'order', '_controller' => 'App\\Controller\\APIOrderController::getSpecificOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        132 => [
            [['_route' => 'addCart', '_controller' => 'App\\Controller\\APIShoppingCartController::addShoppingCart'], ['productId'], ['PUT' => 0, 'HEAD' => 1], null, false, true, null],
            [['_route' => 'deleteCart', '_controller' => 'App\\Controller\\APIShoppingCartController::delShoppingCart'], ['productId'], ['DELETE' => 0, 'HEAD' => 1], null, false, true, null],
        ],
        149 => [
            [['_route' => 'delCart', '_controller' => 'App\\Controller\\APIShoppingCartController::validate'], [], ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
