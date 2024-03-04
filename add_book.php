<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD BOOK</title>
    <link rel="stylesheet" href="./add_book.css">
</head>
<body>
    <div>
    <a href="./index.php" class="logo">BookFinder</a>
    </div>

    <div class="container">
        <div class="box">
            <h1>ADD A NEW BOOK</h1>
        </div>
        <section class="upper">
            <form action="add_book.php" method="post">
                <div class="form_control1">
                    <label for="newbook">Name of the Book</label>
                    <input id="newbook" name="book_name" placeholder="Enter the name of the new book"/>
                </div>
                <div class="form_control3">
                    <label for="new_subj">Name of the Subject</label>
                    <input id="new_subj" name="subj" placeholder="Enter the subject name"/>
                </div> 
                <div class="form_control2">
                    <label for="new_shelf">Name of the Shelf</label>
                    <input id="new_shelf" name="shelf" placeholder="Enter the shelf number"/>
                </div>
                <div class="but">
                    <button name="submit" type="submit">Submit</button>
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

//$sql="INSERT INTO books (book_name,subj,shelf) VALUES('$book_name','$subj','$shelf')";
$sql="SELECT * FROM books WHERE book_name='$book_name' AND subj='$subj'";
$result=mysqli_query($conn,$sql);

// sleep(1);

// echo    '<script>
//             alert("Successfully Added Into Database");
//             window.location.href="add_book.php";
//         </script>';
// }

$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count==0){

    $insert="INSERT INTO books (book_name,subj,shelf) VALUES('$book_name','$subj','$shelf')";
    $result1=mysqli_query($conn,$insert);
    sleep(1);

    echo '<script>                                  
            alert("Successfully Added Into Database");
            window.location.href="add_book.php";
        </script>';
    
    //header("Location:add_book.php");

}
else{

    echo '<script>
            alert("The book already exists");
            window.location.href="add_book.php";
        </script>';

    //header("Location:add_book.php");

}
}

?>