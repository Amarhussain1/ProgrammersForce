<?php
include "connection.php";

header('Content-Type: application/json'); //3 party who access this api 
header('Access-Control-Allow-Origin: *'); //*means all website access this api
header('Access-Contro-Allow-Methods: POST'); // use api POST method
$data = json_decode(file_get_contents("php://input"), true);
$NEWEMAIL = $data['EMAIL'];
$PASSWORD = $data['PASSWORD'];

$sql = "update data set PASSWORD = '$PASSWORD' WHERE EMAIL = '$NEWEMAIL'";

if(mysqli_query($conn,$sql))
{
    echo json_encode(array('message'=>'Password Successfully updated','Status'=>true));
}
else
{
   echo json_encode(array('message'=>'Password not updated','Status'=>false));
}
?>