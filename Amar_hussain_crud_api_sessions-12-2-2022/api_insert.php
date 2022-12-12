<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods,Authorization,X-Requested-With');

include'connect.php';

$data=json_decode(file_get_contents("php://input"),true);
$name=$data['name'];
$email=$data['email'];
$mobile=$data['mobile'];
$password=$data['password'];

//$sql="INSERT INTO crud (name,email,mobile,password) VALUES ('{$name}','{$email}','{$mobile}','{$password}')";

$sql="INSERT INTO crud (name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";

if(mysqli_query($conn,$sql))
{
    echo json_encode(array('message'=>'student record inserted','Status'=>true));
}
else
{
   echo json_encode(array('message'=>'student record not inserted','Status'=>false));
}
?>