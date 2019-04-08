<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php
    for ($i = 1; $i <= 10; $i++){
        for ($j=1; $j <= $i; $j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
    for ($i = 10; $i>= 1; $i--){
        for ($j=1; $j <= $i; $j++){
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";

    $m=1;
for($i=1; $i<=10; $i++) { // iterates over number of rows
    for($j=$i; $j<=9; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for($k=1; $k<=$m; $k++)  {
        echo "*";
    }
    for($c=$m; $c>1; $c--) {
        echo "*";
    }
    echo "<br>";
    $m++;
}
    ?>

</body>
</html>