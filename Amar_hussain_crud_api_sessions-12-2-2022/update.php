<?php
include'connect.php';
include('session_check.php');
$id=$_GET['updateid'];
$sql="SELECT * FROM crud WHERE id =$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="UPDATE  crud  SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
       // echo" Record Updated succesfully ";
        header('location:display.php');
    }
    else 
    {
        die("Connection failed: " . $conn->connect_error);
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
  <div class="container my-5">
  <form  method="post">
    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control" 
        placeholder="Enter your name"name="name"autocomplete="off"value=<?php
        echo $name;?> >
        </div>
        <div class="form-group">
        <label >Email</label>
        <input type="text" class="form-control" 
        placeholder="Enter your Email"name="email"autocomplete="off"value=<?php
        echo $email;?> >
        </div>
        <div class="form-group">
        <label >Mobile</label>
        <input type="text" class="form-control" 
        placeholder="Enter your Mobile no"name="mobile" autocomplete="off"value=<?php
        echo $mobile;?>>
        </div>
        <div class="form-group">
        <label >Password</label>
        <input type="text" class="form-control" 
        placeholder="Enter your password"name="password"autocomplete="off"value=<?php
        echo $password?> >
        </div>
  <button type="submit" name=submit class="btn btn-primary">Update</button>
</form>
</div>

  </body>
</html>