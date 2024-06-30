<?php


use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Пример за маршрут към метода create на контролера User
$routes->get('user/create', 'User::create');
