<?php
function FACTORIAL ($n){
    if($n <= 1){
        return 1;
    }
    else{
        return $n * FACTORIAL ($n-1);
    }
}
$number = 3;
$fact =FACTORIAL ($number);
echo "Factorial of $number is $fact";
?>