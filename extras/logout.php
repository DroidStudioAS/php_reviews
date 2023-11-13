<?php 
session_start();

session_destroy();
//this is to redirect back to 
//a location
header("Location: /Aleksandar_Smiljanic/13_sessions.php");
?>