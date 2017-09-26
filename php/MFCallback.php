<?php
require_once('dbConnector.php');
require_once('AfricasTalkingGateway.php');
require_once('config.php');

$data  = json_decode(file_get_contents('php://input'), true);
print_r($data);

// process data
$category = $data["category"];
$status = $data["status"];

if ( $category == "")
