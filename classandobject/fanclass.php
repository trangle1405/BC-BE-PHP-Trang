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
    $SLOW = 1;
    $MEDIUM = 2;
    $FAST = 3;
    class Fan {
        private $speed;
        private $status;
        private $radius;
        private $color;

        public function __construct ($speed = 1,$status = false,$radius = 5,$color = "blue")
        {
          $this->speed = $speed;
          $this->status = $status;
          $this->radius = $radius;
          $this->color = $color;
        }
        public function get_speed()
        {                   
            return $this->speed;
        }

        public function get_status()
        {                   
            return $this->status;
        }

        public function get_radius()
        {                   
            return $this->radius;
        }

        public function get_color()
        {                   
            return $this->color;
        }

        public function set_speech($speed)
        {
           return $this->speed = $speed;
        }

        public function onOffFan()
        {
            $this->status = !$this->status;
        }

        public function set_radius($radius)
        {
           return $this->radius = $radius;
        }

        public function set_color($color)
        {
            $this->color = $color;
        }

        public function toString()
        { 
            result = "fan : <br> speed = ".$this->get_speed()."<br> color = ".$this->get_color()."<br> radius = ".$this->get_radius();
            if ($this->status) {
                return $resutl."<br> fan is on";
            } else
                return $resutl."<br> fan is off";
        }

    }
    
    $fan1 = new Fan ("MEDIUM", true, 6, "red");
    $fan1->set_color("green");
    $fan1->onOffFan();
    echo $fan1->toString();
    ?>
</body>

</html>