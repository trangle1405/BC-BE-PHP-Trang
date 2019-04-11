<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shape</title>
</head>
<body>
    <?php
    class Shape {
        public $name;
        
        public function __construct($name)         
        {
            $this->name = $name;
        }
        public function show()
        {
            echo "I am a shape. My name is".$this->name;
        }
    }
    class Circle extends Shape {
        public $radius;
        public function __construct($name,$radius)
        {
            parent::__construct($name);
            $this->radius = $radius;
        }
        public function calculateArea()
        {
            return pi() * pow($this->radius,2);
        }
        public function calculatePerimeter()
        {
            return pi() * $this->radius * 2;
        }
    }

    class Cylinder extends Circle {
        public $height;
        public function __construct($name, $radius, $height)
        {
            parent::__construct($name, $radius);
            $this->height = $height;
        }
        public function calculateArea()
        {
            return parent::calculateArea()*2 + parent::calculatePerimeter*$this->height;
        }
        public function calculateVolume()
        {
            return parent::calculateArea * $this->height;
        }
    }

    class Rectangle extends Shape{
        public $width;
        public $height;
       
        public function __construct($name, $width, $height)
        {
            parent::__construct($name);
            $this->width = $width;
            $this->height = $height;
        }
       
        public function calculateArea(){
             return $this->height * $this->width;
        }
       
        public function calculatePerimeter(){
             return ($this->height + $this->width) * 2;
        }
       }

    class Square extends Rectangle {
        public function __construct($name, $width) 
        {
            parent::__construct($name,$width,$width);
        }
    };

    $circle1 = new Circle("circle 1", 3);
    $cylinder1 = new Cylinder("cylinder 1", 3, 5);
    $rectangel1 = new Rectangle("rectangle 1", 3, 5);
    $square1 = new Square("square 1", 3);
    $square1->show();
    echo 'Circle area: ' . $circle1->calculateArea() . '<br />';
    echo 'Circle perimeter: ' . $circle1->calculatePerimeter() . '<br />';
    echo 'Rectangle area: ' . $square1->calculateArea() . '<br />';
    echo 'Rectangle perimeter: ' . $square1->calculatePerimeter() . '<br />';
    ?>
</body>
</html>