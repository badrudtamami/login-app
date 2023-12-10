<?php
session_start();
require("library.php");
$lib = new Library();

//cek session
if ($lib->isLoggedIn()) {
    header("location: dashboard.php");
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Registrasi user baru 
    if ($lib->register($username, $email, $password)) {
        $success = true;
        // header("Location: login.php");
    } else {
        $error = $lib->getLastError();
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
    <!-- style bootstrap -->
    <style>
    body {
        background-image: url("assets/img/bg-register.jpg");
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .succes {
        color: green;
        text-align: center;
    }

    .error {
        color: red;
        text-align: center;
    }
    </style>

    <title>Register</title>
</head>

<body>
    <div class="box">
        <?php if (isset($error)) : ?>
        <div class="error">
            <?php echo $error ?>
        </div>
        <?php endif; ?>
        <?php if (isset($success)) : ?>
        <div class="succes">
            Berhasil mendaftar. Silahkan <a href="login.php">login</a>.
        </div>
        <?php endif ?>
        <h2>Register</h2>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="email">email</label>
            <input type="text" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button class="btn" type="submit" name="register">Daftar</button>
        </form>
    </div>
</body>

</html>