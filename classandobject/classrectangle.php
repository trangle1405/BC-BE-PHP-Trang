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
    class rectangle {
        private $width;
        private $height;
        function __construct($width, $height)
        {
            $this->width = $width;
            $this->height =$height;
        }
       public function getArea(){
            return $this->width*$this->height;
        }
        public function getPerimeter(){
            return ($this->width+$this->height)*2;
        }
        public function display(){
            return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
        }
    }
        $width = 12;
        $height = 13;
        $rectangle1 = new rectangle($width,$height);
        echo $rectangle1->getPerimeter();
        echo $rectangle1->display();
    
    
    ?>
</body>
</html>