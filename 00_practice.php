<?php 
function factorialFinder($n){
    $sum = 1;
    for($i = 1; $i<=$n; $i++){
    $sum*=$i;
};
return $sum;
};
echo factorialFinder(6);
function prime_num_finder($n){
    if($n<1){
        return false;
    }
    for($i=2; $i<sqrt($n);$i++){
        if($n%$i===0){
            return false;
        };
    }
    return true;
};
echo prime_num_finder(97); //true
//array sorter
function sortArray($array){
}
echo sortArray([5,4,3,2,6]);


?>