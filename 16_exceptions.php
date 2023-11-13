<?php 
function inverse($arg){
if(!$arg){
    throw new Exception("Division by 0");
}
    return 1/$arg;
}
try{
    echo inverse(5);
    echo inverse(0);
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo inverse(1);
}


echo "hello_world"
?>