<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost:3307", "root", "", "toko_gadget");

    if (!$conn) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $telepon = $_POST["telepon"];
    $message = $_POST["message"];

    $sql = "UPDATE daftar_kontak SET nama='$nama', email='$email', telepon='$telepon', message='$message' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Kontak berhasil diperbarui.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kontak</title>
</head>
<body>
    <h2>Edit Kontak</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        ID Kontak: <input type="text" name="id"><br>
        Nama: <input type="text" name="nama"><br>
        Email: <input type="text" name="email"><br>
        Telepon: <input type="text" name="telepon"><br>
        Message: <input type="text" name="message"><br>
        <input type="submit" value="Edit Kontak">
    </form>
</body>
</html>