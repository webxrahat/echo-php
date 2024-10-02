<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Today is " . date("d/m/y") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l")."<br>";
date_default_timezone_set("Asia/Dhaka"). "<br>";
echo "The time is " . date("h:i:sa")."<br>";
?>
</form>
</body>
</html>