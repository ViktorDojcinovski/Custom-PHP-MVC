<?php

/**
 * Front controller
 * 
 * PHP version 7.1
 */

/**
 * Composer
 */
require('../vendor/autoload.php');

$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
// Admin routes
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);


// Match the requested route
$url = $_SERVER['QUERY_STRING'];

$router->dispatch($url);