<?php 
/**************Built in variables always available in ALL scopes*****************/

/**
 *$_GET:CONTAINS INFORMATION ABOUT VARIABLES PASSED THROUGH A URL OR IN A FORM
 *$_POST:CONTAINS INFORMATION ABOUT VARIABLES PASSED THROUGH A FORM
 *$_COOKIE:CONTAINS INFORMATION ABOUT VARIABLES PASSED THROUGH A COOKIE
 *$_SESSION:CONTAINS INFORMATION ABOUT VARIABLES PASSED THROUGH A SESSION
 *$_SERVER:CONTAINS INFORMATION ABOUT THE SERVER ENVIORMENT
 *$_ENV:CONTAINS INFORMATION ABOUT ENVIORMENT VARIABLES 
 *$_FILES:CONTAINS INFORMATION ABOUT FILES UPLOADED TO THE SCRIPT
 *$_REQUEST:CONTAINS INFORMATION ABOUT VARIABLES PASSED THROUGH A URL OR IN A FORM
 **/
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST'];?> </li>
        <li>Document root: <?php echo $_SERVER['DOCUMENT_ROOT'];?> </li>
        <li>Server name: <?php echo $_SERVER['SERVER_NAME'];?> </li>
        <li>Server port: <?php echo $_SERVER['SERVER_PORT'];?> </li>
        <li>Current file directory: <?php echo $_SERVER['PHP_SELF'];?> </li>
        <li>Request URI: <?php echo $_SERVER['REQUEST_URI'];?> </li>
        <li>Server software: <?php echo $_SERVER['SERVER_SOFTWARE'];?> </li>
        <li>Client info: <?php echo $_SERVER['HTTP_USER_AGENT'];?> </li>
        <li>Remote adress: <?php echo $_SERVER['REMOTE_ADDR'];?> </li>
        <li>Remote port: <?php echo $_SERVER['REMOTE_PORT'];?> </li>
        
   </ul>
</body>
</html>

