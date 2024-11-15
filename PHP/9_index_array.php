<?php

// $arr = array(10,20,30,40,50);
// for($i=0; $i<=4; $i++)
// {
//     echo $arr[$i]."<br>";
// }


$fruits = array("Apple","Banana","Mango","Orange");
foreach($fruits as $fruit)
{
    echo $fruit."<br>";
}

echo "<br>";
echo "After changing name of fruit<br>";

$fruits[0] = "Graps";
foreach($fruits as $fruit)
{
    echo $fruit."<br>";
}

echo "<br>";
array_push($fruits, "Pineapple","Coconet");
echo "<br>After appending array<br>";
foreach($fruits as $fruit)
{
    echo $fruit."<br>";
}

echo "<br>Deleting last element<br>";
array_pop($fruits);//last element will be remove
foreach($fruits as $fruit)
{
    echo $fruit."<br>";
}

echo "<br>Frist element will be delete<br>";
array_shift($fruits);//first element will be remove
foreach($fruits as $fruit)
{
    echo $fruit."<br>";
}

echo "<br>Reverse function will reverse the array and return a new array<br>";
$new_array = array_reverse($fruits);
foreach($new_array as $new_fruit)
{
    echo $new_fruit."<br>";
}

echo "<br>Count function will give you the number of elements in array<br>";
echo count($new_array);


?>