<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$route['report'] = 'report/index'; // Menampilkan semua report
$route['report/(:num)'] = 'report/view/$1'; // Menampilkan report berdasarkan ID
$route['report/create'] = 'report/create'; // Menambahkan report
$route['report/update/(:num)'] = 'report/update/$1'; // Mengupdate report berdasarkan ID
$route['report/delete/(:num)'] = 'report/delete/$1'; // Menghapus report berdasarkan ID

