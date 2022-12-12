<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods,Authorization,X-Requested-With');

include'connection.php';

$data=json_decode(file_get_contents("php://input"),true);

$NAME=$data['NAME'];
$New_email=$data['EMAIL'];
$AGE=$data['AGE'];
$GENDER=$data['GENDER'];
$PASSWORD=$data['PASSWORD'];
$CONFIRMPASSWORD=$data['CONFIRMPASSWORD'];

$sql="UPDATE data SET NAME='$NAME',AGE='$AGE',GENDER='{$GENDER}',PASSWORD='$PASSWORD',CONFIRMPASSWORD='$CONFIRMPASSWORD' WHERE EMAIL='$New_email' ";

//$sql="UPDATE  crud SET  (name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";

if(mysqli_query($conn,$sql))
{
    echo json_encode(array('message'=>'student record Successfully updated','Status'=>true));
}
else
{
   echo json_encode(array('message'=>'student record not updated','Status'=>false));
}
?>