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
 $t = date("H");
 
 if ($t < "10") {
     echo "Have a good morning!";
 } else if ($t < "20") {
     echo "Have a goodasa day!";
 } else {
     echo "Have a good night!";
 }
?>
</body>
</html>