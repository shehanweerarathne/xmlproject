<?php

    $books = simplexml_load_file('data/books.xml');
    $id = $_GET['id'];
    $index = 0;
    $i = 0;

    foreach($books->book as $book){
        if($book['id']==$id){
            $index = $i;
            break;
        }
        $i++;
    }
    unset($books->book[$index]);
    file_put_contents('data/books.xml', $books->asXML());
    header('location:index.php');

?>