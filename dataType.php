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

//Create UPPERCASE in array
$x = "all text are Upper case";
$y = $x;
echo "<br>". strtoupper($y) ;

//Create full description in Lowwer case

$a = "all text are Lower case";
$b = $a;

echo "<br>" . strtolower($b);

//Replace String 
$x = "This is a word add";
$y = $x;

echo "<br>". str_replace("add", "Two", $y);


//Revarse Sentance in the array
$x = "This a sentance in the text";
$y = $x;

echo "<br>";
echo "<br>". $x;

echo "<br>". strrev($x);

//Trim in a sentance


$a = "   This is trim function";


echo "<br>";
 
echo "<br>". trim($a);
echo "<br>";
echo "<br>";
echo "<input value='". trim($a) ."'>";
echo "<br>";
echo "<br>";
echo "<input value='". $a ."'>";

echo "<br>";
echo "<br>";

$x = "Hi This is the Answer we says";
// $g = "www.yourcompany.com";
$g = "22/09/24";
$y = explode("  ", $x);
$z = explode("/", $g);
echo "<br>";
echo "<br>";
print_r($z);
echo "<br>";
echo "<br>";
print_r($y);


$x = "MD RAHAT ISLAM";
$y = explode(" ", $x);

echo ("<br>");

echo ("<br>");
print_r($y);








// 2, Integer 

// Check if the variable is numeric  

echo "<br>";
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
// 3, Boolean 
// 4, Float
// 5, Array 
// 6, Object
// 7, NULL
// 8, Resource


echo "<br>";
//casting in php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = false;   // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (int) $b;
$c = (float) $c;
$d = (bool) $d;
$e = (string) $e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);


// PHP math function 

//PHP pi()
echo "<br>";

echo (pi());





?>
</body>
</html>