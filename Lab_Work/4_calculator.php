<?php
       $result=0;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
       if(isset($_POST['fnumber']) && isset($_POST['lnumber']) && isset($_POST['operator']))
       {
       $fnumber = $_POST['fnumber'];
       $lnumber = $_POST['lnumber'];
       $operator = $_POST['operator'];

       if($operator=='+')
       {
         $result = $fnumber+$lnumber;
       }
       elseif($operator=='-')
       {
         $result = $fnumber-$lnumber;
       }
       elseif($operator=='*')
       {
         $result = $fnumber*$lnumber;
       }
       elseif($operator=='/')
       {
         if($lnumber!=0)
           {
             $result = $fnumber/$lnumber;
           }
         else
           {
             echo '<h1>Error: Division by zero </h1>';
           }
       }
         
       else
       {
         echo '<h1>invalid</h1>';
       }
       echo "<h1>Result: $result </h1>";
     } 
}
  
?>   
       

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="fnumber">Fnumber</label>
    <br>
    <input type="number" id="fnumber" name="fnumber"></input>
    <br>
    <label for="lnumber">Lnumber</label>
    <br>
    <input type="number" id="lnumber" name="lnumber"></input>
    <br>
    <label for="operator">Operator</label>
    <br>
    <input type="text" id="operator" name="operator"></input>
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>