<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('esperamos-nuevamente-su-visita', 'Home::graciasEncuesta');

$routes->get('login', 'Login::index');
$routes->post('acceder', 'Login::ingresar');
$routes->get('logout', 'Login::signout');

$routes->post('saveFormSurvey', 'Home::saveSurvey');
$routes->get('getEncuesta/(:num)', 'Home::getSurvey/$1');
$routes->get('descargar-excel', 'Home::descargar_excel');

$routes->get('dashboard', 'Dashboard::index');
