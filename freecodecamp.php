<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        $guitars = array("les paul", "stratocaster", "telecaster", "mockingbird") ;
        echo $guitars[0];
        echo "<br>";
        echo $guitars[1];
        echo "<br>";
        echo $guitars[2];
        echo "<br>";
        echo $guitars[3];
        $guitars[0] = "lucille";
        echo "<br>";
        echo $guitars[0];
        //add info to the array
        $guitars[4] = "bc rich";
        echo "<br>";
        echo $guitars[4];
        echo "<br>";
        //count the elements of the array
        echo count($guitars)
    ?>

</body>

</html>