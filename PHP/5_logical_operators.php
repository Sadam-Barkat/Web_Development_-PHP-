<?php

$temp = 31;
$cludy = false;
if($temp > 0 && $temp <=30)
{
    echo "<h1>Weather is good<br></h1>";
}
else 
{
    echo "<h1>Weather is not good<br></h1>";
}
if($cludy)
{
    echo "<h1>its cloudy<br></h1>";
}
else 
{
    echo "<h1>its sunny<br></h1>";
}


?>