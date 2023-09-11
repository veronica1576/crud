<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('listar', 'Jugadores::index');
$routes->get('crear', 'Jugadores::crear');
$routes->post('guardar', 'Jugadores::guardar');
$routes->get('borrar/(:num)', 'Jugadores::borrar/$1');
$routes->get('editar/(:num)', 'Jugadores::editar/$1');
$routes->post('actualizar', 'Jugadores::actualizar');
