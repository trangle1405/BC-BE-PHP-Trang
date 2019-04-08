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

    function deleteElementFromArray($array, $element)
    {
        $array_length = count($array);
        $index_del = null;
        for ($i = 0; $i < $array_length; $i++) {
            if ($array[$i] === $element) {
                $index_del = $i;
            }
        }
        array_splice($array, $index_del, 1);
        array_push($array, "0");

        for ($i=0; $i < $array_length ; $i++) {        
            echo $array[$i].", ";
         }
    }
    $arr = array(12, 567, 678, 445, 84, 78, 1, 3, 5, 6);
    $element = 78;
    deleteElementFromArray($arr,$element);
    $element = 84;
    deleteElementFromArray($arr,$element);

    ?>
</body>

</html>