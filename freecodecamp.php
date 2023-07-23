<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="freecodecamp.php" method="get">
        <input type="number" name="numb1">
        <br>
        <input type="number" name="numb2">
        <input type="submit">

    </form>
    <br>

    Answer: <?php echo $_GET["numb1"] + $_GET["numb2"]?>

</body>

</html>