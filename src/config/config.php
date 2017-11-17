<?php

// Slim configuration
$config = [
	'settings' => [
		'displayErrorDetails' => true,
		'logger' => [
			'name' => 'slim-app',
			'level' => Monolog\Logger::DEBUG,
			'path' => __DIR__ . '/../../logs/app.log',
		],
		'db' => [
			'driver' => 'mysql',
			'host' => 'localhost',
			'database' => 'recruiting',
			'username' => 'recruiting',
			'password' => 'recruiting',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		]
	],
];