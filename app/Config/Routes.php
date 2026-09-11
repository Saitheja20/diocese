<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('index3', 'Home::index3');
$routes->get('news-letters', 'Pages::show/newsletters');
$routes->get('newsletters', 'Pages::show/newsletters');
$routes->get('gallery/gallery_1', 'Pages::jubilee');

$routes->get('about-us', 'Pages::show/about-us');
$routes->get('history', 'Pages::show/history');
$routes->get('bishop', 'Pages::show/bishop');
$routes->get('diocesan-curia', 'Pages::show/diocesan-curia');
$routes->get('college-consultors', 'Pages::show/college-consultors');
$routes->get('senate-members', 'Pages::show/senate-members');
$routes->get('committees', 'Pages::show/committees');
$routes->get('commissions', 'Pages::show/commissions');
$routes->get('marriage-tribunal', 'Pages::show/marriage-tribunal');
$routes->get('diocesan-priests', 'Pages::show/diocesan-priests');
$routes->get('religious-priests', 'Pages::show/religious-priests');
$routes->get('seminarians', 'Pages::show/seminarians');
$routes->get('necrology', 'Pages::show/necrology');
$routes->get('birthday-calendar', 'Pages::show/birthday-calendar');
$routes->get('parishes', 'Pages::show/parishes');
$routes->get('diocesan-shrines', 'Pages::show/diocesan-shrines');
$routes->get('education', 'Pages::show/education');
$routes->get('institutions', 'Pages::show/institutions');
$routes->get('institute-men', 'Pages::show/institute-men');
$routes->get('institute-women', 'Pages::show/institute-women');
$routes->get('institute-seminaries', 'Pages::show/institute-seminaries');
$routes->get('photo-gallery', 'Pages::show/photo-gallery');
$routes->get('gallery/jubilee-2025', 'Pages::jubilee');
$routes->get('video-gallery', 'Pages::show/video-gallery');
$routes->get('songs-gallery', 'Pages::show/songs-gallery');
