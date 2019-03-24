<?php
include 'Calculator.php';

$myCalc = new Calculator();
echo "You have added two numbers together to get: ", $myCalc->add(2,5);
echo "<br>";
echo "You have added two numbers together to get: ", $myCalc->add(6,13);
echo "<br>";
echo "You have added two numbers together to get: ", $myCalc->add(22,8);
echo "<br>";
echo "You have added two numbers together to get: ", $myCalc->add(10,1);

?>