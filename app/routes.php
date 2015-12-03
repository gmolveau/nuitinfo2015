<?php

// Home page
// exemple de route

$app->register(new Silex\Provider\SessionServiceProvider());

// Home page
$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig');
});
/*

$app->get('/', function() use($app)
{
    if(null === $user = $app['session']->get('user'))
        return $app->redirect('/login');
 
    return $app['twig']->render('main.html', array('name' => $user['username']));
});
*/
$app->get('/login', function() use($app)
{
    return $app['twig']->render('getLogin.html');
});
 
$app->post('/login', function(Request $request) use($app)
{
    $usr = $request->get('username');
    $pas = $request->get('password');
 
    //TODO: authenticate
 
    $app['session']->set('user', array('username'=> $usr));
    return $app['twig']->render('postLogin.html', array('username' => $usr));
 
});
 
$app->get('/logout', function() use($app)
{
    $app['session']->set('user', null);
    return $app['twig']->render('logout.html', array());
 
});

?>