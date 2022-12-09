<?php
// $query = array('foo' => 'hello', 'bar' => 'world');

require_once 'unirest-php/src/Unirest.php';

// $headers = array('Accept' => 'application/json');

$response = Unirest\Request::get('http://localhost:3000/users/637f0e092e6df7f239753471');

// $response->raw_body;        // Parsed body
// $response->raw_body;    // Unparsed body

$result = $response->body;

// echo json_encode($result);
echo $result->user->name;