<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::plugin(
    'Admin',
    ['path' => '/admin'],
    function (RouteBuilder $routes) {
    	$routes->connect('/', ['controller' => 'Index', 'action' => 'index']);
        $routes->fallbacks(DashedRoute::class);
    }
);

