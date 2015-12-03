<?php

use Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider;
use Silex\Application;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Request as Request;


// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));
/*

$app->register(
    // you can customize services and options prefix with the provider first argument (default = 'pdo')
    new PDOServiceProvider('pdo'),
    array(
        'pdo.server'   => array(
            // PDO driver to use among : mysql, pgsql , oracle, mssql, sqlite, dblib
            'driver'   => 'mysql',
            'host'     => 'localhost',
            'dbname'   => 'nuitinfo',
            'port'     => 3306,
            'user'     => 'nuitinfo',
            'password' => 'nuitinfo2015',
        ),
        // optional PDO attributes used in PDO constructor 4th argument driver_options
        // some PDO attributes can be used only as PDO driver_options
        // see http://www.php.net/manual/fr/pdo.construct.php
        'pdo.options' => array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
        ),
        // optional PDO attributes set with PDO::setAttribute
        // see http://www.php.net/manual/fr/pdo.setattribute.php
        'pdo.attributes' => array(
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        ),
    )
);



// get PDO connection
$pdo = $app['pdo'];
// exemple appel de query sql
// $pdo['dao.article']->findAll();

*/