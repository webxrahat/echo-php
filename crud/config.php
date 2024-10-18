<?php
$serverName= "localhost";
$userName= "root";
$password="";
$bdName="";

if ($conn= mysqli_connect($serverName, $userName, $password, $bdName)){
    echo "Database Connect";
}else{
    die("Database Coudnot Connect");
};


?>