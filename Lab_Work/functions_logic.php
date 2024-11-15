<?php

if(isset($_POST['fnumber']) && isset($_POST['lnumber']) && isset($_POST['operator']))
{
    $fno = $_POST['fnumber'];
    $lno = $_POST['lnumber'];
    $operator = $_POST['operator'];
    $result = 0;

    switch($operator)
    {
        case '+':
            $result = sum($fno,$lno);
            echo "The sum of two numbers : ".$result;
            break;
        case '-':
            $result = sub($fno,$lno);
            echo "The subtraction of two numbers : ".$result;
            break;
        case '*':
            $result = mul($fno,$lno);
            echo "The multiplication of two numbers : ".$result;     
            break;
        case '/':
            $result = div($fno,$lno);
            echo "The division of two numbers : ".$result;
            break;     
    }
}

function sum($a,$b)
{
    return ($a + $b);
}
function sub($a,$b)
{
    return ($a - $b);
}
function mul($a,$b)
{
    return ($a * $b);
}
function div($a,$b)
{
    return ($a / $b);
}

?>