<?php
require '../vendor/autoload.php';

foreach (['Requests_Transport_fsockopen', 'Requests_Transport_cURL'] as $transport) {
	$options = array(
		'proxy' => 'localhost:9002',
		'transport' => $transport
	);

	$response = Requests::get('http://requests-php-tests.herokuapp.com/get', array(), $options);
	var_dump($response->headers['x-requests-proxied']);
	print_r($response);
}