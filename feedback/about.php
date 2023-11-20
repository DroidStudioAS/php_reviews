<?php 
include("inc/header.php");
include("inc/footer.php");
//require("inc/header.php"); this breaks the site if page not found
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
<div class="main_container">
    <div class="first_row">
        <div class="headshot_container">
            
        </div>
        <div class="bio_container">

        </div>
    </div>
    <div class="second_row">
            <div class="skills_container">           
            </div>
            <div class="projects_container">
                
            </div>
    </div>

</div>
    
</body>
</html>
<style>
    .main_container{
        width: 80vw;
        height: 60vh;
        margin: 8px;
        display: flex;
        flex-flow: column nowrap;

        background-color: pink;

        position: absolute;
        top: 36%;
        left: 9vw;
    }

    .first_row{
        display: flex;
        flex-flow: row nowrap;
    }
    .second_row{
        display: flex;
        flex-flow: row nowrap;
    }

    .headshot_container{
        background-color: aqua;
        width: 16vw;
        height: 30vh;
    }
    .bio_container{
        background-color: purple;
        width: 64vw;
        height: 30vh;
    }
    .skills_container{
        background-color: rosybrown;
        width: 26.66vw;
        height: 30vh;
    }
    .projects_container{
        background-color: gold;
        width: 53.34vw;
        height: 30vh;
    }

    @media(max-width:600px) {
        .main_container{
            top: 40%;
        }
        .first_row{
            flex-flow: column nowrap;
        }
        .second_row{
            flex-flow: column nowrap;
        }
        .main_container div{
            width: 100%;
        }
        
    }
</style>