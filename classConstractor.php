<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Person{
        public $name, $age, $school, $address;

        function describe(){

          
            return $this->name. " " . $this->age. " ". $this->school. " " . $this->address;
           
        } 
    }
    $per1= new Person();
    $per1->name = "Rahat"."<br>";
    $per1->age = 20;
    $per1->school = "jashore zella school"."<br>";
    $per1->address = "palbari"."<br>";

    echo $per1-> describe()."<br>";
 

    // class 


    
    
    ?>
</body>
</html>