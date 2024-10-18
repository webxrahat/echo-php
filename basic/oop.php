<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class House{


        function floor1(){
            echo "This is first floor";
        }
        function floor2(){
            echo "This is second floor";
        }
    }
    
    class Math{
            public $x, $y, $z;

            function sum(){
                $this->z = $this-> x + $this-> y;
                return $this-> z;
            }
            function sub(){
                $this->z = $this-> x - $this-> y;
                return $this-> z;
            }
            function into(){
                $this->z = $this-> x * $this-> y;
                return $this-> z;
            }
    }
    

//same class diffrent value;
$rec1= new Math();
$rec1->x = 20;
$rec1->y = 10;



echo $rec1->sum() ."<br>";
echo $rec1->sum()."<br>";
echo $rec1->sub()."<br>";
echo $rec1->into()."<br>";





    
    ?>
</body>
</html>