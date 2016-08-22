<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'Freeradius',
    ['path' => '/Freeradius'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);