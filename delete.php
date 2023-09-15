<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost:3307", "root", "", "toko_gadget");

    if (!$conn) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    $id = $_POST["id"];

    $sql = "DELETE FROM daftar_kontak WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Kontak berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hapus Kontak</title>
    <!-- Tambahkan link stylesheet Bootstrap di sini -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Hapus Kontak</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="mt-3">
            <div class="form-group">
                <label for="idKontak">ID Kontak:</label>
                <input type="text" class="form-control" id="idKontak" name="id" placeholder="Masukkan ID Kontak">
            </div>
            <button type="submit" class="btn btn-danger">Hapus Kontak</button>
        </form>
    </div>

    <!-- Tambahkan script Bootstrap di sini -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>
</html>

