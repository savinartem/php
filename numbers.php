<?php

//  Declaring numbers
$a = 123;
$b = 4444;
$c = .00232;

//  Arithmetic operations
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>'; 
echo $a / $b . '<br>';
echo $a % $b . '<br>';



//  Increment operator 
echo $a++ . '<br>';//Post-Increment
echo ++$a . '<br>';//Pre-Increment

//  Decrement operator
echo $a-- . '<br>';
echo --$a . '<br>';

// Number checking functions
is_float(9.25); // true
is_integer(3.44); // false
is_numeric("22.35"); // true
is_numeric("34.45"); // true

//  Conversion
$strNumber = '90.34';
$number = (float)$strNumber; // 8. Use floatval(), (int), intval()
var_dump($number);
echo '<br>';

//  Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';

//  Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';



?>
