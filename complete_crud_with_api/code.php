<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"crudoperation");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="INSERT INTO crud (name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        //echo"data inserted ";
        header('location:display.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?>