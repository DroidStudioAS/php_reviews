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
    <?php foreach($feedback as $item): ?>
    <div class="card_container">
        <div>
            <?php echo 'By: ' . $item['fb_name'] . " on:" . $item['fb_date'] ?>
        </div>
        <div>
            <?php echo $item['fb_email'] ?>
        </div>
        <div class="card_body">
            <?php echo $item['fb_body']; ?>
        </div>
    </div>
    <?php endforeach ?>

   
</body>
</html>
<style>
    .card_container{
        width: 20vw;
        
    }
    .card_body{
        margin-bottom: 5%;
        margin-top: 5%;
        border: 0.5%;
        border-style: solid;
        border-color: black;
    }
</style>
