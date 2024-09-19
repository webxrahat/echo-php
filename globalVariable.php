<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$x = "5";

function gVarible(){
    global $x;
    echo $x;

}

gVarible();


echo $x;

?>


<?php

$y=8;
$x=10;


function sum(){
    global $y, $x;
    echo $y + $x;


}
    
sum();

echo $x + $y;

?>

</body>
</html>