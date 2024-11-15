<?php
//Important note: associative array or dimenssional array is like python disctionary ok
 $emp = array(
     "Sadam"=>"SoftwareEngineer",
     "Ramzan"=>"WebDeveloper",
     "Hissain"=>"WebDesigner");
 foreach($emp as $e)
 {
     echo $e."<br>";
}

 echo "<br>Using Print_r which is the html tag to print the array<br>";
 echo "<pre>";
 print_r($emp);

 echo $emp['Sadam'];
 ?>

<?php
 $emp = array(
      "sadam"=>"SoftwareEngineer",
      "ramzan"=>"WebDeveloper",
      "hissain"=>"WebDesigner");
?>     

<?php
 foreach($emp as $key => $value)
 {
 ?>   
      <p><b><?php echo ucwords($key) ?>:</b><?php echo $value ?></p>

<?php } ?>

<?php
 echo "<br>Now we discuss about some predefined function related to associative array<br>";
 $key = array_keys($emp);
 echo "<pre>";
 print_r($key);
 echo "<br>";

 $value = array_values($emp);
 echo "<pre>";
 print_r($value);

?>



<?php
 echo "<br>Now we discuss about array flip<br>";
 $employee = array_flip($emp);
 foreach($employee as $key => $value)
 {
 ?>
     <p><b><?php echo $key ?>:</b><?php echo $value ?></p>  
   
<?php } ?>


?>
<?php
//Multidimenssional array;
echo "<h1>Multidimenssional Array</h1>";
$student = array(
     array("Name"=>"Sadam","Class"=>"ABC"),   
     array("Name"=>"Ramzan","Class"=>"BCA") 
);
foreach($student as $key => $value)
{
     echo $key."<br>";
     foreach($value as $ke=>$val)
     {
          echo $ke.":".$val."<br>";
     }
}


?>
