<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Login</title>
</head>

<body>
    <form method="post">
        <label>Username :</label><input type="text" name="fuser"><br>
        <label>Password :</label><input type="password" name="fpass"><br>
        <button type="submit" name="flogin">Login</button>
    </form>

    <?php
    if (isset($_POST['flogin'])) {
        $username = $_POST['fuser'];
        $username = $_POST['fpass'];
        $qry = mysqli_query($connect, "SELECT * FROM tab_login WHERE username = '$username' AND password = md5('$password')");
        $cek = mysqli_num_rows($qry);
        if ($cek == 1) {
            $_SESSION['userweb'] = $username;
            header("location:admin.php");
            exit;
        } else {
            echo "Maaf username dan password anda salah !";
        }
    }
    ?>
</body>

</html>