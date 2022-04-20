<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "curhatin_login";
 
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

session_start();

if (isset($_POST['submit'])) {
  $email = $_POST['Email1'];
  $password = md5($_POST['Password1']);

  $login = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $hasil = mysqli_num_rows($login);
  if ($hasil>0) {
      echo "<script>alert('Benar')</script>";
  } else {
      echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="login.css">
<script src="js/bootstrap.min.js" ></script>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="global-container">
    <div class="card login-form">
         <div class="card-body">
             <h1 class="card-title text-center">L O G I N</h1>
         </div>
    <div class="card-text">
    <form action="" method="POST">
        <div class="mb-3">
            <label for="Email1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" name="Email1" required>
        </div>
        <div class="mb-3">
            <label for="Password1" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password1" name="Password1" required>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
        <div class="register">
        Didn't have an account?<a href="register/">Register</a>
        </div>
        </form>
    </div>
    </div>
</div>
</body>
</html>