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

    <form method="POST" 
        class="form">
        <h1>Feedback</h1>
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

</body>
</html>
<style>
    .form{
       position: absolute;
       top:44%;
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

    @media(min-width:600px) {
        .form{
            top: 46%;
            width: 30vw;
            left: 35vw;
        }
        .feedback_field{
            width: 25vw;
        }
        
    }
</style>