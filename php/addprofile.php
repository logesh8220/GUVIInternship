<?php
require_once __DIR__ . '../../mongo/vendor/autoload.php';
extract($_POST);
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Age = $_POST['Age'];
$PhonNo = $_POST['PhonNo'];
print_r($_POST);
$con = new MongoDB\Client("mongodb://localhost:27017");
$db = $con->profile;
$coll = $db->datas;
if($Name!='' && $Email!='' && $Age!=''){

    $coll->insertOne(["Name" => "$Name","Email" => "$Email","Age" => "$Age","PhonNo" => "$PhonNo"]);
}else{
    echo "Cannot add empty values . <br/>";
}


if ($coll) {
    echo  "data || data added successfully";

} else {
    echo "somthing wrong";
}



?>