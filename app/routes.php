<?php

// Home page
// exemple de route

// $app->register(new Silex\Provider\SessionServiceProvider());

// Home page
$app->get('/', function () use ($app) {
    // require '../src/model.php'; //appel du model
    // $articles = getArticle(); / appel de la fonction pour récupérer ce dont on a besoin
    return $app['twig']->render('index.html.twig'); //appel du view
});

// $app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->get('/prevention', function() use ($app) {
	require '../src/model_prevention.php'; //appel du model
	$all_cat = get_all_cat();
	return $app['twig']->render('view_prevention.html.twig', array('all_cat' => $all_cat));
});
?>