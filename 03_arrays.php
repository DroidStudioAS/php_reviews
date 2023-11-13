<?php
//simple arr
//first way of initializing
$nums = [1,2,3,4,5];
//second way
$fruits = array("apple","orange","lemon");

print_r($fruits);
print_r($nums);

var_dump($fruits);
var_dump($nums);

//how can i use echo for arrays??
echo $fruits [1];

//assciative arr
//you can use anything for the keys
$linked_array = [
"red" => [1,2,3],
2=>[4,5,6],
3=>[7,8,9]
];
var_dump ($linked_array);
//how to access array values
echo $linked_array["red"][0];
$person=[
    "first_name"=>"Mirko",
    "last_name"=>"Filipovic",
    "age"=>50,
    "date_of_birth"=>"12.05.1960",
    "last_5_fight"=>[0,0,1,1,1]
];
var_dump($person);
//multidimensional arrays
$matrix = [
    [
    "first_name"=>"Mirko",
    "last_name"=>"Filipovic",
    "age"=>50,
    "date_of_birth"=>"12.05.1960",
    "last_5_fight"=>[0,0,1,1,1] 
    ],
    [
    "first_name"=>"Djordje",
    "last_name"=>"Kastratovic",
    "age"=>50,
    "date_of_birth"=>"12.05.1960",
    "last_5_fight"=>[0,0,1,1,1]
    ],
    [
    "first_name"=>"Skender",
    "last_name"=>"Beg",
    "age"=>50,
    "date_of_birth"=>"12.05.1960",
    "last_5_fight"=>[0,0,1,1,1]
    ]
];
var_dump($matrix);
//mirkoz age
echo $matrix[0]["age"];
//bringz back the 0 elemtent of the last five fiht array of the FIRST persob
echo $matrix [0]["last_5_fight"][0];
//to encode an array to json
var_dump(json_encode($matrix))
//to decode
//json_decode()
?>