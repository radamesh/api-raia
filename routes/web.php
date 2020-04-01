<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version() . " COTAÇÃO DE VIAGEM";
});

/** 
 * GET /quote/GRU/SCL
 * Response
 * {
 *   "route": "GRU,BRC,SCL",
 *   "price": 15  
 * } 
*/
$router->get('/quote', 'CotacaoDeViagemController@quote');

/**
 * POST /route
 * {    
 *   "from": "BRC",      
 *   "to": "BA",     
 *   "price": 10 
 * }
 */
$router->post('/route', 'CotacaoDeViagemController@route');