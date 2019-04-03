<!DOCTYPE html>
<html>

<body>
    <?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $fisrtOperand = (int)$_POST["firstOperand"];
      $secondOperand = (int)$_POST["secondOperand"]; 
      $calculation = $_POST["calculation"];
      try {
        switch  ($calculation) {
        case "addition":
        echo $fisrtOperand."+".$secondOperand."=".($fisrtOperand + $secondOperand);
        break;
        case "subtraction": 
        echo $fisrtOperand."-".$secondOperand."=".($fisrtOperand - $secondOperand);
        break;
        case "multiplication":
        echo $fisrtOperand."x".$secondOperand."=".($fisrtOperand * $secondOperand);
        break;
        case "division":
            if ($secondOperand === 0){

                throw new Exception("khong the chia cho 0");
                break;
            }
        echo $fisrtOperand.":".$secondOperand."=".($fisrtOperand / $secondOperand);
        break;
    }
      }
      catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
      }
    
    }
   ?>
</body>

</html>