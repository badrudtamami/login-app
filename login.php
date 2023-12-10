<?php
session_start();
require("library.php");
$lib = new Library();

// cek session
if ($lib->isLoggedIn()) {
    header("location: beranda.php");
}

//jika tombol login ditekan
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($lib->login($username, $password)) {
        header("location: beranda.php");
    } else {
        $error = $lib->getLastError();
    }

    if (isset($_POST['remember'])) {
        setcookie('login', true, time() + 60);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/bootstrap.min.css">
    <style>
    body {
        height: 100vh;
        background-image: url("assets/img/bg-login.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .error {
        color: red;
        text-align: center;
    }
    </style>

    <title>login</title>
</head>

<body>
    <div class="box">
        <?php if (isset($error)) : ?>
        <div class="error">
            <?php echo $error ?>
        </div>
        <?php endif; ?>
        <h2>Login</h2>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="checkbox" name="remember"> <span>ingat saya</span>
            <button class="btn" type="submit" name="login">Masuk</button>
            <a href="register.php" class="link">belum punya akun ?</a>
        </form>
    </div>
</body>

</html>