<?php


use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/index',function($routes){
    $routes->connect('/', ['controller'=>'Index']);
});

Router::scope('/recipe', function($routes){
    $routes->connect('/', ['controller' => 'recipe']);
});

Router::scope('/recipe/:id', function($routes){
    $routes->connect('/', ['controller' => 'recipe', 'action' => 'view'],
        ['id' => '\d+', 'pass'=>['id']]
    );
});

Router::scope('/', function (RouteBuilder $routes) {

    $routes->connect('/', ['controller' => 'Index', 'home']);

    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    $routes->fallbacks('DashedRoute');
});


Plugin::routes();
