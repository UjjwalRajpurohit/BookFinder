<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMOVE BOOK</title>
    <link rel="stylesheet" href="./remove_book.css">
</head>
<body>
<div>
    <a href="./index.php" class="logo">BookFinder</a>
    </div>

    <div class="container">
        <div class="box">
            <h1>REMOVE A BOOK</h1>
        </div>
        <section class="upper">
            <form action="remove_book.php" method="post">
                <div class="form_control1">
                    <label for="newbook">Name of the Book</label>
                    <input id="newbook" name="book_name" placeholder="Enter the name of the book"/>
                </div>
                <div class="form_control3">
                    <label for="subj">Name of the Subject</label>
                    <input id="subj" name="subj" placeholder="Enter the subject name"/>
                </div>
                <div class="form_control2">
                    <label for="newshelf">Name of the Shelf</label>
                    <input id="newshelf" name="shelf" placeholder="Enter the shelf number(from where it's removed)"/>
                </div>
                <div class="but">
            <button type="submit" name="submit">Submit</button>
        </div>
            </form>
        </section>
        
    </div>
    
</body>
</html>

<?php

include("db_conn.php");

if(isset($_POST['submit'])){

$book_name=$_POST['book_name'];
$subj=$_POST['subj'];
$shelf=$_POST['shelf'];

$sql = "DELETE FROM `books` WHERE `book_name`='$book_name' ";

$result=mysqli_query($conn,$sql);

sleep(1);

echo '<script>
            alert("Successfully removed from the database");
            window.location.href="remove_book.php";
        </script>';
}
    
?>