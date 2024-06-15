<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LoginController::index');

$routes->group('register', function($routes){
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});


$routes->group('login', ['filter' => 'redirectIfAuthenticated'], function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authenticate']);


$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});

$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/posts/index', 'Post::index');
    $routes->get('/posts/create', 'Post::create');
    $routes->post('/posts/store', 'Post::store');
    $routes->get('/posts/edit/(:num)', 'Post::edit/$1');
    $routes->post('/posts/update/(:num)', 'Post::update/$1');
    $routes->delete('/posts/destroy/(:num)', 'Post::destroy/$1');
});