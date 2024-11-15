<?php

//Basic arithmatic operations:
echo "1-Basic Arithmatic Operations:<br>";

$fno = 20;
$lno = 10;

$sum = $fno+$lno;
echo "<br>The sum of two numbers is = {$sum}";

$mul = $fno*$lno;
echo "<br>The multiplication of two numbers is = ".$mul;

$sub = $fno-$lno;
echo "<br>The subtraction of two numbers is = ".$sub;

$div = $fno/$lno;
echo "<br>The division of two numbers is = ".$div;

$modulus = $fno%$fno;
echo "<br>The modulus of two numbers is = ".$modulus;

$power = $fno**$lno;
echo "<br>The power of number is = ".$power;
echo "<br><br>";


//Increment operation:
echo "2-Increment Operator:<br>";

$a = 10;
echo $a;
$a++;//post increment
echo "<br>".$a;

$b = $a++;
echo "<br>".$b;
echo "<br>".$a;

//Operator precedence:
echo "<br>Operator precedence<br>";
echo "()<br>";
echo "**<br>";
echo "*/<br>";
echo "%<br>";
echo "+<br>";
echo "-<br>";

$total = 3+4/2*10**(6-5);
//3+4/2*10
//3+2*10
//3+20
//23
echo $total;

?>