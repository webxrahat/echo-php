<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$i = 1;

while ($i < 100) {
    if ($i == 4) break;  
    echo $i;
    $i++;
}

 $p = 1;
do {
    echo("<br>".$p);
    $p++;
} while ($p < 10);

$i = 1;

while ($i < 6) {
  $i++;
  if ($i == 2) continue;  
  echo $i;
} 

$i = 1;

while ($i < 100) {
  $i+=10;
  echo "$i<br>";
}


$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 11);





for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }
  
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}











?>




    
</body>
</html>