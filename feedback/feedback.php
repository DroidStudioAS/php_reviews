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
           <div>
            By: <span class="card_imp"> <?php echo  $item['fb_name'] ?> </span>
           </div>
           <div>
            On: <span class="card_imp"> <?php echo  $item['fb_date'] ?> </span>
           </div>
        </div>
        <div class="card_mail">
            @<?php echo   $item['fb_email']?></span>
        </div>
        <div class="card_body">
            <?php echo $item['fb_body']; ?>
        </div>
    </div>
    <?php endforeach ?>
    </div></div>
    
   
    <div class="pagination">

            <a href="?page=<?php echo $page - 1; ?>">
            <img class="prev_arr" src="/Aleksandar_Smiljanic/feedback/inc/arrow.png">
            </a>
    

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

    position: absolute;
    left: 44vw;
    bottom: -10%;

    width: 10vw;
    height: 2vh;
    }
.prev_arr{
    width: 4vw;
    height:8vh;
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
    width: 4vw;
    height:8vh;
}
    .feedback_container{
       position: absolute;
       top: 10vh;
       left: 18vw;
       width: 30vw;
       height: 60vh;
       display: flex;
       flex-flow: column wrap;
       align-items: center;
       gap:2%
    }
   
   
    .card_container{
        background: hsla(102, 63%, 60%, 1);

        background: linear-gradient(135deg, 
        hsla(102, 63%, 60%, 1) 0%, 
        hsla(108, 61%, 61%, 1) 6%, 
        hsla(118, 57%, 63%, 1) 14%, 
        hsla(128, 56%, 62%, 1) 21%, 
        hsla(136, 56%, 60%, 1) 28%, 
        hsla(142, 57%, 58%, 1) 33%, 
        hsla(149, 57%, 56%, 1) 40%, 
        hsla(153, 57%, 55%, 1) 44%, 
        hsla(158, 57%, 54%, 1) 50%, 
        hsla(162, 57%, 52%, 1) 55%, 
        hsla(167, 58%, 51%, 1) 61%, 
        hsla(170, 59%, 50%, 1) 65%, 
        hsla(173, 63%, 48%, 1) 70%, 
        hsla(176, 65%, 47%, 1) 74%, 
        hsla(178, 69%, 46%, 1) 78%, 
        hsla(182, 75%, 45%, 1) 85%, 
        hsla(185, 80%, 46%, 1) 90%, 
        hsla(186, 84%, 46%, 1) 94%, 
        hsla(189, 90%, 46%, 1) 100%);

        background: -moz-linear-gradient(135deg, 
        hsla(102, 63%, 60%, 1) 0%, 
        hsla(108, 61%, 61%, 1) 6%, 
        hsla(118, 57%, 63%, 1) 14%, 
        hsla(128, 56%, 62%, 1) 21%, 
        hsla(136, 56%, 60%, 1) 28%, 
        hsla(142, 57%, 58%, 1) 33%, 
        hsla(149, 57%, 56%, 1) 40%, 
        hsla(153, 57%, 55%, 1) 44%, 
        hsla(158, 57%, 54%, 1) 50%, 
        hsla(162, 57%, 52%, 1) 55%, 
        hsla(167, 58%, 51%, 1) 61%, 
        hsla(170, 59%, 50%, 1) 65%, 
        hsla(173, 63%, 48%, 1) 70%, 
        hsla(176, 65%, 47%, 1) 74%, 
        hsla(178, 69%, 46%, 1) 78%, 
        hsla(182, 75%, 45%, 1) 85%, 
        hsla(185, 80%, 46%, 1) 90%, 
        hsla(186, 84%, 46%, 1) 94%, 
        hsla(189, 90%, 46%, 1) 100%);

        background: -webkit-linear-gradient(135deg, 
        hsla(102, 63%, 60%, 1) 0%, 
        hsla(108, 61%, 61%, 1) 6%, 
        hsla(118, 57%, 63%, 1) 14%, 
        hsla(128, 56%, 62%, 1) 21%, 
        hsla(136, 56%, 60%, 1) 28%, 
        hsla(142, 57%, 58%, 1) 33%, 
        hsla(149, 57%, 56%, 1) 40%, 
        hsla(153, 57%, 55%, 1) 44%,        
        hsla(158, 57%, 54%, 1) 50%, 
        hsla(162, 57%, 52%, 1) 55%, 
        hsla(167, 58%, 51%, 1) 61%, 
        hsla(170, 59%, 50%, 1) 65%, 
        hsla(173, 63%, 48%, 1) 70%, 
        hsla(176, 65%, 47%, 1) 74%, 
        hsla(178, 69%, 46%, 1) 78%, 
        hsla(182, 75%, 45%, 1) 85%, 
        hsla(185, 80%, 46%, 1) 90%, 
        hsla(186, 84%, 46%, 1) 94%, 
        hsla(189, 90%, 46%, 1) 100%);

        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#7ed957", endColorstr="#77D85F", GradientType=1 );
        
        color: black;
        padding: 4%;
        border-radius: 1%;
        border-color: #0CC0DF;
        color: white;
        height: 20vh;

        overflow-y: auto;
        
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
        border-top: 3px solid white;
        border-color: white;
        font-weight: bold;
        
        
    }
    .card_imp{
        text-decoration: underline white;
        font-weight: bold;
    }
    ::-webkit-scrollbar {
         width: 8px;
         height: 12px;
    }

/* Color of the scrollbar handle */
    ::-webkit-scrollbar-thumb {
         background: #0CC0DF;

    }

/* Rounded corners of the scrollbar handle */
    ::-webkit-scrollbar-thumb:hover {
        background: #0999BF;
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
    @media (max-width:600px){
        .feedback_container{
            flex-flow: column nowrap;
            top: 44%;
            left: 20vw;
            width: 60vw;
            height: 100vh;
            gap: 2%;
        }
        .card_container{
            width: 50vw;
            height: 100%;
        }
        .pagination{
            position: absolute;
            left: 30%;
           bottom: -50%;

            width: 12vw;
            height: 2vh;
        }
        .prev_arr{
            width: 10vw;
        }
        .next_arr{
            width: 10vw;
        }
        
    }
</style>
