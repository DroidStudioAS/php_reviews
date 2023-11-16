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
    <!-- how to use conditionals within html (called a shorthand)-->
    <!--if shorthand-->
    <?php if(empty($feedback)): ?>
        <p class="emptymsg">There is no feedback</p>
    <?php endif; ?>
    <!--ForEach shorthand-->
    <div class="container">
        <div class="feedback_container">
    <!--pages logic -->
    <?php
     $itemsPerPage = 4; // Number of items per page
    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get current page number from URL
    $start = ($page - 1) * $itemsPerPage; // Calculate starting index for the displayed items

    // Assuming $feedback contains the retrieved feedback data
    $totalItems = count($feedback); // Total number of feedback items
    $totalPages = ceil($totalItems / $itemsPerPage); // Calculate total pages

    $pagedFeedback = array_slice($feedback, $start, $itemsPerPage); // Get feedback for the current page

    foreach ($pagedFeedback as $index => $item) :
    ?>
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
    </div></div>
    
    
    <!--
    <div class="pagination">
        <?php if ($page > 1) : ?>
            <a href="?page=<?php echo $page - 1; ?>">
            <img class="prev_arr" src="/Aleksandar_Smiljanic/feedback/inc/arrow.png">
            </a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <a href="?page=<?php echo $i; ?>" <?php echo ($page === $i) ? 'class="active"' : ''; ?>>
               <span class="page_index">
                 <?php echo $i; ?>
               </span> 
            </a>
        <?php endfor; ?>

        <?php if ($page < $totalPages) : ?>
            <a href="?page=<?php echo $page + 1; ?>">
                <img class="next_arr" src="/Aleksandar_Smiljanic/feedback/inc/arrow.png">
            </a>
        <?php endif; ?>
        -->
   
</body>
</html>
<style>

.container{
    display: flex;
    align-items: center;
   
}
.pagination{
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    gap: 10px;
    font-size: x-large;
    }
.prev_arr{
    width: 100%;
    height:100%;
    transform: scaleX(-1);
}
.page_index{
    color: #0CC0DF;
    text-decoration: none;
}
.page_index:visited{
    text-decoration: none;
}
.next_arr{
    width: 100%;
    height:100%;
}
    .feedback_container{
       position: absolute;
       top: 10vh;
       width: 30vw;
       height: 60vh;
       display: flex;
       flex-flow: column wrap;
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
        border-color: #0CC0DF;
        color: white;
        height: 25vh;
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
        border-color:#0CC0DF;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);

    }

    @media(min-width:600px){
        .card_container{
            width: 30vw;
            left:35vw;
        }
        .feedback_container{
            top: 46%;
        }
    }
</style>
