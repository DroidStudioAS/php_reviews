<?php 
//MySQLi is the api we use to connect to sql with vanila php
define('DB_HOST','localhost');
define('DB_USER','smiljanic19');
define('DB_PASSWORD','Hvmk1312');
define('DB_NAME','feedback_dev');
//create connection
$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if($conn->connect_error){
    die('connection failed' . $conn->connect_error);
}


?>