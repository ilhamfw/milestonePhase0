<?php
$conn = mysqli_connect("localhost:3307", "root", "", "toko_gadget");

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM daftar_kontak";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kontak</title>
    <!-- Tambahkan link stylesheet Bootstrap di sini -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
                    <a class="nav-link" href="films.html">Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">Gallery</a>
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
    <div class="container">
        <h2 class="mt-5">Daftar Kontak</h2>
        <?php
        $conn = mysqli_connect("localhost:3307", "root", "", "toko_gadget");

        if (!$conn) {
            die("Koneksi ke database gagal: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM daftar_kontak";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table table-bordered mt-3'>";
            echo "<thead class='thead-dark'>";
            echo "<tr><th>ID</th><th>Nama</th><th>Email</th><th>Telepon</th><th>Message</th></tr>";
            echo "</thead><tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["telepon"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "</tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p class='mt-3'>Tidak ada kontak yang ditemukan.</p>";
        }

        mysqli_close($conn);
        ?>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>
</html>

