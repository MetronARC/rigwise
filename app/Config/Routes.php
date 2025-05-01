<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/contact', 'Pages::contact');

// Carousel routes
$routes->get('/api/carousel-reset', 'CarouselController::resetCarousel');
$routes->get('/api/carousel-data', 'CarouselController::getCarouselData');

// Contact form routes
$routes->post('contact/send', 'Contact::sendEmail');
$routes->get('contact/generateCaptcha', 'Contact::generateCaptcha');
