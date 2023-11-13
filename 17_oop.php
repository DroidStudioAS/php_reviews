<?php 
class user{
    
    public $name;
    public $email;
    public $password;

    public function __construct($name,$email,$password){
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
    }

    public function set_name($name){
        $this->name = $name;
    }
    public function get_name(){
        return $this->name;
    }

}
class employe extends user{
    public $title;
    public function __construct($name, $email, $password,$title){
        //this is the same as super() in Java
        parent::__construct($name,$email,$password);
        //initialize title
        $this->title=$title;
    }
    public function get_title(){
        return $this->title;
    }


}

//regular users
$user0 = new user("Lex","Mock.mail@mail.com","pass");
$user1 = new user("Lexy","Mock1.mail@mail.com","pass");
//employe user
$user2 = new employe('rajesh',"rajesh@mail.com","pass","janitor");

$user0->set_name('Lex');
$user1->set_name('luther');

var_dump($user0->get_name());
var_dump($user1);
echo $user2->get_name();
echo $user2->get_title();
?>