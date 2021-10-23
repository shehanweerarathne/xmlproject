<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
<?php
if(isset($_POST['submitSave'])) {
    $books = simplexml_load_file('data/books.xml');
    $book = $books->addChild('book');
    $book->addAttribute('id', $_POST['id']);
    $book->addChild('title', $_POST['title']);
    $book->addChild('genre', $_POST['genre']);
    $book->addChild('author', $_POST['author']);
    $book->addChild('publish_date', $_POST['publish_date']);
    $book->addChild('price', $_POST['price']);
    $book->addChild('description', $_POST['description']);
    file_put_contents('data/books.xml', $books->asXML());
    header('location:index.php');
}
?>

<div class="container p-3 mb-2 bg-light text-black">
    <div class="border p-3">
        <h2 class="text-info pl-3">Add Book</h2>
    </div><br>
<form method="post">
    <div class="form-group">
       <label> Id(Auto Generated)</label>
          <input class="form-control" type="text" name="id" value="<?php
                echo uniqid();
                ?>" readonly>
    </div>
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
            <label>Genre</label>
            <input class="form-control" type="text" name="genre">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input class="form-control" type="text" name="author">
        </div>
        <div class="form-group">
            <label>publish_date</label>
            <input class="form-control" type="date" name="publish_date">
        </div>
        <div class="form-group">
            <label>price</label>
            <input class="form-control" type="text" name="price">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" type="" name="description"></textarea>
        </div>
        <div class="text-center panel-body">

            <div class="form-group"><input class="btn btn-info w-25" type="submit" value="Save" name="submitSave"></div>
        </div>
    <div class="col">
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>

</form>
</div>
<script src="jquery-3.6.0.min.js"></script>