<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>z</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
    $character = "a";
    $str = "asfdsgjadfhakg lkfadfasdjflkasd lsakf";
    $array_str = str_split($str);
    $count = 0;
    $str_length = count($array_str);
    for ($i=0; $i < $str_length ; $i++) {
        if($array_str[$i] === $character ){
            $count++;
        }
    }
    echo $count;
    ?>
</body>
</html>