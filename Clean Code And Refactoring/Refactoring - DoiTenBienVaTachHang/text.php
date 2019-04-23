<?php
include_once "Calculator.php";

$calculatorText = new Calculator();
$result = $calculatorText->calculate(1,2,"+");
echo $result;