<?php

// Service factory for the ORM
$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container->get('settings')['db']);
$capsule->bootEloquent();

// Models
require __DIR__ . '/../models/TestRecord.php';