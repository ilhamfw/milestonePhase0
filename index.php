<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login/Register</title>

    <!-- menyisipkan bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
<nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand text-danger" href="#">StreamFlix</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Login/Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Selamat datang di StreamFlix</h1>
                        <p>Bergabunglah untuk menikmati keseluruhan content kami...</p>
                    </div>
                    <div class="col-md-4">
                        <a href="login.php" class="btn btn-secondary">Masuk</a>
                        <a href="register.php" class="btn btn-success">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>