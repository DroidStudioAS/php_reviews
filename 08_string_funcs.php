<?php 
$string = "Hello World";
//get length
echo strlen($string);
//find the position of the first occ of a substring
echo strpos ($string,'o');
//position of last occurence
echo strrpos ($string,'o');
//reverse
echo strrev($string);
//toLowerCase
echo strtolower($string);
//toUpperCase
echo strtoupper($string);
//upercase first letter
echo ucwords($string);
//replace a part of the string
echo str_replace('Hello',"Fuck the",$string);
//return a substring specified by offset/length
//from 0 to 3
echo substr($string,0,3);
//gets the string from 6+
echo substr($string,6);
//check the start
if(str_starts_with(strtolower($string),"hel")){
    echo "yess";
}else{
    echo "no";
}
//check the end
if(str_ends_with(strtolower($string),"hel")){
    echo "yess";
}else{
    echo "no";
}
//html entities and special chars
$string2="<script>alert(1)</script>";
//this will activate the script tag and alert 1
//echo $string2;
//this will display the html as a string on the page
echo htmlspecialchars($string2);
//formating strings-same as java
printf("%s likes to %s","john","hunt babies");
printf("1+1=%d",1+1);
printf("1+1=%f",1+1);
?>