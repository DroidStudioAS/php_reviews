<?php 
include('config/database.php');
/* <div class="title">
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
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.A Software</title>
</head>
<body>
    <!--Main container for header-->
    <div class="nav_main_container">
   
    <div class="title_container">
        S.A Software
    </div>
    <!--Navigation item container-->
    <nav class="nav_item_container">
        <span>
           <a class="nav_item" href="/Aleksandar_Smiljanic/feedback"> Home</a>
        </span>
        <span>
            <a class="nav_item" href="/Aleksandar_Smiljanic/feedback/feedback.php"> Feedback</a>
        </span>
        <span>
            <a class="nav_item" href="/Aleksandar_Smiljanic/feedback/about.php"> About</a>
        </span>
    </nav>
    <!--Logo container-->
    <div class="logo_container">
        <img class="logo" src="/Aleksandar_Smiljanic/feedback/inc/logo.png"/>
    </div>
    </div>
</body>
</html>
<style>

    .nav_main_container{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;

        height: 13vh;
        width: 100%;
       
        background-color: #7ED957;

        display: flex;
        flex-flow: column nowrap;
        align-items: center;
        gap: 30%;
        
    }

    .title_container{
        font-size: xx-large;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: white;   
        
      
    }

    .nav_item{
        font-size: x-large;
        text-decoration: none;
        color: white;
       
        
        
    }
    .nav_item_container{
        display: flex;
        flex-flow: row nowrap;
        align-items: center;
        justify-content: center;
        gap: 20%;
    
    }
  
    .logo_container{
        position: absolute;
        top: 13vh;
        

    }
    .logo{
        width: 10vw;
        height: 25vh;
    }

    @media(max-width:600px){
        .logo{
        width: 20vw;
        height: 30vh;
    }
    }
 
</style>