<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index');
$routes->get('login','Home::login');
$routes->get('listar', 'Jugadores::listar');
$routes->get('crear', 'Jugadores::crear');
$routes->post('guardar', 'Jugadores::guardar');
$routes->get('borrar/(:num)', 'Jugadores::borrar/$1');
$routes->get('editar/(:num)', 'Jugadores::editar/$1');
$routes->post('actualizar', 'Jugadores::actualizar');
