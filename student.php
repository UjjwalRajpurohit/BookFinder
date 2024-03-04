<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">         
    <title>Book Details</title>
    <link rel="stylesheet" href="student.css">
</head>

<body>
    <div class="Bookdetails">
        <form action="student.php" class="form" method="post">
          <img src="./book_icon.jpeg" alt="image">
          <h2>Student Access</h2>

          <div class="inputbook">
            <label for="bookname">Enter book name</label>
            <br>
            <input type="text" size="50"  name="book_name" id="book_name">
            
          </div>
          <br>
          <div class="inputauthor">
            <label for="subject">Enter the name of Subject</label>
            <br>
            <input type="text" size="50" name="subj" id="subj">
          </div>
          <br>
          <button class="btn" name="submit">Submit</button>
          
        </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT ACCESS</title>
    <link rel="stylesheet" href="./student.css">
</head>
<body>
    <div>
    <a href="./index.php" class="logo">BookFinder</a>
    </div>

    <div class="container">
        <div class="box">
            <h1>STUDENT ACCESS</h1>
        </div>
        <section class="upper">
            <form action="student.php" method="post">
                <div class="form_control1">
                    <label for="newbook">Name of the Book</label>
                    <input id="newbook" name="book_name" placeholder="Enter the name of the new book"/>
                </div>
                <div class="form_control3">
                    <label for="new_subj">Name of the Subject</label>
                    <input id="new_subj" name="subj" placeholder="Enter the subject name"/>
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

//$sql="SELECT * FROM books WHERE book_name='$book_name'";
$sql="SELECT * FROM books WHERE book_name='$book_name' AND subj='$subj'";


$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count>0){

  $result=mysqli_query($conn,$sql);

  //no of records
  $num=mysqli_num_rows($result);
  // echo mysqli_num_rows($result);
  // echo $num;
  //echo"<br>";

  // while($row=mysqli_fetch_assoc($result)){

  //     echo $row['book_name'] . " | " . $row['subj']. "  | ".$row['shelf'];

  //     echo "<br>";      
  //}
  $shelf=$row[3];

    $fp=fopen('book.txt','w');
                fwrite($fp,$shelf);
                fclose($fp);

    sleep(1);

    echo '<script>
            alert("Found the book");
            window.location.href="student.php";
        </script>';

    header("Location:topview$shelf.php");
    //header("Location:list.php");
}
else{
  sleep(1);
    echo '<script>
            alert("Book does not exist");
            window.location.href="student.php";
        </script>';
}


}

?>


