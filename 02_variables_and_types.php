<?php 
/**string 
 * int 
 * float
 * boolean 
 * array 
 * object
 * nul and 
 * resource*/

 $name = "aleks";
 $age = 24;
 $is_employed = false;
 $array = array(["hi","lil","boy"]);
//in php we concat things with .
 echo 'hi '  . $name .  ' are you '  . $age .  'years old';
//when using "", concationation is not neccesary....
 echo "hi $name are you $age years old";
// it gives 12 not  66
 echo 6+6;
//defining constants
define("HI","value");
//SHOULD LOG "VALUE"
echo HI;

?>