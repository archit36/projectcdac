<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('dashboard','Home::dashboard');
$routes->get('login','Home::login');
$routes->get('registration','Home::registration');
$routes->get('availabletrain','Home::availabletrain');
$routes->get('ticket','Home::ticket');
$routes->get('profile','Home::profile');
$routes->get('adminlogin','Home::adminlogin');
$routes->get('ticketfare','Home::ticketfare');


