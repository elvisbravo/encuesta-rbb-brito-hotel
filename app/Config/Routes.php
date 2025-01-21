<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/survey/fill/(:any)', 'Home::encuesta/$1');

$routes->get('esperamos-nuevamente-su-visita', 'Home::graciasEncuesta');

$routes->get('login', 'Login::index');
$routes->post('acceder', 'Login::ingresar');
$routes->get('logout', 'Login::signout');

$routes->post('saveFormSurvey', 'Home::saveSurvey');
$routes->get('getEncuesta/(:num)', 'Home::getSurvey/$1');
$routes->get('descargar-excel', 'Home::descargar_excel');

$routes->get('dashboard', 'Dashboard::index');

$routes->group('api', function($routes) {
    // Ruta para generar nuevo enlace de encuesta
    $routes->post('survey/generate', 'SurveyController::generateSurveyLink');

});
