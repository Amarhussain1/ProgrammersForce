<?php
header('content-type:Application/json');
header('Acess-Control-Allow-Origin:*');
header('Acess-Control-Allow-Method:POST');
header('Acess-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods,Authorization,X-Requested-With');

include "connection.php";
$NAME = $_POST['NAME'];   
$EMAIL = $_POST['EMAIL'];
$AGE= $_POST['AGE'];
$GENDER= $_POST['GENDER'];
$PASSWORD= $_POST['PASSWORD'];
$encryptpassword=md5($userpassword);
if(is_uploaded_file($_FILES['Picture']['tmp_name']) && @$_POST['Name']) {
    $tmp_file=$_FILES['Picture']['tmp_name'];
    $imgname=$_FILES['Picture']['name'];
    $upload_dir="./pic/".$imgname;

//insert data in database
$sql="INSERT INTO data( NAME,EMAIL,AGE,GENDER,PICTURE,Password) values('{$NAME}','{$EMAIL}','{$AGE}','{$GENDER}','{$imgname}','{$encryptpassword}')";
if(mysqli_query($conn,$sql)){
    echo json_encode(array('message'=>' User has been Registered','status'=>true));
}
else{
    echo json_encode(array('message'=>'Oops user not Registered','status'=>false));
}
}
?>