<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>circle and cylinder</title>
</head>
<body>
    <?php
    class Circle {
        protected $radius;
        protected $color;
        public function __construct($radius,$color)
        {
            $this->radius = $radius;
            $this->color = $color;
        }
        public function getRadius()
        {
            return $this->radius;
        }
        public function getColor()
        {
            return $this->color;
        }
        public function setRadius($radius)
        {
            $this->radius = $radius;
        }
        public function setColor($color)
        {
            $this->color = $color;
        }
        public function toString()
        {
            echo "hinh tron co ban kinh ". $this->getRadius()." mau ". $this->getColor();
        }
    }
    class Cylinder extends Circle{
        private $height;
        public function __construct($radius,$color,$height)
        {
            parent::__construct($radius,$color);
            $this->height = $height;
        }
        public function getHeight()
        {
            return $this->height;
        }
        public function setHeight($height)
        {
            $this->height = $height;
        }
        public function toString()
        {
            echo "hinh tru co ban kinh ". $this->getRadius()." chieu cao ".$this->getHeight()." mau ". $this->getColor();
        }
    }

    $circle1 = new Circle(3,"blue");
    $cylinder1 = new Cylinder(3,"green",5);
    $circle1->toString();
    $cylinder1->toString();
    
    ?>
</body>
</html>