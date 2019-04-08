<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>thong bao nhap so bat hop le</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<style type="text/css">
    .calculate {
        height: 200px;
        width: 400px;
        margin: 0;
        border: 1px #CCC solid;
        padding: 10px;
    }
</style>

<body>

    <form method="POST">
        <div class="calculate">
            <h2>Simple Calculator</h2>
            x: <input type="number" name="number1"><br><br>
            y: <input type="number" name="number2"><br><br>
            <input type="submit" value="submit">
        </div>
    </form>
    <?php
    function calc($number1, $number2)
    {
        echo $number1."+".$number2."=" . ($number1 + $number2)."<br>";
        echo $number1."-".$number2."=" . ($number1 - $number2)."<br>";
        echo $number1."x".$number2 . "=" . ($number1 * $number2)."<br>";
        echo $number1.":".$number2 . "=" . ($number1 / $number2)."<br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = (int)$_POST["number1"];
        $number2 = (int)$_POST["number2"];
        try {

            if ($number2 === 0) {

                throw new Exception("y phai khac 0");
            }

            calc($number1, $number2);
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }
    }

    ?>
</body>

</html>