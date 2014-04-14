<?php
/**
 * Created by PhpStorm.
 * User: Glue
 * Date: 14.04.14
 * Time: 21:49
 */
require_once __DIR__ . '/bootstrap.php';

use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();
$app['debug']= true;
/** * Before action */
$app->before(function () use ($app) {
	// Registering Twig
	$app->register(new \Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../www/views',
	));
	$app['twig']->addGlobal('layout', $app['twig']->loadTemplate('layout.twig'));
});


$app->get('/', function () use ($app)  {
	return $app['twig']->render('index.twig');
});

return $app;