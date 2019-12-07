<?php
//superglobal, variable global milik php, merupakan array associative

$mahasiswa = [
    [
        "nama" => "mamet",
        "nrp" => "0900877",
        "email" => "mamet@gmail.com"
    ],
    [
        "nama" => "reni",
        "nrp" => "098765444",
        "email" => "ren@gmail.com",
        "tugas" => [90, 80, 70],
        "gambar" => "sandika.jpg"
    ],


];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>


                <a href="latihan2.php?nur=<?php echo $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>"><?php echo $mhs["nama"] ?></a>
            </li>
        <?php endforeach; ?>

    </ul>

</body>

</html>