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
        <div>
        <label for="name">Name </label>
        <input type="text" name="name" id="name">
        <div class="err"> <?php echo $nameErr ? $nameErr:"" ?> </div>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <div class="err"> <?php echo $emailErr ? $emailErr:"" ?> </div>
        </div>
        <div>
            <label for="feedback">Feedback</label>
            <input type="text" name="feedback" id="feedback">
            <div class="err"> <?php echo $bodyErr ? $bodyErr:"" ?> </div>
        </div>
        <input name="submit" type="submit" value="Send">
    </form>

</body>
</html>
<style>
    .form{
       position: absolute;
       top:35%;
       width: 10vw;
       left:45vw;
       height: 100vh;
       display: flex;
       flex-flow: column nowrap;
       align-items: center;

    }
    .err{
        color: red;
    }
</style>