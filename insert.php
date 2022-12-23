<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswi</title>
</head>

<body>
    <h1>Masukan Data</h1>
    <form action="insert.php" method="POST">
        NIM : <input type="text" name="nim"><br>
        Nama : <input type="text" name="nama"><br>
        ID Jurusan : <input type="number" name="id_jurusan"><br>
        Jenis Kelamin : <input type="text" name="jenis_kelamin"><br>
        Tempat Lahir : <input type="text" name="tempat_lahir"><br>
        Tanggal Lahir : <input type="text" name="tanggal_lahir"><br>
        Alamat : <input type="text" name="alamat"><br>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>

</html>

<?php
//tangkap data dari form
if (isset($_POST["submit"])) {
    $id_jurusan = $_POST["id_jurusan"];
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jenisKelamin = $_POST["jenis_kelamin"];
    $tp_lahir = $_POST["tempat_lahir"];
    $tg_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];

    // Buat koneksi dengan MySQL
    $conn = mysqli_connect("localhost", "root", "", "fakultas");

    //cek koneksi dengan Database
    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal " . mysqli_connect_error();
    } else {
        echo "Koneksi Berhasil";
    }
    //buat sql query untuk insert ke database
    $query = "INSERT INTO mahasiswii (id_jurusan,  nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) VALUES ('$id_jurusan', '$nim', '$nama', '$jenisKelamin', '$tp_lahir', '$tg_lahir', '$alamat')";

    if (mysqli_query($conn, $query)) {
        echo "Data baru berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    //tutup koneksi dengan database
    mysqli_close($conn);
}
?>