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

$router->get('/', [ 'as' => 'home', function() {
    return view('home', ['isHome' => true]);
}]);
$router->get('/realisation', [ 'as' => 'realisation', function() {
    return view('realisation', ['isHome' => false]);
}]);
//$router->get('/equipe', 'Controller@equipe');
//$router->get('/contact', 'Controller@contact');
$router->get('/item1', [ 'as' => 'item1', function() {
    return view('item1');
}]);
$router->get('/item2', [ 'as' => 'item2', function() {
    return view('item2');
}]);
$router->get('/item3', [ 'as' => 'item3', function() {
    return view('item3');
}]);
$router->get('/item4', [ 'as' => 'item4', function() {
    return view('item4');
}]);
