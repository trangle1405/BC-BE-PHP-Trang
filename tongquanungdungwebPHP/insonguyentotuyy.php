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
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $amount = $_POST["amount"];
    $count = 0;
    $n = 2;
    $isPrime = true;
    while ($count<$amount){
        for ($i=2; $i < $n; $i++) { 
            if ($n % $i === 0) {
                $isPrime = false;
            }
        }
        if($isPrime){
            echo $n.", ";
            $count++;
        }
        $isPrime = true;
        $n++;

    }

}

?>
<form method="post">
        <h3>in so nguyen to </h3>
        nhap so nguyen to can in:  <input type="number" name="amount"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>