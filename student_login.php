
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studentlogin</title>
    
    
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap'); */
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap'); 
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
        }

    body{
        /* background: url("./back.jpg")no-repeat center top/cover; */
        height: 500px;
        background-image: linear-gradient(to bottom, #89cff0, #b1c9f6, #d7c2eb, #eebfd6, #f4c2c2);
        min-height :100vh;
    }
    
    /* .logo{
        position: absolute;
        top:30px;
        left:40px;
        height: 70px;
        font-family:'Pacifico',cursive;
    }  */

    .logo{
    color: var(--secondary-color);
    font-weight: 100;
    font-size: 2em;
    text-decoration: none;
    font-family: 'Pacifico',cursive;
    }
   
    .login{
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 26%;
        right:27%;
        align-items: center;
        justify-content: center;
        border: 6px solid black;
        opacity: 0.7;
        border-radius: 10px;
        height: 300px;
        width: 600px;
        padding-top: 0px;
        background-color:black ; 
        opacity: 0.7;
    }
    .heading{
        font-size: 40px;
        margin-top: 25px;
        margin-left: 40px;
        margin-right: 40px;
        margin-bottom:20px;
    }
    .info{
        padding:8px 150px 8px 150px;
        text-align: center;
        margin: 10px;
        border: 2px solid black;
        border-radius: 20px;
        font-size: 17px;
        font-family: 'Times New Roman', Times, serif;

    }

    .detail{
        display: flex;
        flex-direction: column;
    }

    .info:hover{
        background-color:rgb(194, 216, 235);
        color: black;
        cursor: pointer;
    }
    .btn{
        
        padding:8px 50px 8px 50px;
        text-align: center;
        margin-top: 25px;
        margin-bottom: 50px;
        border: 2px solid black;
        border-radius: 20px;
        background-color: rgb(218, 227, 245);
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;

    }

    .b{
        display:flex;
        justify-content:center;
    }

    .btn:hover{
        background-color: rgb(137, 158, 204);
        color: black;
        cursor: pointer;
    }
    .heading{
        color: orangered;
        margin-top:40px;
        font-family: 'Times New Roman', Times, serif;
    }

    .right{
        position:absolute;
        right:20px;
        top:15px;
    }
    .right a{
        color: aliceblue;
        font-size: 25px;
        font-family: 'Times New Roman', Times, serif;
        text-decoration: none;
        padding: 4px;
        margin: 4px;
    }
    .discrip:hover{
        color:grey;
    }
    </style>
    
</head>
<body>
    <header>
        <div class="logo">
    <a href="./index.php" class="logo">BookFinder</a>
        </div>
       <!-- <div class="right">
            <a href="description.html" class="discrip" >Description</a>
        </div>-->
    </header>
    <section>
        <div class="login">
            <h1 class="heading"><b> Student login </b></h1>
           <!-- <input type="text" class="info" placeholder="Enter your name ">
            <input type="text" class="info" placeholder="Enter your branch ">-->
            <form action="student_login.php" onclick="return isvalid()" method="post">
                <div class="detail">
                <input type="text" class="info" name="library_id" id="lib" placeholder="Enter your Library ID ">
                </div>
                <div class="detail">
                <input type="password" class="info" name="password" placeholder="Enter your Password ">  
                </div>
                <div class="b">
                    <button class="btn" name="submit">Submit</button>
                </div>
                
            </form>
            
        </div>
        <script>
            function isvalid(){
                //var library_id=document.form.library_id.value;
                //var password=document.form.password.value;
                var library_id=document.getElementById("lib").value;

                if(library_id.length=="" && password.length==""){
                    alert("Library ID and password feilds are empty");
                    return false;
                }
                else{
                    if(library_id.length==""){
                        alert("Library ID feild is empty");
                        return false;
                    }
                    if(password.length==""){
                        alert("Password feild is empty");
                        return false;
                    }
                }
            }
        </script>
    </section>
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

if($count>0){

    echo '<script>
            alert("Login Successfull");
            window.location.href="student.php";
        </script>';

    header("Location:student.php");
}
else{
    if($library_id=="" && $password==""){
        echo '<script>
            alert("Username and Password fields are empty");
            window.location.href="student_login.php";
        </script>';
    }
    else if($library_id==""){
        echo '<script>
            alert("Library Id field is empty");
            window.location.href="student_login.php";
        </script>';
    }
    else if($password==""){
        echo '<script>
            alert("Password field is empty");
            window.location.href="student_login.php";
        </script>';
    }
    else{
    sleep(1);
    echo '<script>
            alert("Login failed..Invalid username or password");
            window.location.href="student_login.php";
        </script>';
    }
}

}

?>
