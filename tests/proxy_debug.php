<?php
require '../vendor/autoload.php';
$options = array(
	'proxy' => 'localhost:9002'
);
$response = Requests::get(httpbin('/get'), array(), $options);
var_dump($response->headers['x-requests-proxied']);
print_r($response);