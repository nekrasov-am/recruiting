<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Main page
$app->get('/', function (Request $request, Response $response) {
	return $this->view->render($response, 'index.tpl');
});