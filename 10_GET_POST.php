<?php 
//GET VS POST IN PHP DIFFRENCE
//GET U CAN USE TO GET DATA FROM BOTH FORMS AND URI'S, POST ONLY FOR FORMS
/*echo($_GET['name']);
echo($_GET['age']);
echo($_GET['mail']);*/

if(isset($_POST['submit'])){
    echo($_POST['name']);
    echo($_POST['age']);
    echo($_POST['mail']);
    };
?>
<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=mirko&age=16&mail=mail" >click</a>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
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
