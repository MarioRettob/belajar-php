<?php

$nama = "AnyaForger";
//echo $nama;




//Pengulangan For
//$no = 10;
/*for ($i = 0; $i < $no; $i++) {
    $n = $i + 1;
    echo $n . " " . $nama . "<br/>";
}*/

//Pengulangan While
/*$no = 10;
$i = 0;
while ($i < $no) {
    $n = $i + 1;
    echo $n . " " . $nama . "<br/>";
    $i++;
}*/

//Pengulangan Do While
/*$no = 10;
$i = 0;
do {
    $n = $i + 1;
    echo $n . " " . $nama . "<br/>";
    $i++;
} while ($i < $no);*/

//Pengulangan foreach
//$data = ['grandmax', 'ayla', 'kijang', 'jazz'];
//echo $data[3];
/*
foreach ($data as $value) {
    echo $value . "<br>";
}*/

//Percabangan
/*
if ($nama == "Faldy") {
    echo $nama . " adalah orang manado";
} else if ($nama == "hankook") {
    echo $nama . " bukan orang manado";
} else {
    echo $nama . " darimana ya?";
}*/

/*switch ($nama) {
    case "Faldy":
        $pesan = $nama . " adalah orang manado";
        break;
    case "Hankook":
        $pesan = $nama . " berasal dari Tomohon";
        break;
    default:
        $pesan = $nama . " darimana ya?";
}
echo $pesan;*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan-PHP</title>
</head>

<body>
    <h1>Input nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="">Nama</label>
        <input type="text" name="nama">
        <label for="">Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (!empty($_POST['submit'])) {
        switch ($_POST['nama']) {
            case "Faldy":
                $pesan = $_POST['nama'] . " adalah orang manado";
                break;
            case "Anyaforger":
                $pesan = $_POST['nama'] . " berasal dari Tomohon";
                break;
            default:
                $pesan = $_POST['nama'] . " darimana ya?";
        }
        for ($i = 0; $i < $_POST['no']; $i++) {
            echo $pesan . "<br>";
        }
    } else {
        echo "Anda belum input nama dan jumlah";
    }
    ?>
</body>

</html>