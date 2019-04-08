<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>find min number</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
    <?php
    function findMinNumber($array){

        $min = $array[0];
        $arrlength = count($array);
        for ($i=1; $i < $arrlength ; $i++) { 
            if ($array[$i]<$min){
                $min = $array[$i];
            }
            
        }
        return $min;
    }

    $arr = array(3,3,5,2,4);
    echo findMinNumber($arr);
    ?>
</body>

</html>