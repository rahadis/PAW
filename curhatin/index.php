<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "curhatin_login";
 
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

session_start();

if (isset($_POST['submit'])) {
  $emailuser = $_POST['inputemail'];
  $password = md5($_POST['inputpassword']);

  $login = "SELECT * FROM users WHERE email='$emailuser' AND password='$password'";
  $hasil = mysqli_query($koneksi, $login);
  if ($hasil->num_rows > 0) {
    $baris = mysqli_fetch_assoc($hasil);
    $username=$baris['username'];
    $_SESSION['username'] = $username;
    echo "<script>alert('Selamat datang $username')</script>";
    header("Location: main/");
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
            <label for="inputemail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputemail" aria-describedby="emailHelp" name="inputemail" required>
        </div>
        <div class="mb-3">
            <label for="inputpassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputpassword" name="inputpassword" required>
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