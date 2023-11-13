<?php 
$fruits = ['apple',"orange","pineapple","clementine"];
//get length
var_dump(count($fruits));


//search
var_dump(in_array("melon",$fruits));
var_dump(in_array("apple",$fruits));

//add to array
//adds to array END
$fruits[] = "melon";
var_dump($fruits);
//or
array_push($fruits,"banana","strawberry");
var_dump($fruits);
//adds to array BEGINING
array_unshift($fruits,"apricot");
var_dump($fruits);
//remove from array
//takes the last index out
array_pop($fruits);
var_dump($fruits);
//takes the first index out
array_shift($fruits);
var_dump($fruits);
//remove specific element by index
unset($fruits[2]);
var_dump($fruits);
//split to chunks of 2
$chunked_arr = array_chunk($fruits,2);
var_dump($chunked_arr);
//concat arrays
$arr_1 = [1,2,3,4];
$arr_2 = [5,6,7,8];
//merge
$arr_3 = array_merge($arr_1,$arr_2);
var_dump($arr_3);
//spread operator
//coppies an array to another array
$arr4= [...$arr_1,];
var_dump($arr4);
//or u could merge them with this operator as follows
$arr_5 = [...$arr_2,...$arr_3];
var_dump($arr_5);
//combine: takes the values of the first array and uses them
//as KEYS, and the second array is VALUES
//IMPORTAN, ARR_1 AND 2 MUST HAVE THE SAME NUMBER OF ENTRIES
$a=["red","green","yellow"];
$b=['apple','avocado','banana'];

$c = array_combine($a,$b);
var_dump($c);
//extract the keys
$keys = array_keys($c);
print_r($keys);
//flip an array;
//flips the keys for values and values for keys
$flipped_keys = array_flip($keys);
print_r($flipped_keys);
//create a ranged arr
$numbers = range(1,20);
print_r($numbers);
//map arrays
$new_nums = array_map(function($numb){
    return "Number: $numb";
},$numbers);
print_r($new_nums);
//filter an array
$let_then_10 = array_filter($numbers,fn($number)=> $number<=10);
print_r($let_then_10);
//reduce
//ads all the numbers together
//carry= the value of the previous iteratiopn
$sum = array_reduce($numbers,fn($carry,$number) => $carry + $number);
var_dump($sum)

?>