<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    echo "this is test<br>";
    
    $name= "Rahat Islam";
    $age= 21;
    $address= "palbari";


    echo "This is my name: $name and this is my Age: $age and this is my address: $address <br>";
    echo "This is my name: {$name} and this is my Age: {$age} and this is my address: {$address} <br>";
    echo "This is my name:" . "$name" . "and this is my Age:" . "$age" . "and this is my address: " . "{$address}." . " <br>";
    echo "This is my name: strtoupper($name) and this is my Age: var_dump(is_int ($age)) and this is my address: strtoupper{$address} <br>";
    printf ("This is my name: %s and this is my Age: %s and this is my address: %s ", strtoupper($name), var_dump(is_int($age)), $address);
    
    ?>

</body>
</html>