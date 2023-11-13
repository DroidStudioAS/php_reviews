<?php 
$x=0;
while($x<=15){
    var_dump($x);
    $x++;
}
$y=0;
do {
var_dump($y);
$y++;
}while($y<=15);
$test = [1,2,3,4,5];
/**for each loop*/
foreach ($test as $x){
    echo "Number: ";
    var_dump($x);
};
foreach ($test as $index => $x){
  echo $index . " " . $x . " ";
};
//same thing with a counter post
for($i=0; $i<count($test);$i++){
    var_dump($test[$i]);
}
$linked_test = [
    "name"=>"john",
    "last_name"=> "marks",
    "salary"=>4000
];
foreach($linked_test as $key=>$john_doe){
    echo " $key - $john_doe ";
};



?>