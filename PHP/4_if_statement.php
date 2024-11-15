<?php

// $age = 0;
// if($age >18)
// {
//     echo "<h1>You can vote!</h1>";
// }
// else if($age==0)
// {
//     echo "<h1>invalid age</h1>";
// }
// else
// {
//     echo "<h1>You are not eligible</h1>";
// }

$hours = 0;
$rate = 10;
$weeklypay = 0;

if($hours <=40)
{
    $weeklypay = $hours * $rate;
    echo "<h1>Your total amount is : {$weeklypay} </h1>";
    echo "<br>";
}
else if($hours==0)
{
    echo "Your total amount is : {$weeklypay}";
    echo "<br>";
}

?>