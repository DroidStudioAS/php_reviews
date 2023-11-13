<?php 
function register_user ($mail){
    echo "user registered: $mail";
};
register_user("aleks.smilj@gmail.com");
//how to use global vars in function scope
$testic = 2;
function globalScoppe(){
    global $testic;
    echo $testic;
};
globalScoppe();
//this is how u set default values
function sum($n1 = 2,$n2 = 2){
    return $n1 + $n2;
}
echo sum();

//annonym functions
$subtract = function($n1,$n2){
    return $n1-$n2;
};
echo $subtract (12,6);
//single line functions
$multiply = fn($n1,$n2) => $n1* $n2;

echo $multiply (9,3);
?>