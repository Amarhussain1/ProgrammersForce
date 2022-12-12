<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Crud operations!</title>
  </head>
  <body>
  <div class="container my-5">
  <form action="code.php" method="post">
    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control" 
        placeholder="Enter your name"name="name"autocomplete="ogg" >
        </div>
        <div class="form-group">
        <label >Email</label>
        <input type="text" class="form-control" 
        placeholder="Enter your Email"name="email"autocomplete="ogg" >
        </div>
        <div class="form-group">
        <label >Mobile</label>
        <input type="text" class="form-control" 
        placeholder="Enter your Mobile no"name="mobile" autocomplete="ogg">
        </div>
        <div class="form-group">
        <label >Password</label>
        <input type="text" class="form-control" 
        placeholder="Enter your password"name="password"autocomplete="ogg" >
        </div>
  <button type="submit" name=submit class="btn btn-primary">Submit</button>
</form>
</div>

  </body>
</html>