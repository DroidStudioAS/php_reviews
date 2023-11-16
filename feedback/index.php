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
    <script src="main.js"></script>
    <title>Document</title>
</head>
<body>
        <form class="form_container" method="POST" >
            <h4 class="form_header">Leave your review</h4>
        <div class="form_field">
        <div class="label_container">
        <label class="form_label" for="name">Name </label>
        </div>
        <input class="form_input" type="text" name="name" id="name">
        <div class="err"> <?php echo $nameErr ? $nameErr:"" ?> </div>
        </div>
        <div class="form_field">

            <div  class="label_container">
            <label class="form_label" for="email">Email</label>
            </div>
            <input class="form_input" type="email" name="email" id="email">
            <div class="err"> <?php echo $emailErr ? $emailErr:"" ?> </div>
        </div>
        <div class="form_field">
            <div  class="label_container">
            <label class="form_label" for="feedback">Feedback</label><br>
            </div>
            <textarea onclick="moveCursorToStart(this)" class="feedback_field" type="text" name="feedback" id="feedback">
            </textarea>
            <div class="err"> <?php echo $bodyErr ? $bodyErr:"" ?> </div>
        </div>
        <input class="button" name="submit" type="submit" value="Send">
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
        top: 38%;
        left: 35%;

        width: 30vw;
        height: 60vh;
        
        display: flex;
        flex-flow: column nowrap;

        justify-content: center;
        align-items: center;

        border-radius: 5%;

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

    .form_field{
        display: flex;
        flex-flow: column nowrap;
        align-items: center;
        justify-content: center;
    }
    
    .form_input{
        width: 100%;
        padding: 4%;
        border: 1px solid #7ED957;
        border-radius: 4px;
        transition: all 0.3s ease;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .feedback_field{
        text-align: left;
        resize: none;

        height: 10vh;
        width: 120%;
        padding: 4%;
        border: 1px solid #7ED957;
        border-radius: 4px;
        transition: all 0.3s ease;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
.button{
  background-image: linear-gradient(92.88deg, 
  #7ED957 9.16%, 
  #5BD181 43.89%, 
  #0CC0DF 64.72%);


  border-radius: 8px;
  border-style: solid;
  border-color: white;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  flex-shrink: 0;
  font-family: "Inter UI","SF Pro Display",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Open Sans","Helvetica Neue",sans-serif;
  font-size: 16px;
  font-weight: 500;
  height: 4rem;
  padding: 0 1.6rem;
  text-align: center;
  text-shadow: rgba(0, 0, 0, 0.25) 0 3px 8px;
  transition: all .5s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button ::hover {
  box-shadow: rgba(80, 63, 205, 0.5) 0 1px 30px;
  transition-duration: .1s;
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
    .feedback_field{
            width: 100%;
        }
    }   
    @media(min-width:600px) and (max-width:740px){
        .feedback_field{
            width: 100%;
        }
    }
  
 
    

   
</style>