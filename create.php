<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost:3307", "root", "", "toko_gadget");

    if (!$conn) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $telepon = $_POST["telepon"];
    $message = $_POST["message"];

    $sql = "INSERT INTO daftar_kontak (nama, email, telepon, message) VALUES ('$nama', '$email', '$telepon', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Kontak berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Kontak</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
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
                    <a class="nav-link disabled">About Us</a>
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
    <div class="container">
        <div class="card shadow p-5 mt-5">
            <h2>Tambah Kontak</h2>
            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Kamu">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telepon</label>
                    <input type="text" name="telepon" class="form-control" id="exampleFormControlInput1" placeholder="ex:0812345678">
                </div>
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                <button type="submit" class="btn btn-primary">Tambah Kontak</button>
                <p>Anda Ingin Edit Kontak anda yang sudah ada? Silahkan Klik!</p><a href="update.php">Edit Kontak</a>
            </div>
        </form>
    </div>
    </div>
</body>

</html>