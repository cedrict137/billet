<?php

require_once 'router/router.php';

session_start();

$router = new Router();

$route = $router->get();

require_once 'controller/' . $route['controller'] . '.php';

$controller = new $route['controller'] ($route['arguments']);

echo $controller->getPage();

