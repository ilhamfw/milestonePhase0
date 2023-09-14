<?php
$conn = mysqli_connect("localhost:3307", "root", "", "toko_gadget");

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM daftar_kontak";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Daftar Kontak</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nama</th><th>Email</th><th>Telepon</th><th>Message</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["telepon"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada kontak yang ditemukan.";
}

mysqli_close($conn);
?>
