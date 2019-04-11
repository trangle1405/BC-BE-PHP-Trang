<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Point2D and Point3D</title>
</head>
<body>
    <?php
    class Point2D {
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
    class Point3D extends Point2D {
        private $z;
        public function __construct($x,$y,$z)
        {
            parent::__construct($x,$y);
            $this->z= $z;
        }
        public function getZ()
        {
            return $this->z;
        }
        public function setZ($z)
        {
            $this->z= $z;
        }
        public function getXYZ()
        {
            $coordinates= array();
            array_push($coordinates, $this->x);
            array_push($coordinates,  $this->y);
            array_push($coordinates, $this->z);
            return $coordinates;
        }
        public function toString()
        {
            return "(".$this->x.",".$this->y.",". $this->z.")";
        }
    }
     $point1 = new Point2D(3,5);
     $point2 = new Point3D(2,3,4);
     echo $point1->toString();
     echo $point2->toString();
    
    ?>
</body>
</html>