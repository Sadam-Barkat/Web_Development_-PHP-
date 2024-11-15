<?php

$grade = "S";

switch($grade)
{
    case "A":
        echo "<h1>You did great!</h1>";
        break;
    case "B":
        echo "<h1>You did good!</h1>";
        break;
    case "C":
        echo "<h1>You did well!</h1>";
        break;
    case "D":
        echo "<h1>You did ok</h1>";
        break;
    case "F":
        echo "<h1>You are fail!</h1>";
        break;
    default:     
    echo "<h1>{$grade} is not valid!</h1>";      
}


?>