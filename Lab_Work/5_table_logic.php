<?php

if(isset($_POST['table']))
{
    $a = $_POST['table'];
    for($i = 1; $i<=10; $i++)
    {
        echo $a," * ",$i," = ",$a*$i;
        echo "<br>";
    }
}

?>