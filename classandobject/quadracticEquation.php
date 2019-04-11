<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>class</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
    <?php
    class quadraticEquation
    {
        private $a;
        private $b;
        private $c;
        public $delta;
        function __construct($a, $b, $c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
            $this->delta = null;
        }
        function get_a()
        {
            return $this->a;
        }

        function get_b()
        {
            return $this->b;
        }

        function get_c()
        {
            return $this->c;
        }

        function getDiscriminant()
        {
            $this->delta = $this->b * $this->b - 4 * $this->a * $this->c;
            return $this->delta;
        }
        function getRoot1()
        {
            if ($this->delta >= 0) {
            
                return  (-$this->b + pow($this->delta, 0.5)) / (2 * $this->a);
            } else
                return 0;
        }
        function getRoot2()
        {
            if ($this->delta >= 0) {
                return $this->root1 = (-$this->b - pow($this->delta, 0.5)) / (2 * $this->a);
            } else return 0;
        }
    }


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $a = (float)$_POST["a"];
        $b = (float)$_POST["b"];
        $c = (float)$_POST["c"];
        
        $phuongtrinh = new quadraticEquation($a, $b, $c);
        $phuongtrinh->getDiscriminant();
        if ($phuongtrinh->delta > 0) {
            echo "phuong trinh co hai nghiem: x1 = " . $phuongtrinh->getRoot1() . ", x2 = " . $phuongtrinh->getRoot2();
        } else if ($phuongtrinh->delta === 0) {
            echo "phuong trinh co mot nghiem: x1 = x2 = " . $phuongtrinh->getRoot1();
        } else
            echo "phuong trinh vo nghiem";
        
    }


    ?>
    <form method="post">
        <h3>Tinh nghiem phuong trinh bac hai:</h3>
        nhap a: <input type="number" name="a"><br><br>
        nhap b: <input type="number" name="b"><br><br>
        nhap c: <input type="number" name="c"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>