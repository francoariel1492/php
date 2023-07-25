<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    
    class Book
    {
        var $title;
        var $author;
        var $pages;
    }

    $book1 = new Book;
    $book1->title = "Harry Potter";
    $book1->author = "J K Rowling";
    $book1->pages = 400;

    $book2 = new Book;
    $book2->title = "The lord of the rings";
    $book2->author = "Tolkien";
    $book2->pages = 7800;


    echo $book1->title;
    echo $book2->title;



    ?>

</body>

</html>