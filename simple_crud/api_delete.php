<?php
header('Content-Type:application/json');
header('Acess-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods,Authorization,X-Requested-With');
$data=json_decode(file_get_contents("php://input"),true);
$student_id=$data['id'];
include'config.php';
$sql="DELETE FROM crud WHERE id={$student_id} ";

if(mysqli_query($conn,$sql))
{
    echo json_encode(array('message'=>'Record Deleted Successfully','Status'=>true));
}
else
{
   echo json_encode(array('message'=>'Record Not Deleted','Status'=>false));
}
?>