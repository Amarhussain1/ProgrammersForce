<?php

header('Content-Type: application/json'); 
header('Access-Control-Allow-Origin: *'); 
header('Access-Contro-Allow-Methods: POST'); 


$formData = stripcslashes(file_get_contents("php://input"));
$data = json_decode($formData, true);

include "connection.php";


$EMAIL = $data['EMAIL'];
//$password = $data['PASSWORD'];
//$encryptPassword = md5($PASSWORD);


$token = "token";
$bytes = random_bytes(20);
$tokenValue = bin2hex($bytes);

$sql = "SELECT * FROM data WHERE EMAIL = '$EMAIL'";
$result = mysqli_query($conn, $sql) or die("Login Query Failed");

if (mysqli_num_rows($result) > 0) 
{
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode(array('message' => 'User Found', 'status' => 'true'));
    echo json_encode($output);
    setcookie($token, $tokenValue, time() + 7200, "/");
    echo json_encode(array('token' => $token, 'tokenValue' => $tokenValue));
} 
else 
{
    echo json_encode(array('message' => 'User Not found', 'status' => 'false'));

}