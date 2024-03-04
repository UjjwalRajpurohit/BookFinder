<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD STUDENT</title>
    <link rel="stylesheet" href="./add_student.css">
</head>
<body>

    <div>
    <a href="./index.php" class="logo">BookFinder</a>
    </div>

    <div class="container">
        <div class="box">
            <h1>ADD A NEW STUDENT</h1>
        </div>
        <section class="upper">
            <form action="add_student.php" method="post">
                <div class="form_control1">
                    <label for="new_stu">Library  ID</label>
                    <input id="new_student" name="library_id" placeholder="Enter the Library ID of the new Student"/>
                </div>
                <div class="form_control2">
                    <label for="new_pass">Password</label>
                    <input id="new_password" name="password" placeholder="Enter the Password of the student"/>
                </div>
                <div class="but">
                    <button type="btn" name="submit">Submit</button>
                </div>
            </form>
        </section>
        
    </div>
    
</body>
</html>

<?php

include("db_conn.php");

if(isset($_POST['submit'])){
    
$library_id=$_POST['library_id'];
$password=$_POST['password'];

$sql="SELECT * FROM student_login WHERE library_id='$library_id' AND password='$password'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count==0){

    $insert="INSERT INTO student_login (library_id,password) VALUES('$library_id','$password')";
    $result1=mysqli_query($conn,$insert);
    sleep(1);
    if($result1){

        echo '<script>
            alert("Successfully Added Into Database");
            window.location.href="add_student.php";
            </script>';
    
        //header("Location:add_student.php");
    }
}
else{

    echo '<script>
            alert("ID and Password already exists");
            window.location.href="add_student.php";
        </script>';

    //header("Location:add_student.php");

}

}

?>

