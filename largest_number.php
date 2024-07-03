<?php

$num1 =4;
$num2 = 5;
$num3 = 6;

if ($num1 > $num2 && $num1 > $num3) {
    echo "The number $num1 is the largest";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "The number $num2 is the largest";
} else if($num3 > $num1 && $num3 > $num2){
    echo "The number $num3 is the largest";
}

