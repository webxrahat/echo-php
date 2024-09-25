<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $t = date("H");
    echo "<br>". date("H");
    
    if ($t < "19") {
      echo "Have a good day!";
    } else {
      echo "Have a good night!";
    }
    

//one line syntext 
$a = 13;

$b = $a < 12 ? "Hello" : "Good Bye";

echo "<br>". $b;


//Nested if else

echo "<br>";
echo "<br>";

$a = 13;

if ($a > 12) {
  echo "Above 10";
  if ($a > 10) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}




    ?>
</body>
</html>