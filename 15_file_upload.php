<?php 
if(isset($_POST["submit"])){
    $allowed_formats =  array("png","jpg","gif");

    //the name of the input goes in the []
    if(!empty($_FILES['upload'])){
        print_r($_FILES);

        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp_name=$_FILES['upload']['tmp_name'];

        //get extenstion
        //explode is like split in java
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
         
        //validate file
        if(in_array($file_ext, $allowed_formats)){
             $target_dir = "uploads/$file_name";
             if($file_size<=1000000){
                //keep going
                //move the file to a desired location
                move_uploaded_file($file_tmp_name, $target_dir);
                $message = "<p style='color:green;'> success</p>";

             }else{
                $message = "<p style='color:red;'> file larger then 1 mb </p>";

             }
        }else{
            $message = "<p style='color:red;'> WE ONLY TAKE JPG PNG AND GIfs </p>";
          
        }


        echo $file_name .PHP_EOL. $file_size .PHP_EOL. $file_tmp_name;
    }else{
        $message = "<p style='color:red;'> please choose a file </p>";
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <!--If u try to upload a file without the enctype on the form
    it will not work -->
    <form action=<?php echo $_SERVER['PHP_SELF']; ?>
    method="POST" enctype="multipart/form-data">
    Select image to upload
    <input type="file" name="upload">
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>