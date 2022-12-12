<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Crud operations!</title>
  </head>
  <body>   
<form class="container mt-5" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="row">
        <div class="col-md-6 offset-3">
  <div class="form-group">
    <label for="exampleInputEmail1"> Please Enter Your Email Address</label>
    <div>
    <input type="email" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
  <div>
    <label for="exampleInputPassword1">Please Enter Your Password</label>
    </div>
    <input type="password" class="form-control" name='password' id="exampleInputPassword1">
  </div>
  <div>
  <button type="submit"name='submit' class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
  </body>
</html>
<?php
include 'config.php';
session_start(); 
if(isset($_SESSION['email'])){
    header("location: display.php");
}
{
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)>0)
        {
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            header("location: display.php");

        }
    }
}
