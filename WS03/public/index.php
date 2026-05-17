<?php
require_once __DIR__ . '/../helpers.php';
require_once __DIR__ . '/../Framework/Router.php';
$router = new Router();
require __DIR__ . '/../routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$base = '/WS03/public';
if (strpos($uri, $base) === 0) $uri = substr($uri, strlen($base));
if ($uri === '') $uri = '/';
$router->dispatch($uri);
