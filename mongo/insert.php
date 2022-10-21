<?php
require_once __DIR__ . '/vendor/autoload.php';
$con = new MongoDB\Client("mongodb://localhost:27017");
print_r($con);
$db = $con->profile;

$coll = $db->datas;

$coll->insertOne(["Name"=>"logan"]);
?>