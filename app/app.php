<?php
/**
 * Created by PhpStorm.
 * User: App
 * Date: 14.04.14
 * Time: 21:49
 */
require_once __DIR__ . '/bootstrap.php';

/** * Before action */
$app->before(function () use ($app) {
	// Registering Twig
	$app->register(new \Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__ . '/../www/views',
	));
	/** @var $twig \Twig_Environment */
	$twig = $app['twig'];
	$twig->addGlobal('layout', $twig->loadTemplate('layout.twig'));
});


$app->get('/', function () use ($app) {
	/** @var $twig \Twig_Environment */
	$twig = $app['twig'];

	return $twig->render('index.twig', array('mystring' => 'Test string'));
});

return $app;