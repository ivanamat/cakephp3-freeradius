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

//        $routes->connect(
//            '/Post-Authentication',
//            ['plugin' => 'Freeradius','controller' => 'PostAuthentication', 'action' => 'index']
//        );
        
        $routes->connect(
            '/:userShortcut/:action/:groupname',
            ['plugin' => 'Freeradius','controller' => 'Groups', 'action' => ':action',':groupname'],
            [
                'pass' => array('groupname'),
                'userShortcut' => '(?i:groups)',
                'groupname' => '[0-9a-zA-Z]+'
            ]
        );

        $routes->connect(
            '/:userShortcut/:action/:username',
            ['plugin' => 'Freeradius','controller' => 'Users', 'action' => ':action',':username'],
            [
                'pass' => array('username'),
                'userShortcut' => '(?i:users)',
                'username' => '[0-9a-zA-Z]+'
            ]
        );
    
        $routes->fallbacks('DashedRoute');
    }
);