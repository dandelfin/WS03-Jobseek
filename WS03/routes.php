<?php
$router->get('/', __DIR__ . '/App/controllers/home.php');
$router->get('/listings', __DIR__ . '/App/controllers/listings/index.php');
$router->get('/listings/show', __DIR__ . '/App/controllers/listings/show.php');
$router->get('/listings/create', __DIR__ . '/App/controllers/listings/create.php');
