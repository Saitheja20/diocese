<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('index3', 'Home::index3');
$routes->get('newsletters', 'Home::newsletters');