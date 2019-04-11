<!DOCTYPE html>
<html>
<hea <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>class</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    </head>

    <body>
        <?php
    class Stopwatch{
       private $startTime;
       private $endTime;
       
      public function get_starttime(){
           return $this->startTime;
       }

       public function get_endtime(){
            return $this->endTime;
        }

        public function start(){
            $this->startTime = microtime(true);
        }

        public function stop(){
            $this->endTime = microtime(true);
    }
    
        public function getElapsedTime(){
        return ($this->endTime - $this->startTime);
    }
    }
$stopwatch1 = new Stopwatch;
$arrayNumber = array ();
$randomNumber = null;
for ($i=0; $i <100000 ; $i++) { 
    $randomNumber = rand();
    array_push($arrayNumber,$randomNumber);
}
$stopwatch1->start();

sort($arrayNumber);
$stopwatch1->stop();
echo $stopwatch1->getElapsedTime();

    ?>
    </body>

</html>