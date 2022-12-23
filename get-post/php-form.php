<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET & POST</title>
</head>

<body>
    <h1>Form Login</h1>
    <form action="action.php?p=gambar" method="POST" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="Nama">
        <input type="password" name="password" placeholder="Password">
        <input type="file" name="berkas">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>