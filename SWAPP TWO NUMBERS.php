<?php
$num1 = 10;
$num2 = 20;
echo "BEFORE SWAPP: " . "num1 = " . $num1 . ", num2 = " . $num2 . "<br>";

$temp = $num1;
$num1 = $num2;
$num2 = $temp;

echo "AFTER SWAPP: " . "num1 = " . $num1 . ", num2 = " . $num2 . "";
?>