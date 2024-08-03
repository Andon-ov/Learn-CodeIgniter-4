<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test-db', 'TestDB::index'); 




// If you want to enable auto-routing, you need to add this line
$routes->setAutoRoute(true);