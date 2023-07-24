<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="freecodecamp.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
    $grade = $_POST["grade"];
    switch ($grade) {
        case 'A':
            echo "you really study";
            break;
        case 'B':
            echo "you almost get it";
            break;
        case 'C':
            echo "you need to study more";
            break;
        case 'D':
            echo "you did very bad";
            break;
        case 'F':
            echo "you didn't study at all";
            break;
        default:
            echo "Invalid grade";
    }
    ?>

</body>

</html>