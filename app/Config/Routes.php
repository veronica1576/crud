<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$route->setDefaultNamespace('App/Controller');
//$route->setTranslateURIDashes(false);
//$route->set404Override('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('login/(:string)/(:string)','Home::login/$1/$2');
$routes->get('listar', 'Jugadores::listar');
$routes->get('crear', 'Jugadores::crear');
$routes->post('guardar', 'Jugadores::guardar');
$routes->post('ingresar', 'Jugadores::ingresar');
$routes->get('borrar/(:num)', 'Jugadores::borrar/$1');
$routes->get('editar/(:num)', 'Jugadores::editar/$1');
$routes->post('actualizar', 'Jugadores::actualizar');
