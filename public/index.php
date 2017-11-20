<?php

require __DIR__ . '/../vendor/autoload.php';

// Configuration
require __DIR__ . '/../src/config/config.php';

$app = new \Slim\App($config);

// Fetch DI Container
$container = $app->getContainer();

// Database
require __DIR__ . '/../src/app/db.php';

// Routes
require __DIR__ . '/../src/app/routes.php';

// View templates
require __DIR__ . '/../src/app/views.php';

$app->run();