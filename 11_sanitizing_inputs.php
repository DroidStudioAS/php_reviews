<?php 

/*if(isset($_POST['submit'])){
    //this will still show any ,script or other tags, but they will not execute
    //alternatively
    //u could use the filter input function-->
    $name = htmlspecialchars(($_POST['name']));
    $age = htmlspecialchars($_POST['age']);
    $mail = htmlspecialchars($_POST['mail']);
    echo ''.$name.''.$age.''.$mail.'';
    };*/
   
    if(isset($_POST['submit'])){
         //filterinput example
         //no need for the post supergloval, we just use the key AND SANITATION RULES
        /*
        $name =filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);
        $mail = filter_input(INPUT_POST,'mail', FILTER_SANITIZE_SPECIAL_CHARS);
        echo ''.$name.''.$age.''.$mail.'';
        */
        //ALTERNATIVELY U CAN USE
        //FILTER_VARS WHICH CAN BE USED FOR ANY TYPE OF VALIDATION, NOT JUST INPUTS
        $name = filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);
        echo $name;
        };
?>
<!--the form should also be wrapped with special chars to avoid any mishaps -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<h1>change</h1>
<div>
    <label for="name">Name</label>
    <input type="text" name="name"/>
</div>
<div>
    <label for="age">age</label>
    <input type="text" name="age"/>
</div>
<div>
    <label for="mail">mail</label>
    <input type="text" name="mail"/>
</div>
<input type="submit" name="submit" value="submit"/>
</form>