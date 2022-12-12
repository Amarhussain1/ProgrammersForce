<?php
include "connection.php";
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Contro-Allow-Methods: POST');
$id = $_POST['id'];
if (isset($_COOKIE['token']) && $_COOKIE['id'])
 {
    if ($id && is_uploaded_file($_FILES['image']['tmp_name'])) 
    {
        $temporary = $_FILES['image']['tmp_name'];
        $imageid = $_FILES['image']['name'];
        $Newimage  = time() . "-" . $imageid;
        $upload_dir = "./images/" . $Newimage;
        $getDbImage  = "SELECT image FROM users WHERE id = $id";
        $result = mysqli_query($conn, $getDbImage);
        $row = mysqli_fetch_assoc($result);
        $dbImage = $row['image'];

        if (file_exists("images/$dbImage")) 
        {
         
            unlink("images/$dbImage");

            $sql = "UPDATE users SET image= '{$Newimage}' WHERE id = $id";
            if (move_uploaded_file($temporary, $upload_dir) && mysqli_query($conn, $sql)) {
                echo json_encode(array('message' => 'Image Updated Successfully', 'status' => 'true'));
            }
        } else 
        {
            echo json_encode(array('message' => 'User Profile Not Found', 'status' => 'false'));
        }
    } else 
    {
        echo json_encode(array('message' => 'Invalid Request', 'status' => 'false'));
    }
} else
 {
    echo json_encode(array('message' => '403 | invalid  user User', 'status' => 'false'));
}