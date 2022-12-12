<?php
 include "connection.php";

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: PUT'); 

$data = json_decode(file_get_contents("php://input"), true);


$NAME=$data['NAME'];
$New_email=$data['EMAIL'];
$AGE=$data['AGE'];
$GENDER=$data['GENDER'];
$PASSWORD=$data['PASSWORD'];
$CONFIRMPASSWORD=$data['CONFIRMPASSWORD'];
//$encryptPassword = md5($PASSWORD);



if (isset($_COOKIE['token'])) 
{
    $sql="UPDATE data SET NAME='$NAME',AGE='$AGE',GENDER='$GENDER',PASSWORD='$PASSWORD',CONFIRMPASSWORD='$CONFIRMPASSWORD' WHERE EMAIL='$New_email' ";

    if (mysqli_query($conn, $sql))
    {
        echo json_encode(array('message' => 'User Profile Updated Successfully', 'status' => 'true')); 
    } 
    else 
    {
        echo json_encode(array('message' => 'User Profile Not Updated Successfully', 'status' => 'false')); 
    }
} 
else
 {
    echo json_encode(array('message' => 'You Are Not Autheticated User', 'status' => 'false'));
}
?>