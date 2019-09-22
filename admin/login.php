<?php 
	require '../helper/functions.php';
	session_start();
	if ( isset($_SESSION["login"])) {
		header("Location:index.php");
	}

	
	if (!isset($_POST["username"])||
		!isset($_POST["password"])){
		$u = 1;
	}else
	if ($_POST["username"] == "admin" && $_POST['password'] == "12345"){
		$_SESSION["login"] = true;
		header("Location: index.php");
	}else{
		$error = true;
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Halaman Login</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<link rel="stylesheet" href="../assets/css/login.css">
	</head>
	<body>
			<div class="container">
				<div class="kotak">
					<form action="" method="POST">
						<h1 style="text-align: center;">Halaman Login</h1>
						
						<div class="col-sm-12">
							<div class="form-group col-lg-12">
								<label for="username"><span class="glyphicon glyphicon-user"></span>Username :</label>
								<input type="text" name="username" id="username" class="form-control" placeholder="username">
							</div>
							<div class="form-group col-lg-12">
								<label for="password"><span class="glyphicon glyphicon-lock"></span>Password   :</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="password">
							</div>
							<div class="form-group col-lg-12">
								<?php if (isset($error)) : ?>
									<p style="color: red; font-style: italic;">Username atau Password SALAH!</p>	
								<?php endif; ?>
							</div>
							<div class="form-group col-lg-10">
								<button type="submit" class="btn btn-primary" style="margin-left:40%">Login</button>
								<a href="../index.php" onclick="return confirm('Anda yakin ingin kembali ?')"><button type="button" class="btn btn-danger">Batal</button></a>
							</div>
							<div class="form-group form-group col-lg-12">
								<p style="text-align: center;">admin || 12345</p>
							</div>

						</div>
					</form>
				</div>
			</div>
		</body>
	</html>