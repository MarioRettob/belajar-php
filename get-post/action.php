<?php

if (isset($_GET['p'])) { // standar
    echo $_POST['nama'];
    echo "</br>";
    echo $_POST['password'];
} else if ($_GET['p'] == "pesan") { // ada pesannya
    echo "Halo Apa Kabar " . $_POST['nama'];
    echo "</br>";
    echo "Password kamu " . $_POST['password'];
} else if ($_GET['p'] == "aman") { //tambahan error
    if (!empty($_POST['nama'])) {
        echo $_POST['nama'];
    }
    echo "</br>";
    if (!empty($_POST['password'])) {
        echo $_POST['password'];
    } else {
        echo "password masih kosong";
    }
} else if ($_GET['p'] == "gambar") { //tampil gambar
    $size = getimagesize($_FILES['berkas']['tmp_name']); // mengamnbil size
    $image = "data: " . $size['mime'] . ";base64," .
        base64_encode(file_get_contents($_FILES['berkas']['tmp_name'])); // menampilkan gambar
    echo "<image src='" . $image . "' width='720'>";
} else {
    echo "Anda tidak boleh mengakses halaman ini";
}
