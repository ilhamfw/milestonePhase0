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
</head>
<body>
    <h2>Hapus Kontak</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        ID Kontak: <input type="text" name="id"><br>
        <input type="submit" value="Hapus Kontak">
    </form>
</body>
</html>
