<?php
require_once "config.php";

$title = $category = $author = $price = $description = "";
$title_error = $category_error = $author_error = $price_error = $description_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST["title"]);
    if (empty($title)) {
        $title_error = "Title Name is required.";
    } elseif (!filter_var($title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $title_error = "Title is invalid.";
    } else {
        $title = $title;
    }

    $category = trim($_POST["category"]);

    if (empty($category)) {
        $category_error = "Category is required.";
    } elseif (!filter_var($title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $category_error = "Category is invalid.";
    } else {
        $category = $category;
    }

    $author = trim($_POST["author"]);
    if (empty($author)) {
        $author_error = "Author is required.";
    } elseif (!filter_var($title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $author_error = "Author is required.";
    } else {
        $author = $author;
    }

    $price = trim($_POST["price"]);
    if(empty($price)){
        $price_number_error = "Price is required.";
    } else {
        $price = $price;
    }

    $description = trim($_POST["description"]);
    if(empty($description)){
        $description_error = "Description is required.";
    } else {
        $description = $description;
    }

    if (empty($title_error_err) && empty($category_error) && empty($author_error) && empty($price_error) && empty($description_error) ) {
          $sql = "INSERT INTO `users` (`title`, `category`, `author`, `price`, `description`) VALUES ('$title', '$category', '$author', '$price', '$description')";

          if (mysqli_query($conn, $sql)) {
              header("location: index.php");
          } else {
               echo "Something went wrong. Please try again later.";
          }
      }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add a Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add a Book</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($title_error)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="">
                            <span class="help-block"><?php echo $title_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($category_error)) ? 'has-error' : ''; ?>">
                            <label>Category</label>
                            <select name="category" class="form-control">

                                <option value="">--Select Category--</option>
                                <option value="Action">Action</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Drama">Drama</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Horror">Horror</option>
                                <option value="Mystery">Mystery</option>
                                <option value="Romance">Romance</option>
                                <option value="Thriller">Thriller</option>

                            </select>
                            <span class="help-block"><?php echo $category_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($author_error)) ? 'has-error' : ''; ?>">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" value="">
                            <span class="help-block"><?php echo $author_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($price_error)) ? 'has-error' : ''; ?>">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="">
                            <span class="help-block"><?php echo $price_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($description_error)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                            <span class="help-block"><?php echo $description_error;?></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>