<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
if (!isset($routes) || !$routes instanceof RouteCollection) {
	$routes = service('routes');
}
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('registro', 'Home::registro');
$routes->get('acercade', 'Home::acercade');
$routes->get('login', 'Home::login');

