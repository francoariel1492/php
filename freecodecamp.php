<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    
    class Student {
        var $name;
        var $major;
        var $gpa;

        function __construct($name,$major,$gpa){
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;

        }
        function hasHonors(){
            if($this->gpa >= 7){
                return "true";
            }
            return "false";
        }
    }

    $student1 = new Student("Franco","Programming",5);
    $student2 = new Student("Poncho","Music", 22);


    echo $student2->hasHonors();



    ?>

</body>

</html>