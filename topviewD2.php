<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topview</title>
    <style>
    *{
        margin: 0%;
        padding: 0px;
        box-sizing: border-box;
    }
    
    body{
        background: url("./top_view.jpeg");
        background-repeat: no-repeat;
        background-size:1550px 755px;
    }
    .rack1{
        display:flex;
        flex-direction: column;
        height: 200px;
        width: 60px;
        border:4px solid black;
        border-radius: 5px;
        position: absolute;
        right:150px;
        top:100px;
        background-image: url("./shelf.jpeg");
        z-index: -1;
        color: azure;
        font-size: 40px;
        text-align: center;
        justify-content:center;
    }
    .rack2{
        display:flex;
        flex-direction: column;
        height: 200px;
        width: 60px;
        border:4px solid black;
        border-radius: 5px;
        position: absolute;
        right:150px;
        bottom: 100px;
        background-image: url("./shelf.jpeg");
        color: azure;
        font-size: 40px;
        text-align: center;
        justify-content:center;
    }
    .rack3{
        display:flex;
        flex-direction: column;
        height: 200px;
        width: 60px;
        border:4px solid black;
        border-radius: 5px;
        position: absolute;
        right:300px;
        top:100px;
        background-image: url("./shelf.jpeg");
        color: azure;
        font-size: 40px;
        text-align: center;
        justify-content:center;
    }
    .rack4{
        display:flex;
        flex-direction: column;
        height: 200px;
        width: 60px;
        border:4px solid rgb(255, 94, 0);
        border-radius: 5px;
        position: absolute;
        right:300px;
        bottom: 100px;
        background-image: url("./shelf.jpeg");
        color: azure;
        font-size: 40px;
        text-align: center;
        justify-content:center;
    }
    .rack5{
        display:flex;
        flex-direction: column;
        height: 200px;
        width: 60px;
        border:4px solid black;
        border-radius: 5px;
        position: absolute;
        right:450px;
        top: 100px;
        background-image: url("./shelf.jpeg");
        color: azure;
        font-size: 40px;
        text-align: center;
        justify-content:center;
    }
    .rack6{
        display:flex;
        flex-direction: column;
        height: 200px;
        width: 60px;
        border:4px solid black;
        border-radius: 5px;
        position: absolute;
        right:450px;
        bottom: 100px;
        background-image: url("./shelf.jpeg");
        color: azure;
        font-size: 40px;
        text-align: center;
        justify-content:center;
    }
    .rack7{
        display:flex;
        flex-direction: column;
        height: 200px;
        width: 60px;
        border:5px solid black;
        border-radius: 5px;
        position: absolute;
        right:600px;
        top:100px;
        background-image: url("./shelf.jpeg");
        color: azure;
        font-size: 40px;
        text-align: center;
        justify-content:center;
        color: white;
   }
    .rack8{
        display:flex;
        flex-direction: column;
        height: 200px;
        width: 60px;
        border:4px solid black;
        border-radius: 5px;
        position: absolute;
        right:600px;
        bottom:100px;
        background-image: url("./shelf.jpeg");
        color: azure;
        font-size: 40px;
        text-align: center;
        justify-content:center;
    }

    .rack6 a{
        text-decoration: none;
    }

</style>
</head>
<body>
    <div class="rack1">
        <p><B>A</B></p>
    </div>
    <div class="rack2">
        <p><B>B</B></p>
    </div>
    <div class="rack3">
        <p><B>C</B></p>
    </div>
    <div class="rack4">
        <a href="./frontview2.php" style="color:white"><p><B>D</B></p></a>
    </div>
    <div class="rack5">
        <p><B>E</B></p>
    </div>
    <div class="rack6">
        <p><B>F</B></p>
    </div>
    <div class="rack7">
        <p><B>G</B></p>
    </div>
    <div class="rack8">
        <p><B>H</B></p>
    </div>
</body>
</html>

