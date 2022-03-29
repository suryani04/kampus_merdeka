<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <title>Login</title>
  </head>
  <body>

  <div class="global-container">
      <div class="card login-from">
          <div class="card-body">
        <h1 class="card-title text-center">L O G I N</h1>
          </div>
          <div class="card-text">
          <form action="" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username">
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="d-grid gap-2"><input type="submit" class="btn btn-primary" value="Login" name="login"/>
</div>
</form>
    </div>
      </div> 
  </div>
  </body>
</html>
<?php
if(isset($_POST['login'])){ //saat tombol login di klik
  $username=$_POST['username'];
  $password=$_POST['password'];
  //mengambil data dari form
  if($username=="admin" and $password=="mimin"){ //membuat logika
    header("location:page/home.php");
  }else{
    echo "<script>alert('Maaf username atau password salah!!!')</script>";
  }
}
?> 