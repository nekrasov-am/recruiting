<?php

// Fetch DI Container
$container = $app->getContainer();

// Register Smarty View helper
$container['view'] = function ($c) {
	$view = new \Slim\Views\Smarty(__DIR__ . '/../templates');

	// Add Slim specific plugins
	$smartyPlugins = new \Slim\Views\SmartyPlugins($c['router'], $c['request']->getUri());
	$view->registerPlugin('function', 'path_for', [$smartyPlugins, 'pathFor']);
	$view->registerPlugin('function', 'base_url', [$smartyPlugins, 'baseUrl']);

	return $view;
};