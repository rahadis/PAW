<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "curhatin_login";
 
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));
session_start();
error_reporting(0);

if (isset($_POST['submit'])){
	$nama = $_POST['inputusername'];
	$email = $_POST['inputemail']; 
	$password = md5($_POST['inputpassword']);
    $ambil= "SELECT * FROM users WHERE username='$nama'";
    $seleksi= mysqli_query($koneksi, $ambil);
    if (!$seleksi->num_rows > 0) {
    $insert="INSERT INTO users (username,email,password) VALUES ('$nama','$email','$password')";
 	$registrasi = mysqli_query($koneksi,$insert);
  		if($registrasi) 
			{
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $nama = "";
                $email = "";
                $password ="";
                $_POST['inputpassword'] = "";
                header ("Location: ../"
			}
			else {
				echo "<script>alert('Registrasi gagal silahkan coba lagi!.')</script>";
			}
    }
    else {
        echo "<script>alert('Username Sudah Terdaftar.')</script>";
        $password =$_POST['inputpassword'];
    }
}

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="register.css">
<script src="../js/bootstrap.min.js" ></script>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">R E G I S T E R</h1>
            </div>
            <div class="card-text">
                <form action="" method="POST" class="form">
                <div class="mb-3">
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="Username" name="inputusername" value="<?php echo $nama; ?>"required>
                </div>
                <div class="mb-3">
                    <label for="Email1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" name="inputemail" value="<?php echo $email; ?>"required>
                </div>
                <div class="mb-3">
                    <label for="Password1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="Password1" name="inputpassword" value="<?php echo $password;?>" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
                <div class="login">Already have an account?<a href="../">Login</a></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>