<?php

//use CodeIgniter\Router\RouteCollection;

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/user/create', [UserController::class, 'create']);


$routes->post('/user/store', [UserController::class, 'store']);

$routes->get('/user', [UserController::class, 'index']);



$routes->get('user/(:any)/edit', [UserController::class, 'edit']);

$routes->put('user/(:any)', [UserController::class, 'update']);

$routes->delete('user/(:any)', [UserController::class, 'destroy']);

$routes->get('user/(:any)', [UserController::class, 'show']);
