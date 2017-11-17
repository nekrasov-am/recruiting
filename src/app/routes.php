<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Main page
$app->get('/', function (Request $request, Response $response) {
	$testRecords = TestRecord::all();
	return $this->view->render($response, 'index.tpl');
});