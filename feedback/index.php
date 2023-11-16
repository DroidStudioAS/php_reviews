<?php 
//require("inc/header.php"); this breaks the site if page not found
include("inc/header.php");
include("inc/footer.php");


//how to initialize multiple blank strings in 1 line
$name = $email = $body = "";
$nameErr = $emailErr = $bodyErr = "";

//form submit
if(isset($_POST['submit'])){
    //validation:
    if(empty($_POST['name'])||empty($_POST['email'])|| empty($_POST['feedback'])){ 
         $nameErr = 'Name required';
         $emailErr="email required";
         $bodyErr= "message required";
    }else{
        //sanitizing inputs
        $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mail = filter_input(INPUT_POST,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $body = filter_input(INPUT_POST,'feedback',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if(empty($nameErr) && empty($mailErr)&& empty($bodyErr)){
        $insrtSQL="INSERT INTO feedback (fb_name,fb_email,fb_body) VALUES ('$name','$mail','$body')";
        if(mysqli_query($conn,$insrtSQL)){
          header("Location: feedback.php");
        }else{
           echo "error: ". mysqli_error($conn);
        }
    }
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
      
        <form class="form_container" method="POST" >
            <h3 class="form_header">Leave your review</h3>
        <div class="form_field">
        <div class="label_container">
        <label for="name">Name </label>
        </div>

        <input type="text" name="name" id="name">
        <div class="err"> <?php echo $nameErr ? $nameErr:"" ?> </div>
        </div>
        <div class="form_field">

            <div  class="label_container">
            <label for="email">Email</label>
            </div>
            <input type="email" name="email" id="email">
            <div class="err"> <?php echo $emailErr ? $emailErr:"" ?> </div>
        </div>
        <div class="form_field">
            <div  class="label_container">
            <label for="feedback">Feedback</label><br>
            </div>
            <input class="feedback_field" type="text" name="feedback" id="feedback">
            <div class="err"> <?php echo $bodyErr ? $bodyErr:"" ?> </div>
        </div>
        <input name="submit" type="submit" value="Send">
        </form>
    



<!--    <form method="POST" 
        class="form">
        <h1>Feedback</h1>
        
    </form> -->

</body>
</html>
<style>
    .form_container{
        position: absolute;
        top: 40%;
        left: 35%;

        width: 30vw;
        height: 50vh;
        
        display: flex;
        flex-flow: column nowrap;

        justify-content: center;
        align-items: center;

        background-color: #0CC0DF;
        color: white;
        
    }
    .form_container h3{
       font-size: xx-large;
        
    } 
    .form_container input{
        margin: 4%;
    }
    .form_header{
       position: absolute;
       top: 0%;
       font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
       text-align: center; 
    }



    @media(max-width:600px) {
        .form_container{
            top: 43vh;
            width: 50vw;
            left: 25vw;    
    }
    .form_header{
        position: absolute;
        top: 0%;
    }
    }   
    


    /*.form{
       position: absolute;
       top:30vh;
       width: 50vw;
       left: 25vw;
       padding: 2%;

       display: flex;
       flex-flow: column nowrap;
       align-items: center;

       background: hsla(102, 63%, 60%, 1);
        background: linear-gradient(315deg, hsla(102, 63%, 60%, 1) 0%, hsla(189, 90%, 46%, 1) 100%);
        background: -moz-linear-gradient(315deg, hsla(102, 63%, 60%, 1) 0%, hsla(189, 90%, 46%, 1) 100%);
        background: -webkit-linear-gradient(315deg, hsla(102, 63%, 60%, 1) 0%, hsla(189, 90%, 46%, 1) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#7ED957", endColorstr="#0CC0DF", GradientType=1 );

        border-radius: 5%;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: whitesmoke;


    }
    .form_field{
        margin: 0.5%;
    }
    .feedback_field{
        width: 50vw;
        height: 20vh;
        text-align: start;
    }
    .label_container{
        text-align: center;
    }
    
   
    .err{
        color: #541e1b;
        text-align: center;
        text-decoration: underline;
    }

   */
</style>