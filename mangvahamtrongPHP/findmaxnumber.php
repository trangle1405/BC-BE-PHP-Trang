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
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    
                $array = array(array(2, 6, 3), array(6, 5, 6), array(2, 7, 3));
                $value = $_POST("value");
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 3; $j++) {
                        
                        $array[$i][$j] = $value;
                    }
                }
                $array = array(array(2, 6, 3),  array(6, 5, 6),  array(2, 7, 3));
                $max = $array[0][0];
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 3; $j++) {
                        if ($array[$i][$j] > $max) {
                            $max = $array[$i][$j];
                        }
                    }
                }
                $value = null;
                echo $max;

            }
            ?>

<form method="post">
        <span><?php echo $i ?></span><br>
        nhap chieu rong: <input type="number" name="number">
        nhap chieu dai: <input type="number" name="number">
        So nhap vao: <input type="number" name="value">
        <input type="submit" name="submit" value="register">
    </form>
</body>

</html>