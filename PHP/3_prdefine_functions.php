<?php

//String function:
echo "1-String function:<br>";
$name = "sadam";
echo strlen($name);
echo "<br><br>";

//Replace function:
echo "2-Replace function:<br>";
echo str_replace("S","A",$name);
echo "<br><br>";

//Ireplace function:
echo "3-Ireplace function:<br>";
echo str_ireplace("A","i",$name);
echo "<br><br>";

//Ucword function:
echo "4-Ucword function:<br>";
echo ucwords($name);
echo "<br><br>";

$a = "this is my book and i know about it";
//Ucfirst function:
echo "5-Ucfirst function:<br>";
echo ucfirst($a);
echo "<br>";
echo ucwords($a);
echo "<br><br>";



//Number function:
echo "Number Function:<br>";
$num = 30.31;
var_dump(is_int($num));
echo "<br>";
var_dump(is_float($num));
echo "<br>";

$num2 = 100.0;
var_dump(is_numeric($num2));
echo "<br><br>";

//Math function;
echo "Math Fnction:<br>";
echo pi()."<br>";
echo abs(-76)."<br>";
echo sqrt(64)."<br>";
echo round(30.78)."<br>";
echo rand()."<br>";
echo rand(1,100)."<br>";

