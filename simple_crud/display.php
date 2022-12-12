<?php

include 'connect.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
       Crud operation</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php"class="text-light">  ADD USER </a>
        
      </button>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">SR ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MOBILE</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql="SELECT * FROM crud";
$result=mysqli_query($conn,$sql);
if($result)
{

    while( $row=mysqli_fetch_assoc($result))
    {
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'"class="text-light">Update</a></button>
        <button class ="btn btn-danger"><a href="delete.php? deleteid='.$id.'"class="text-light">Delete</a></button>
        </td>
      </tr>';

    }
}


?>



  </tbody>
</table>
</body> 
</html>