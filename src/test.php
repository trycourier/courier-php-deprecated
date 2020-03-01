<?php
// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

include('../src/Courier.php');
include('../src/CourierException.php');
include('../src/CourierRequestException.php');

$test = new \Digs\Courier\Courier('V88A66R9T4M99XGEAYH22RRW6CQK');

try {

    $response = $test->getProfile('test-001');
    var_dump($response);
} catch (Exception $e) {
    echo $e->getMessage();
}
