
<?php
include ('connection.php');

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



$data = json_decode(file_get_contents("php://input"),true);
$returnData = [];

$EMAIL = $data['EMAIL'];
$password= $data['PASSWORD'];
$newPassword = $data['NEWPASSWORD'];


if(!isset($EMAIL) || empty(trim($EMAIL)))
{
    echo  ( 'Required Fields must be filled!.');
}

else
{
   
    $sql = "SELECT * FROM data where EMAIL='$EMAIL' ";
    $result = mysqli_query($conn, $sql);
    $res=mysqli_fetch_assoc($result);

    if($EMAIL==$res['EMAIL'])
    {
        $sql = "UPDATE data SET PASSWORD='$newPassword' WHERE EMAIL='$EMAIL' ";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo 'Password changed.';
        }


    }
    else
    {
        echo 'Please enter the correct email and password.';

    }


}
?>