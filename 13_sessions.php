<?php 
/*******Sessions*********/
/*
"a way to store information (in variables) to be used 
accross multiple pages"
Coockies- stored on the client
Sessions- stored in a server (more secure, this is where u would
store user data (id))
*/ 

//first u always have to start the session
/************IMPORTANT***********/
/*
php files can be included in one another.
usually your website header is going to be just 1 php file where u
start/stop the sessions etc(/extras/dashboard.php)
*/

session_start();

if(isset($_POST['submit'])){
    $username = filter_var($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS);
    $password=$_POST['password'];

    if(strtolower($username)==="lex" && $password==="Hvmk"){
        $_SESSION["username"] = "$username";
        header("Location: /Aleksandar_Smiljanic/extras/dashboard.php");
    }else{
        echo "wrong!";
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<h1>change</h1>
<div>
<label for="username">username</label>
<input type="text" name="username"/>
</div>
<div>
<label for="password">password</label>
<input type="text" name="password"/>
</div>
<div>
<label for="mail">mail</label>
<input type="text" name="mail"/>
</div>
<input type="submit" name="submit" value="submit"/>
</form>