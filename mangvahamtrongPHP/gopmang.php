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
    $arr1 = array(3, 3, 5, 2, 4);
    $arr2 = array(2, 4, 5, 6, 7, 7, 3, 7, 3);
    $arr3 = array();
    $length_arr1 = count($arr1);
    $length_arr2 = count($arr2);
    $index = 0;
    for ($i = 0; $i < $length_arr1; $i++) {
        $arr3[$i] = $arr1[$i];
    }
    for ($i = $length_arr1; $i < $length_arr1 + $length_arr2; $i++) {
        $arr3[$i] = $arr2[$index];
        $index++;
    }
    $length_arr3 = count($arr3);
    for ($i=0; $i < $length_arr3 ; $i++) { 
        echo $arr3[$i].", ";
    }
    ?>
</body>

</html>