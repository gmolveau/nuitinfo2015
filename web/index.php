<?php
//main controller
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__.'/../app/app.php'; // appel de app
require __DIR__.'/../app/routes.php'; // appel des routes

$app->run();