<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$person_name="Md Rahat Islam 1212";
$person_age=18;
echo  "$person_name.$person_age </br>";

var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

?>

<!-- Three types of Variable are in PHP -->
 <!-- 1, Local 
 2, global
 3, Static -->


 <!-- Local Variable -->
  
 <?php
//  $local=5;

 function lVariable(){
    $local = 5;
    echo "</br> $local";
 }
 
 lVariable();
 
 ?>

 <!-- Global Variable  -->
 <?php
 $gVariable=10;
 $ggVariable= 5;


 function gAble(){

    global $gVariable , $ggVariable;
    echo $gVariable + $ggVariable;

 }
 
 gAble();
 
echo" </br> $gVariable";

 ?>
 
 <?php

 echo "<br>";
 //This is static variable
function sVariable(){
  static $iStatic = 5;
    echo $iStatic;
    $iStatic++;
}


sVariable();
echo "<br>";
sVariable();
echo "<br>";
sVariable();
echo "<br>";
?>


</body>
</html>

