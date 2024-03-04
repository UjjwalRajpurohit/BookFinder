<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change book</title>
    <link rel="stylesheet" href="./change_book.css">
</head>
<body>
    <div>
    <a href="./index.php" class="logo">BookFinder</a>
    </div>
    
    <div class="container">
        <div class="box">
            <h1>CHANGE THE LOCATION OF BOOK</h1>
        </div>
        <section class="upper">
        <form action="change_book.php" class="form" method="post">
                <div class="form_control1">
                    <label for="book_name">Name of the Book</label>
                    <input id="book_name" name="book_name" placeholder="Enter the name of the book"/>
                </div>
                <div class="form_control2">
                    <label for="shelf">Name of the Shelf</label>
                    <input id="shelf" name="shelf" placeholder="Enter the shelf number(to be changed)"/>
                </div>
        </section>
        <div class="but">
            <button type="submit" name="submit">Submit</button>
        </div>
        
    </div>

    </form>

</body>
</html>

<?php
    include("db_conn.php");

    if(isset($_POST['submit'])){
    $book_name=$_POST['book_name'];
    $shelf=$_POST['shelf'];
    //$subj=$_POST['subj'];
    
    //$sql="SELECT * FROM books WHERE book_name='$book_name'";
    $sql="SELECT * FROM books WHERE book_name='$book_name'";
    
    
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    
    if($count>0){
    
    $num=mysqli_num_rows($result);
    
    
    $sql1="UPDATE books SET shelf='$shelf' WHERE book_name='$book_name'";
    $result1=mysqli_query($conn,$sql1);

        echo '<script>
                alert("Updated the Location in Database");
                window.location.href="change_book.php";
            </script>';

    
        //header("Location:change_book.php");
        
    }
    else{
        //sleep(1);
        echo '<script>
                alert("Invalid Book Name");
                window.location.href="change_book.php";
            </script>';
    }
    
    
    }

?>
