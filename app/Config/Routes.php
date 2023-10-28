<?php

//use CodeIgniter\Router\RouteCollection;

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Home;
use App\Models\UserModel;
use App\Models\KelasModel;
use App\Controllers\KelasController;
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

$routes->get('/kelas/create', [KelasController::class, 'create']);
$routes->post('/kelas/store', [KelasController::class, 'store']);
$routes->get('/kelas', [KelasController::class, 'index']);
$routes->get('kelas/(:any)/edit', [KelasController::class, 'edit']);
$routes->put('kelas/(:any)', [KelasController::class, 'update']);
$routes->delete('kelas/(:any)', [KelasController::class, 'destroy']);
$routes->get('kelas/(:any)', [KelasController::class, 'show']);
