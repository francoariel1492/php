<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="freecodecamp.php" method="post">
        <input type="text" name="guitar">
        <input type="submit">
    </form>

    <?php
    $brands = array("gibson" => "les paul", "fender" => "stratocaster", "ltd" => "ec-1000");
    echo "<br>";

    echo $brands[$_POST["guitar"]];

        ?>

</body>

</html>