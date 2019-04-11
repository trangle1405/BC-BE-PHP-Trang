<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    $tiGia = 23000;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $usd = $_POST["usd"];
        echo "so tien viet la: ". $usd*$tiGia;
    }

    ?>
    <form method="post">
        <h3>ung dung chuyen doi tien </h3>
        nhap so tien (USD): <input type="number" name="usd"><br><br>
        <input type="submit" name="submit" value="chuyen doi">
    </form>
</body>
</html>