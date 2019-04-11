<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>triangle</title>
</head>
<body>
 <?php
//  class Shape {
//     public $name;
    
//     public function __construct($name)         
//     {
//         $this->name = $name;
//     }
//     public function show()
//     {
//         echo "I am a shape. My name is".$this->name;
//     }
// }
// class Triangle extends Shape{
//     private $side1;
//     private $side2;
//     private $side3;
//     private $color;
//     public function __construct($name, $side1 = 1, $side2 = 1, $side3 = 1, $color)
//     {
//         parent::__construct($name);
//         $this->side1 = $side1;
//         $this->side2 = $side2;
//         $this->side3 = $side3;
//         $this->color = $color;
//     }
//     public function getArea()
//     {
//         $p = ( $this->side1 +  $this->side2 +  $this->side3)/2;
//         $s = sqrt($p*($p - $this->side1)*($p - $this->side2)*($p - $this->side3));
//         return $s;
//     }
//     public function getPrimeter()
//     {
//         return $this->side1 + $this->side2 + $this->side3;
//     }
//     public function toString()
//     {
//         return "tam giac co mau ".$this->color.", co chu vi = ".$this->getPrimeter().", co dien tich = ".$this->getArea();
//     }
// }

// function isTriangle($a, $b, $c)
// {
//     if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
//         return true;
//     } else 
//         return false;
    
// }
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $name = $_POST["name"];
//     $color = $_POST["color"];
//     $side1 = $_POST["side1"];
//     $side2 = $_POST["side2"];
//     $side3 = $_POST["side3"];
//     if (isTriangle($side1, $side2, $side3)){
//         $triangle1 = new Triangle($name, $side1, $side2, $side3,  $color);
//         echo $triangle1 ->toString();
//     }
// }
 ?>  
 <form method="post">
<h2>Input Triangle</h2>
name:  <input type="number" name="name"><br><br>
color:  <input type="number" name="color"><br><br>
side1:  <input type="number" name="side1"><br><br>
side2:  <input type="number" name="side2"><br><br>
side3:  <input type="number" name="side3"><br><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html> -->