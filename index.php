<?php require("register.class.php") ?>
<?php
if (isset($_POST['submit'])) {
	$user = new RegisterUser($_POST['username'], $_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Sign-in</title>
</head>

<body>

	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>Sign-in</h2>

		<label>Nama</label>
		<input type="text" name="username">

		<label>Password</label>
		<input type="text" name="password">

		<button type="submit" name="submit">Daftar</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	</form>

</body>

</html>