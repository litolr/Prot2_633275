<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::principal');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acercade', 'Home::acercade');
$routes->get('login', 'Home::login');
$routes->get('registro', 'Home::registro');
