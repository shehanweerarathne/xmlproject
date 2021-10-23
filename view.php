<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
<?php
$books = simplexml_load_file('data/books.xml');



foreach($books->book as $book){
    if($book['id']==$_GET['id']){
        $id = $book['id'];
        $title = $book->title;
        $price = $book->price;
        $author = $book->author;
        $genre = $book->genre;
        $publish_date = $book->publish_date;
        $description = $book->description;

        break;
    }
}

?>
<div class="container p-3">
    <div class="border p-3">
        <h2 class="text-info pl-3">Book Details</h2>
    </div><br>
<form method="post">
    <table class="table table-dark">
        <tr>
            <td>Id</td>
            <td><?php echo $id; ?> </td>
        </tr>
        <tr>
            <td>Title</td>
            <td><?php echo $title; ?></td>
        </tr>
        <tr>
            <td>Genre</td>
            <td><?php echo $genre; ?> </td>
        </tr>
        <tr>
            <td>price</td>
            <td><?php echo $price; ?> </td>
        </tr>
        <tr>
            <td>Author</td>
            <td><?php echo $author; ?> </td>
        </tr>
        <tr>
            <td>publish_date</td>
            <td><?php echo $publish_date; ?></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><?php echo $description; ?><?php echo $description; ?></td>
        </tr>

    </table>
    <div class="col">
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>

</form>
</div>
<script src="jquery-3.6.0.min.js"></script>