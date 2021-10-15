<?php

$router->get('/', function () use ($router) {
    return 'Começo URL para acessar API. Framework utilizado -> ' . $router->app->version();
});

$router->get('/crud', function () {
    return view('index');
});

$router->group(['prefix' => 'desenvolvedores'], function() use($router) {

    $router->get('/get', 'DesenvolvedorController@getAll');

    $router->get('/get/{desenvolvedor}', 'DesenvolvedorController@get');

    $router->post('/post', 'DesenvolvedorController@post');

    $router->put('/put/{id}', 'DesenvolvedorController@put');

    $router->delete('/delete/{desenvolvedor}', 'DesenvolvedorController@delete');
});