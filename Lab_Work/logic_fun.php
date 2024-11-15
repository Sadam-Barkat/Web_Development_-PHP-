<?php

if(isset($_POST['number']))
{
    $no = $_POST['number'];
    table($no);
}

function table($a)
{
    for($i=1; $i<=10; $i++)
    {
        echo $a," * ",$i," = ",$a*$i;
        echo "<br>";
    }
}

?>
