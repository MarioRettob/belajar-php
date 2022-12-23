<?php
// Buat koneksi dengan MySQL
$conn = mysqli_connect("localhost", "root", "", "fakultas");

//cek koneksi dengan Database
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal " . mysqli_connect_error();
} else {
    echo "Koneksi Berhasil";
}

//membaca data dari table mysql
$query = "SELECT * FROM mahasiswii";

//tampilkan data, dengan menjalankan sql query
$result = mysqli_query($conn, $query);
$mahasiswi = [];
if ($result) {
    // tampilkan data satu per satu
    while ($row = mysqli_fetch_assoc($result)) {
        //echo "<br>" . $row["nama"];
        $mahasiswi[] = $row;
    }
    mysqli_free_result($result);
}

//tutup koneksi mysql
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-SEAL</title>
</head>

<body>
    <h1>Data Mahasiswi</h1>
    <a href="insert.php">Tambah Data</a>
    <table border="1" style="width: 100%;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($mahasiswi as $value) : ?>
            <tr>
                <td><?php echo $value["nim"]; ?></td>
                <td><?php echo $value["nama"]; ?></td>
                <td><?php echo $value["tempat_lahir"]; ?></td>
                <td>
                    <a href="<?php echo "update.php?id=" . $value["id"]; ?>">Edit</a>
                    <a href="<?php echo "delete.php?id=" . $value["id"]; ?>">Delete</a>
                </td>


            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>