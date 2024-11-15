<?php

require_once 'functions.php';
if(isset($_POST['fnumber']) && isset($_POST['lnumber']))
{
    $fno = $_POST['fnumber'];
    $lno = $_POST['lnumber'];
    sub($fno,$lno);
}

?>