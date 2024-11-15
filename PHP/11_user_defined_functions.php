<?php
//function defination
function myfun()
{
    echo "<h1>Wellcome to the function<br><h1>";
}
function sum($a, $b)
{
    return $a + $b;
    
}
function mul($a,$b)
{
    return($a*$b);
}
//function call
myfun();
$total = sum(12,11);
echo $total."<br>";
$mul=mul(12,14);
echo $mul."<br>";


?>