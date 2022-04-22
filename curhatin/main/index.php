<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "curhatin_login";
 
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../");
}

if (isset($_POST['kirim'])){
	$inputpost = $_POST['inputpost'];
	$inputjudul= $_POST['inputjudul'];
	$insert="INSERT INTO thread (username,judul,post) VALUES ('tes','$inputjudul','$inputpost')";
 	 $simpan = mysqli_query($koneksi,$insert);
  		if($simpan) 
			{
				echo "<script>alert('Simpan data suksess!');</script>";
				$_POST['inputpost']="";
				$_POST['inputjudul']="";
			}
			else {
				echo "<script>alert('Comment does not add.')</script>";
			}
}

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="main.css">
<script src="../js/bootstrap.min.js" ></script>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-primary bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Curhatin</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-link" href="#">Home</a>
			<a class="nav-link" href="#">My Thread</a>
		</div>
		</div>
	</div>
	</nav>

	<div class="global-container">
		<!-- -->
	<div class="scroll">
	<div class="kolomisi">
		<form action="#" method="POST" class="form">
			<div class="mb-3">
				<input type="text" class="form-control" id="Judul" name="inputjudul" placeholder="Judul Curhat" required>
			</div>
			<div class="mb-3">
				<textarea type="text" class="form-control" id="InputPost" placeholder="Masukkan curahan hati anda" name="inputpost"></textarea>
			</div>
	<div class="d-grid gap-2">
		<button type="submit" class="btn btn-primary" name="kirim">Submit</button>
	</div>
		</form>
	</div>
		<!-- -->
		<div class="postingan">
				<?php
					$tampil = mysqli_query($koneksi, "SELECT * from thread");
						if (mysqli_num_rows($tampil) > 0) {
							while ($data = mysqli_fetch_assoc($tampil)) {
				?>
				<div class="thread">
					<h5><?php echo $data['judul'];?></h5>
					<p><?php echo $data['post'];?></p>
				</div>
				<?php
							}
				}
				
				?>
		</div>
	</div>
	</div>
</body>
</html>