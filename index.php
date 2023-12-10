<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/bootstrap.min.css">
    <style>
    body {
        height: 100vh;
        background-image: url("assets/img/bg.jpg");
        background-size: cover;
        background-position: center;
    }

    .container-fluid {
        margin-top: 150px;
    }
    </style>
    <title>blog</title>
</head>

<body>
    <header class="d-flex flex-wrap align-items-center justify-content-end p-2 bg-dark">
        <div class="col-md-3 text-end">
            <a href="login.php"><button type="button" class="btn btn-outline-primary me-2">Masuk</button></a>
            <a href="register.php"><button type="button" class="btn btn-primary me-4">Daftar</button></a>
        </div>
    </header>
    <div class="container-fluid text-white text-center">
        <h1 class="display-5 fw-bold">Selamat Datang</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Di blog ini kita bisa menemukan bermacam - macam artikel.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="login.php"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Yuk
                        Mulai</button></a>
            </div>
        </div>
    </div>
</body>

</html>