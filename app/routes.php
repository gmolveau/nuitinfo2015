<?php

// Home page
// exemple de route

$app->register(new Silex\Provider\SessionServiceProvider());

// Home page
$app->get('/', function () use ($app) {
    require '../src/model.php'; //appel du model
    $articles = $pdo->query('select * from t_article order by art_id desc'); // appel de la fonction pour récupérer ce dont on a besoin
    return $app['twig']->render('index.html.twig', array('articles' => $articles)); //appel du view
});


?>