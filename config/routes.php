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
            '/:userShortcut/:action/:groupname',
            ['plugin' => 'Freeradius','controller' => 'Groups', 'action' => ':action',':groupname'],
            [
                'pass' => array('groupname'),
                'userShortcut' => '(?i:groups)'
            ]
        );

        $routes->connect(
            '/:userShortcut/:action/:username',
            ['plugin' => 'Freeradius','controller' => 'Users', 'action' => ':action',':username'],
            [
                'pass' => array('username'),
                'userShortcut' => '(?i:users)'
            ]
        );
    
        $routes->fallbacks('DashedRoute');
    }
);