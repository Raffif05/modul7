<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Acak Dadu</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 50px;
        }
        img {
            width: 150px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1>Acak Dadu</h1>

    <?php
    $dadu = rand(1, 6);

    echo "<img src='img/img/$dadu.png' alt='Dadu $dadu'>";

    ?>

    <!-- Tombol untuk me-refresh halaman -->
    <br>
    <button onclick="window.location.reload();">Lempar Lagi</button>

</body>
</html>

