<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods,Authorization,X-Requested-With');

include('connection.php');

$data=json_decode(file_get_contents("php://input"),true);
$NAME=$data['NAME'];
$EMAIL=$data['EMAIL'];
$AGE=$data['AGE'];
$GENDER=$data['GENDER'];
$PASSWORD=$data['PASSWORD'];
$CONFIRMPASSWORD=$data['CONFIRMPASSWORD'];

$sql="INSERT INTO data (NAME,EMAIL,AGE,GENDER,PASSWORD,CONFIRMPASSWORD) VALUES ('$NAME','$EMAIL','$AGE','$GENDER','$PASSWORD','$CONFIRMPASSWORD')";

if(mysqli_query($conn,$sql))
{
    echo json_encode(array('message'=>'Data inserted successfully','Status'=>true));
}
else
{
   echo json_encode(array('message'=>' Record not inserted','Status'=>false));
}
?>