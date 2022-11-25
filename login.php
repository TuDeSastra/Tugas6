<?php require("login.class.php") ?>
<?php
if (isset($_POST['submit'])) {
	$user = new LoginUser($_POST['username'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Tugas Login Form PHP</title>
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>Log-in</h2> 

		<label>Nama</label>
		<input type="text" name="username">

		<label>Password</label>
		<input type="text" name="password">

		<button type="submit" name="submit">Masuk</button>
		<h4>Buat akun baru <a href="index.php"><span>Sign-in</span></a></h4>

	</form>

</body>

</html>