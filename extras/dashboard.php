<?php
session_start();

if(isset($_SESSION["username"])){
    echo "<h1> Welcome Back " .  $_SESSION["username"] ."</h1>";
    echo "<a href='logout.php'>Log out </a>";
}else{
    echo "<h1>Welcome</h1>";
    echo "<a href='/Aleksandar_Smiljanic/13_sessions.php'> Home </a>";
}
?>



