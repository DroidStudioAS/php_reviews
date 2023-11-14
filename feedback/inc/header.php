<?php 
include('config/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.A Software</title>
</head>
<body>
    <div class="title">
        <h1>
            S.A Software
        </h1>
    </div>

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
        top: 10%;
        padding-top: 1%;
        font-size: larger;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color:white
    }
   
 
   
    .logo{
        padding: 0.5%;
        width: 15vw;
        height: 25vh;
        position:absolute;
        top: 16%;
        left: 42vw;
        border-radius: 45%;
        border-style: solid;
        border-color: #7ED957 ;
    }
    .title{
        background-color: #7ED957;
        width: 100vw;
        color: white;
        position: absolute;
        top: 0%;
        left: 0%;
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    @media(max-width:600px){
        .logo{
            width: 20vw;
            height: 25vh;
            left: 40vw;
        }
    }
 
</style>