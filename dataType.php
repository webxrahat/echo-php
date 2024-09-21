<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
//Data Type in PHP

// 1, String

$ExString = "Name: John";
echo $ExString;

//Differnts Between signle quatation and Dubble Quatation 

$x = "string";
echo "<br> Hello $x";

$x="Hello";
echo '<br> John $x';

//String length count
$x = "This is most commonly use sentance";
echo "<br>" .strlen($x);

//How many word in string 
$y = "This is most commonly use sentance";
echo "<br>". str_word_count($y);

//Search for text within a sring
$y = "This is most commonly use most sentance";
echo "<br>". strpos("HelloThis world!", "world");

$a = "This is real check";
$b = "real";
$c = strpos($a, $b);
echo "<br>".$c;

//Find Revarse in array
$a = "Check in revarse in array";
$b = "in";
$x = strrpos($a, $b);
echo "<br>". $x;






// 2, Integer 
// 3, Boolean 
// 4, Float
// 5, Array 
// 6, Object
// 7, NULL
// 8, Resource

   





?>
</body>
</html>