<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Buat koneksi dengan MySQL
    $conn = mysqli_connect("localhost", "root", "", "fakultas");

    //cek koneksi dengan Database
    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal " . mysqli_connect_error();
    } else {
        echo "Koneksi Berhasil";
    }
    //buat sql query untuk insert ke database
    $query = "DELETE FROM mahasiswii WHERE  id=$id";

    if (mysqli_query($conn, $query)) {
        echo "Data baru berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    //tutup koneksi dengan database
    mysqli_close($conn);
}
