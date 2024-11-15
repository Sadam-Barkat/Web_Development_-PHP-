<?php
/*
isset():
        Returns True, if a variable is declared and not null

empty():
        Returns True, if a variable is not declared, false, null, ""  
*/

echo "<h1>Isset() Function</h1><br>";
$name1 = "sadam";
if(isset($name1))
{
    echo "Name is find ".$name1."<br>";
}
else
{
    echo "Not find<br>";
}

echo "<h1>Empty() Function</h1><br>";
$name2 = "khan";
if(empty($name2))
{
    echo "The value is empty<br>";
}
else
{
    echo "The value is not empty ".$name2;
}


?>