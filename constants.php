<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // case-sensitive constant name
define("greeting", "Welcome to PHP");
echo greeting;

const MYCAR = "Volvo";
$a = MYCAR;


echo "<br>". $a;
echo "<br>";
    
    
    
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>