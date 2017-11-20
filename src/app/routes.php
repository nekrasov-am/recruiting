<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Main page
$app->get('/', function (Request $request, Response $response) {
	return $this->view->render($response, 'index.tpl', [
		'js' => ['js/app/index.js']
	]);
});

// Ajax for datatable
$app->post('/data', function (Request $request, Response $response, array $args) {

	// Get total number of records for pagination
	$totalRecords = TestRecord::count();

	// Get current page
	$body = $request->getParsedBody();
	$records = TestRecord::skip($body['start'])->take($body['length'])->get();

	// Format data for datatable
	$result = [
		'draw' => $body['draw'],
		'recordsTotal' => $totalRecords,
  		'recordsFiltered' => $totalRecords,
		'data' => []
	];

	$i = 1;
	foreach ($records as $record) {
		$result['data'][] = [
			$i,
			$record->sku,
			$record->description,
			count($record->notes)
		];
		$i++;
	}

	echo json_encode($result);

});