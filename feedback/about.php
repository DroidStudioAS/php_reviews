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
            <img src="/Aleksandar_Smiljanic/feedback/inc/logo.png"/>
        </div>
        <div class="bio_container">
            <h3>Aleksandar Smiljanic Software </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam eaque a nulla suscipit facere magni reprehenderit amet, qui ab unde, provident veritatis tempore dolorem soluta optio culpa molestias quas beatae.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati illo animi soluta quos officia cupiditate architecto, itaque facilis exercitationem, recusandae voluptatibus quaerat libero autem consequatur doloremque, doloribus maxime minima nisi!</p>
            <p></p>
            
        </div>
    </div>
    <div class="second_row">
            <div class="skills_container">   
                <h4>Skills include but not limited to:</h4>   
                <ul>
                    <li>Java</li>
                    <li>Android Studio</li>
                    <li>HTML CSS and JS</li>
                    <li>Vue.JS</li>
                    <li>Node.JS</li>
                    <li>PHP</li>
                    <li>WordPress</li>
                    <li>MySQL</li>
                    <li>SQLite</li>
                    <li>Git</li>
                    <li>C# Fundamentals</li>
                    <li>Unity 3D</li>
                </ul>
            </div>
            <div class="projects_container">
                <h4>My Projects</h4>
                <dl>
                    <dt>
                        Infinite Swipe
                    </dt>
                    <dd>
                       2d arcade quiz game made with Vue.JS. Implemented GSAP for all front end animations
                    </dd>
                    <dt>
                        FitCalc
                    </dt>
                    <dd>
                      Android app built with Java in Android Studio. Takes measurments from the user to calculate
                      users ideal ideal weight and daily calorie intake
                    </dd>
                    <dt>
                        Running Tracker
                    </dt>
                    <dd>
                    Android app built with Java in Android Studio. Uses location services to follow and show
                    the users location. Built on top of the Google maps api.
                    </dd>
                    <dt>
                        Flappy Bird Clone
                    </dt>
                    <dd>
                      Unity 3D game made with c#. A complete working copy of the popular arcade game flappy bird 
                    </dd>
                    <dt>
                        Calculator
                    </dt>
                    <dd>
                    Android app built with Java in Android Studio. Works on all the 4 basic arythmetic operations with some
                    "scientific" options
                    </dd>
                    <dt>
                        QuizMe
                    </dt>
                    <dd>
                    Android game built with Java in Android Studio. Uses the Trivia REST api to generate questions that
                    the user is scored on.
                    </dd>
                    <dt>
                        FlyingDonut
                    </dt>
                    <dd>
                    Android game built with Java in Android Studio. Prompts the user to press on the character as fast as he can 
                    to move it from the bottom to the top of the screen.
                    </dd>
                    <dt>
                        ToDo
                    </dt>
                    <dd>
                    Android app built with Java in Android Studio. Utilizes SQLite so that it stores all the users
                    tasks offline.
                    <dt>
                        QuoteStop
                    </dt>
                    <dd>
                    Android app built with Java in Android Studio. Uses a quote generating api, to deliver inspiring and motivating
                    quotes to the user on demand. Also uses SQLIte to store the users favorite quotes offline.
                    </dd>
                </dl>
            </div>
    </div>

</div>
    
</body>
</html>
<style>
   
    .main_container{
        width: 80vw;
        height: 100vh;
        margin: 8px;
        display: flex;
        flex-flow: column nowrap;


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
        width: 16vw;
        height: 30vh;
       
    }
    .headshot_container img{
        width: 16vw;
        height: 30vh;
    }
    .bio_container{
        width: 64vw;
        height: 30vh;
        
        display: flex;
        flex-flow: column nowrap;
        align-items:start;
        justify-content: space-around;

        padding-left: 2%;
       
    }
    .skills_container{
        width: 26.66vw;
        height: 50vh;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-flow: column nowrap;
    }
    .projects_container{
        width: 53.34vw;
        height: 70vh;

        display: flex;
        flex-flow: column nowrap;
        align-items: center;
    }
    .projects_container dt{
        font-weight: bold;
    }
    .projects_container dd{
        font-style: italic;
    }

    @media(max-width:600px) {
        .main_container{
            top: 40%;
            height: 100vh;
        }
        .headshot_container{
          margin-bottom: 7%;
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