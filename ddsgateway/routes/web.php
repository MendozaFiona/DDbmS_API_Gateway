<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    return $router->app->version();
});

$router->group(['middleware' => 'client.credentials'],function() use ($router){

    //SITE 1
    $router->get('/users1', 'User1Controller@getUsers'); //all users of site 1
    $router->post('/users1', 'User1Controller@createUser'); //add new users to site 1
    $router->get('/users1/{id}', 'User1Controller@findUser'); //find specific user site 1
    $router->put('/users1/{id}', 'User1Controller@updateUser'); //update user info site 1
    $router->delete('/users1/{id}', 'User1Controller@deleteUser'); //delete user site 1


    //SITE 2
    $router->get('/users2', 'User2Controller@getUsers'); //all users of site 2
    $router->post('/users2', 'User2Controller@createUser'); //add new users to site 2
    $router->get('/users2/{id}', 'User2Controller@findUser'); //find specific user site 2
    $router->put('/users2/{id}', 'User2Controller@updateUser'); //update user info site 2
    $router->delete('/users2/{id}', 'User2Controller@deleteUser'); //delete user site 2

});