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
    class person{
        public  $name;
        private $age;
        function __construct($name,$age)
        {
            $this->name = $name;
            $this->age = $age;
        }
        public function get_age(){
           return $this->age;

        } 
         
        public function set_age($age){
            return $this->age;
        }
    }

    $person1 = new person("sdgf",13);
    echo $person1->get_age();
    $age = $person1.name;
    echo $age;
    
    ?>
</body>
</html>