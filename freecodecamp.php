<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="freecodecamp.php" method="post">
        Single coils: <input type="checkbox" name="pickups[]" value="single"><br>
        Double coils: <input type="checkbox" name="pickups[]" value="double"><br>
        Actives: <input type="checkbox" name="pickups[]" value="actives"><br>
        <br>
        <input type="submit">
    </form>

    <?php

    $pickups = $_POST["pickups"];
    echo $pickups[2];


    ?>

</body>

</html>