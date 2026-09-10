<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('about_us','Home::about_us');
$routes->get('history','Home::history');
$routes->get('diocean','Home::diocean');
$routes->get('commisions','Home::commisions');
$routes->get('college_commities','Home::college_commities');
$routes->get('commities','Home::commities');
$routes->get('tribunal','Home::tribunal');
$routes->get('deaneries','Home::deaneries');
$routes->get('seminarians','Home::seminarians');
$routes->get('education','Home::education');
$routes->get('institutions','Home::institutions');
$routes->get('diocesanpriests','Home::diocesanpriests');


