<?php 


$file= 'extras/users.txt';
if(file_exists($file)){
    //echo readfile($file);
    //pointer to the file
    //the 2nd param is the MODE, wether u read write or whatever(r-read w-write)
    $handle = fopen($file,'r');
    $contents = fread($handle, filesize($file));

    //u ALWAYS want to close files
    fclose($handle);

    echo  $contents;
}else{
    $handle = fopen($file,'w');
    $contents = 'Lex' .PHP_EOL. 'juno' . PHP_EOL . 'mike';
    fwrite($handle, $contents);
}
?>