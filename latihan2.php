<?php
//cek apakah tidak ada data di $_GET

if (!isset($_GET["nur"]) || !isset($_GET["nrp"]) || !isset($_GET["email"])) {
    //redirect
    header("Location: latihan.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <ul>
        <li><?= $_GET["nur"]; ?></li>
        <li><?php echo $_GET["nrp"]; ?></li>
        <li><?php echo $_GET["email"]; ?></li>

    </ul>

    <a href="latihan.php">kembali ke daftar mahasiswa</a>

</body>

</html>