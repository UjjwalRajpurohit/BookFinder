<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK FINDER</title>
</head>

<body>
    <header>
        <a href="./index.php" class="logo">BookFinder</a>
        <ul class="navigation">
        
            <li onclick=""><a href="./index.php" class="active">Home</a></li>
            <li onclick="/pages/aboutus/about.html"><a href="./aboutus.php">About us</a></li>
            <li onclick="/pages/explore/explore.html"><a href="./explore.php">Explore</a></li>
    
        </ul>
    </header>
    <div class="container">
        <div class="quotes">
    <h1><pre>EVERYTHING YOU NEED FOR A BETTER 
            FUTURE AND SUCCESS 
      HAS ALREADY BEEN WRITTEN.  
                AND GUESS WHAT?  
             ALL YOU HAVE TO DO IS
                GO TO THE LIBRARY
                    </pre></h1>
        </div>
        <div class="loginbuttons">
            <div class="buttons">
                <!-- <a href="./pages/student/stud.html" class="s"> -->
                <a href="./student_login.php" class="s">
                    <!-- <button class="demo" >student login</button> -->

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="student_img2.jpg" alt="student" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Student login</h1>
                                <!-- <p>Lorem, ipsum dolor.</p>
                                <p>Lorem ipsum dolor sit amet.</p> -->
                            </div>
                        </div>
                    </div>
                </a>
                <a href="./librarian_login.php" class="p">
                    <!-- <button >librarian login</button> -->

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="./lib_img2.jpg" alt="librarian" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>LIBRARIAN LOGIN</h1>
                                <!-- <p>Lorem, ipsum dolor.</p>
                                <p>Lorem ipsum dolor sit amet.</p> -->
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
</body>

</html>