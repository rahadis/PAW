<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "curhatin_login";
 
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

if (isset($_POST['kirim'])){
	$inputpost = $_POST['inputpost'];
 	 $simpan = mysqli_query($koneksi, "INSERT INTO thread (username,post) VALUES ('tes4','$inputpost')");
  		if($simpan) 
			{
				echo "<script>alert('Simpan data suksess!');</script>";
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
	<div class="card-text">
	<div class="mb-3">
	<label for="InputPost" class="form-label"></label>
	<textarea type="text" class="form-control" id="InputPost" placeholder="Masukkan curahan hati anda" name="inputpost"></textarea>
	</div>
	<div class="d-grid gap-2">
		<button type="submit" class="btn btn-primary" name="kirim">Submit</button>
	</div>
		<!-- -->
		<div class="postingan">
				<?php
					$tampil = mysqli_query($koneksi, "SELECT * from thread");
						if (mysqli_num_rows($tampil) > 0) {
							while ($data = mysqli_fetch_assoc($tampil)) {
				?>
				<div class="thread">
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