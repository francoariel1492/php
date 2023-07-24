<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="freecodecamp.php" method="post">
        <input type="text" name="guitar">
        <input type="submit">
    </form> -->

    <?php
        function cube($num){
            echo "The cube is ";
            return $num * $num * $num; 
        }

        $cubeResult = cube(2);

        echo "$cubeResult<br>";
        echo cube(2)

    ?>

</body>

</html>