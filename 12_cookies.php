<?php 
/************Cookies***************/
/*
Cookies are a "mechanism for storing data in the remote browser
and thus tracking or identifying return users You can set specific
data to be stored in the browser, and then retrive it when the user
returns to the site"
SENSITIVE DATA-SESSION, TRIVIAL DATA-COOKIES
*/

//SETCOOKIE 86400 = 1 day in seconds
setcookie('name',"Brad",time() + 86400);
if(isset($_COOKIE['name'])){
    echo ''.$_COOKIE['name'].'';
};
//now to unset it
//u set it for - the time
setcookie('name','',-86400);
?>