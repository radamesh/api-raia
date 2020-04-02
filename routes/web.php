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
 * GET /quote
 * Response ALL
 * {
 *   "from": "GRU",
 *   "to": "BRC",
 *   "price": 15  
 * } 
*/
$router->get('/quote', 'CotacaoDeViagemController@quote');

/** 
 * GET /travel-quote/GRU/SCL
 * Response
 * {
 *   "route": "GRU,BRC,SCL",
 *   "price": 15  
 * } 
*/
$router->get('/travel-quote/{from}/{to}', 'CotacaoDeViagemController@travelQuote');

/**
 * POST /route
 * {    
 *   "from": "BRC",      
 *   "to": "BA",     
 *   "price": 10 
 * }
 */
$router->post('/route', 'CotacaoDeViagemController@route');