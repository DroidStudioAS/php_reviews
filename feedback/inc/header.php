<?php 
include('config/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="container">
        <div class="navContainer">
        <span>
           <a class="nav_item" href="/Aleksandar_Smiljanic/feedback"> Home</a>
        </span>
        <span>
            <a class="nav_item" href="/Aleksandar_Smiljanic/feedback/feedback.php"> Feedback</a>
        </span>
        <span>
            <a class="nav_item" href="/Aleksandar_Smiljanic/feedback/about.php"> About</a>
        </span>
        </div>
        </div>
        <img class="logo" src="/Aleksandar_Smiljanic/feedback/inc/logo.png">
    </nav>

</body>
</html>
<style>
    .container{
        display: flex;
        flex-flow: row nowrap;
        justify-content: center;
        position:absolute;
        position: absolute;
        background-color: #7ED957;
        left: 0%;
        right: 0%;
        top: 0%;
        padding-top: 5%;
        font-size: larger;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
    }
 
   
    .logo{
        padding: 0.5%;
        width: 10vw;
        height: 20vh;
        position:absolute;
        top: 15%;
        left: 45vw;
        border-radius: 45%;
        border-style: solid;
        border-color: #7ED957 ;
    }
</style>