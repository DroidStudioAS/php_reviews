<?php 
include("inc/header.php");
include("inc/footer.php");
//require("inc/header.php"); this breaks the site if page not found
/*$feedback = [
    [
        'id'=>'1',
        'name'=>'leks',
        'email'=>'mail',
        'body'=>"lex is the best"

    ],
    [
        'id'=>'2',
        'name'=>'Andy',
        'email'=>'mail',
        'body'=>"lex is the best"
    ],
    [
        'id'=>'3',
        'name'=>'Mom',
        'email'=>'mail',
        'body'=>"lex is the best"
    ]
    ]*/

    $sql = 'SELECT * FROM feedback';
    $result=mysqli_query($conn,$sql);
    //THIS IS HOW TO MAP IT TO AN ASSOCIATIVE ARARY
    $feedback=mysqli_fetch_all($result,MYSQLI_ASSOC);
    
    
    //var_dump($feedback);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Feedbacks</h1>
    <!-- how to use conditionals within html (called a shorthand)-->
    <!--if shorthand-->
    <?php if(empty($feedback)): ?>
        <p class="emptymsg">There is no feedback</p>
    <?php endif; ?>
    <!--ForEach shorthand-->
    <div class="feedback_container">
    <?php foreach($feedback as $item): ?>
    <div class="card_container">
        <div class="card_name">
            <?php echo 'By: ' . $item['fb_name'] ."</br>". " on:" . $item['fb_date'] ?>
        </div>
        <div class="card_mail">
            <?php echo  '"'. $item['fb_email'] . '"' ?>
        </div>
        <div class="card_body">
            <?php echo $item['fb_body']; ?>
        </div>
    </div>
    <?php endforeach ?>
    </div>

   
</body>
</html>
<style>
    .feedback_container{
       position: absolute;
       top:40%;
       width: 10vw;
       left:45vw;
       height: 100vh;
       display: flex;
       flex-flow: column nowrap;
       align-items: center;
       gap:2%
        
    }
    .card_container{
        background: hsla(102, 63%, 60%, 1);
        background: linear-gradient(315deg, hsla(102, 63%, 60%, 1) 0%, hsla(189, 90%, 46%, 1) 100%);
        background: -moz-linear-gradient(315deg, hsla(102, 63%, 60%, 1) 0%, hsla(189, 90%, 46%, 1) 100%);
        background: -webkit-linear-gradient(315deg, hsla(102, 63%, 60%, 1) 0%, hsla(189, 90%, 46%, 1) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#7ED957", endColorstr="#0CC0DF", GradientType=1 );
        color: black;
        padding: 4%;
        border-radius: 5%;
        border-color: ghostwhite;
        width: 50vw;
    }
    .card_name{
        font-size: 100%;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        margin-bottom: 2%;
    }
    .card_mail{
        font-size: 100%;

        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        margin-bottom: 2%;
    }
    .card_body{
        margin-bottom: 5%;
        padding: 5%;
        margin-top: 5%;
        border: 0.5%;
        border-style: solid;
        border-radius: 5%;
        border-color: ghostwhite;
    }
</style>
