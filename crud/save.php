<?php
// $serverName= "localhost";
// $userName= "root";
// $password="";
// $bdName="crud";


echo $stu_name=$_POST['sname'];
echo $stu_address=$_POST['saddress'];
echo $stu_class=$_POST['sclass'];
echo $stu_phone=$_POST['sphone'];

// $conn= mysqli_connect($serverName, $userName, $password, $bdName) or die("connection failed");

include "config.php";



$sql= "INSERT INTO people(sname,saddress,sclass,sphone) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result= mysqli_query($conn, $sql) or die("Unsuccessful");




?>