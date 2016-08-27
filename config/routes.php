<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'Freeradius',
    ['path' => '/Freeradius'],
    function (RouteBuilder $routes) {
    
//        $routes->connect(
//            '/',
//            ['plugin' => 'Freeradius','controller' => 'Freeradius', 'action' => 'index']
//        );
        
        $routes->connect(
            '/:userShortcut/edit/:groupname',
            ['plugin' => 'Freeradius','controller' => 'Groups', 'action' => 'edit',':groupname'],
            [
                'pass' => array('groupname'),
                'userShortcut' => '(?i:groups)'
            ]
        );
    
        $routes->fallbacks('DashedRoute');
    }
);