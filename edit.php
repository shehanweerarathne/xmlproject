<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
<?php
$books = simplexml_load_file('data/books.xml');

if(isset($_POST['submitSave'])) {

    foreach($books->book as $book){
        if($book['id']==$_POST['id']){
            $book->title = $_POST['title'];
            $book->price = $_POST['price'];
            $book->publish_date = $_POST['publish_date'];
            $book->genre = $_POST['genre'];
            $book->author = $_POST['author'];
            $book->description = $_POST['description'];
            break;
        }
    }
    file_put_contents('data/books.xml', $books->asXML());
    header('location:index.php');
}

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
<div class="container p-3 mb-2 bg-light text-black">
    <div class="border p-3">
        <h2 class="text-info pl-3">Edit Book</h2>
    </div><br>
    <div>
<form method="post">

        <div class="form-group">
            <label>Id</label>
            <input class="form-control"  type="text" name="id" value="<?php echo $id; ?>" readonly="readonly">
        </div>
        <div class="form-group">
            <label>Title</label>
            <input class="form-control"  type="text" name="title" value="<?php echo $title; ?>">
        </div>
        <div class="form-group">
            <label>Genre</label>
            <input class="form-control"  type="text" name="genre" value="<?php echo $genre; ?>">
        </div>
        <div class="form-group">
            <label>price</label>
            <input class="form-control"  type="text" name="price" value="<?php echo $price; ?>">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input class="form-control"  type="text" name="author" value="<?php echo $author; ?>">
        </div>
        <div class="form-group">
            <label>publish_date</label>
            <input class="form-control"  type="date" name="publish_date" value="<?php echo $publish_date; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
           <textarea class="form-control"  type="text" name="description" rows="4" cols="50"><?php echo $description; ?><?php echo $description; ?></textarea>
        </div>

        <div class="text-center panel-body">

            <div class="form-group"><input  class="btn btn-info w-25" type="submit" value="Save" name="submitSave"></div>
        </div>
    <div class="col">
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>
    </div>
</form>
</div>
<script src="jquery-3.6.0.min.js"></script>