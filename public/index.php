<?php

require __DIR__ . '/../vendor/autoload.php';

// Configuration
require __DIR__ . '/../src/config/config.php';

$app = new \Slim\App($config);

// Routes
require __DIR__ . '/../src/app/routes.php';

// View templates
require __DIR__ . '/../src/app/views.php';

$app->run();