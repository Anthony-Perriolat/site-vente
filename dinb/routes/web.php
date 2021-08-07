<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of thephp -S localhost:8000 -t public routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'Controller@home');
$router->get('/realisation', 'Controller@realisation');
$router->get('/equipe', 'Controller@equipe');
$router->get('/contact', 'Controller@contact');
$router->get('/item1', 'Controller@item1');
$router->get('/item2', 'Controller@item2');
$router->get('/item3', 'Controller@item3');
$router->get('/item4', 'Controller@item4');
