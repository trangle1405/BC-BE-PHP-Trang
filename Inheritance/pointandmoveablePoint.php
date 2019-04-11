<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    class Point {
        protected $x;
        protected $y;
        public function __construct($x,$y)
        {
            $this->x= $x;
            $this->y= $y;
        }
        public function getX()
        {
           return $this->x;
        }
        public function getY()
        {
            return $this->y;
        }
        public function setX($x)
        {
            $this->x= $x;
        }
        public function setY($y)
        {
            $this->y= $y;
        }
        public function setXY($x,$y)
        {
            $this->x= $x;
            $this->y= $y;
        }
        public function getXY()
        {
            $coordinates = array();
            array_push($coordinates, $this->x);
            array_push($coordinates,  $this->y);
            foreach ($coordinates as $position) {
                echo $position.", ";
            }
            
        }
        public function toString()
        {
            return "(".$this->x.",".$this->y.")";
        }
    }
    class MovablePoint extends Point {
        protected $xSpeed;
        protected $ySpeed;
        public function __construct($x,$y,$xSpeed, $ySpeed)
        {
            parent::__construct($x,$y);
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;
        }
        public function getXSpeed()
        {
            return $this->xSpeed;
        }
        public function setXSpeed($xSpeed)
        {
            $this->xSpeed= $xSpeed;
        }
        public function getYSpeed()
        {
            return $this->ySpeed;
        }
        public function setYSpeed($ySpeed)
        {
            $this->ySpeed= $ySpeed;
        }
        public function setSpeed($xSpeed,$ySpeed)
        {
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;
        }
        public function getSpeed()
        {
            $coordinates = array();
            array_push($coordinates,  $this->xSpeed);
            array_push($coordinates,  $this->ySpeed);
            foreach ($coordinates as $position) {
                echo $position.", ";
            }
            
        }
        public function toString()
        {
            return "(".$this->x.",".$this->y."), speed = (".$this->xSpeed.",".$this->ySpeed.")";

        }
        public function move()
        {
            $this->x += $this->xSpeed;
            $this->y += $this->ySpeed;
            return $this;
        }
    }
    $point1 = new MovablePoint(2,3,1,1);
    echo $point1->toString();
    echo "<br>";
    $point1->move();
    echo "<br>";
    echo $point1->toString();

    ?>
</body>
</html>