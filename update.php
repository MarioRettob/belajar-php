<?php
if (isset($_GET["id"])) {
    $id = $_GET['id'];
    // Buat koneksi dengan MySQL
    $conn = mysqli_connect("localhost", "root", "", "fakultas");

    //cek koneksi dengan Database
    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal " . mysqli_connect_error();
    } else {
        echo "Koneksi Berhasil";
    }

    //membaca data dari table mysql
    $query = "SELECT * FROM mahasiswii WHERE id=$id";

    //tampilkan data, dengan menjalankan sql query
    $result = mysqli_query($conn, $query);
    $mahasiswii = [];
    if ($result) {
        // tampilkan data satu per satu
        while ($row = mysqli_fetch_assoc($result)) {
            //echo "<br>" . $row["nama"];
            $mahasiswii = $row;
        }
        mysqli_free_result($result);
    }

    //tutup koneksi mysql
    mysqli_close($conn);
}

if (isset($_POST["submit"])) {
    $id_jurusan = $_POST["id_jurusan"];
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jenisKelamin = $_POST["jenis_kelamin"];
    $tp_lahir = $_POST["tempat_lahir"];
    $tg_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];
    $id = $_POST["id"];

    // Buat koneksi dengan MySQL
    $conn = mysqli_connect("localhost", "root", "", "fakultas");

    //cek koneksi dengan Database
    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal " . mysqli_connect_error();
    } else {
        echo "Koneksi Berhasil";
    }
    //buat sql query untuk insert ke database
    $query = "UPDATE mahasiswii SET nim='$nim',nama='$nama',id_jurusan='$id_jurusan',tempat_lahir='$tp_lahir',
    tanggal_lahir='$tg_lahir',alamat='$alamat' WHERE id=$id ";

    if (mysqli_query($conn, $query)) {
        echo "Data baru berhasil diubah";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    //tutup koneksi dengan database
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <h1>Update Data</h1>
    <!-- <?php var_dump($mahasiswii); ?> -->
    <form action="update.php" method="POST">
        NIM : <input type="text" name="nim" value="<?php echo $mahasiswii['nim']; ?>"><br>
        Nama : <input type="text" name="nama" value="<?php echo $mahasiswii['nama']; ?>"><br>
        ID Jurusan : <input type="number" name="id_jurusan" value="<?php echo $mahasiswii['id_jurusan']; ?>"><br>
        Jenis Kelamin : <input type="text" name="jenis_kelamin" value="<?php echo $mahasiswii['jenis_kelamin']; ?>"><br>
        Tempat Lahir : <input type="text" name="tempat_lahir" value="<?php echo $mahasiswii['tempat_lahir']; ?>"><br>
        Tanggal Lahir : <input type="text" name="tanggal_lahir" value="<?php echo $mahasiswii['tanggal_lahir']; ?>"><br>
        Alamat : <input type="text" name="alamat" value="<?php echo $mahasiswii['alamat']; ?>"><br>
        <input type="number" name="id" value="<?php echo $mahasiswii['id'] ?>" hidden>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>

</html>