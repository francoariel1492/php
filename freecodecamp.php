<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        $isMale = false;
        $isTall = false;
        if($isMale && $isTall){
            echo "You are tall male";
        }elseif ($isMale && !$isTall){
            echo "You are short male";
        }elseif (!$isMale && $isTall){
            echo "You are not male but are tall";
        }
        else{
            echo "You are not male and not tall";
        }
    ?>

</body>

</html>