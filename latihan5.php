<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>



<body>

    <?php if (isset($_POST["submit"])) : ?>
        <h1>halo, selamat datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <form action="" method="post">
        masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>

</body>

</html>