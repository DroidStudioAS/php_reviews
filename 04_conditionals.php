<?php 
function fizzBuzz($n){
    for($i=0;$i<$n;$i++){
        if($i%3===0 && $i%5===0){
            echo " fizzBuzz ";
        }else if($i%3===0){
            echo " fizz ";
        }else if($i%5===0){
            echo " Buzz ";
        }else{
            echo $i;
        }
    }
}

fizzBuzz(300);

//DATE
$month_of_year = date("F");
echo $month_of_year;

//hour
$time=date("H");

if($time>=12){
    echo "Good afternoon";
}else if($time<12){
    echo "Good morning";
}

//CHECKING IF AN ARRAY IS EMPTY
$testarr = ['one','two','three'];
if(empty($testarr)){
    echo 'hi';
}
//ternarni operater
//funkcija uslov ? param : param ;
echo !empty($testarr) ?  "not empty" : "empty";

$first_el = !empty($testarr) ? "kita" : "nije kita";

$first_el = $testarr[0] ?? null;

echo $first_el;

switch ($first_el){
    case "one":
        echo "is one";
        break;
     case "two":
        echo "two";
        break;
     default:
        echo "err";
}
?>