<?php

 /* 1.Object Oriented Programming */ 

/*
 From PHP5 onwards you can write PHP in either a procedural or object oriented way.
 00P consists of classes that can hold " properties " and " methods " . 
 Objects can be created from classes .
*/



/*------------- 2.Class  ----------*/

// 2.1.properties - are attributes that belong to a class
// Access Modifiers: public, private, protected
// public - can be accessed from anywhere
// private - can only be accessed from inside the class
// protected -  - can only be accessed from inside the class and by inheriting classes

//2.2.Creating a user class
class User {

    //properties - are attributes that belong to a class
    public $name;
    public $email;
    public $password;

   


    // 2.4.A constructor is a method that runs when an object is created
    function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }


    //2.3.method is function that belong to a class
    //
    function set_name($name) {
        $this->name = $name;
    }

    //
    function get_name() {
       return $this->name;
    }

    function set_email($email) {
        $this->email = $email;
    }

    //
    function get_email() {
       return $this->email;
    }

    //output info |
    function print_User() {
        //getting info to print
         echo 'name: '.$this->get_name();
         echo 'email: '.$this->get_email();
    }
}



//3.instantiate a user object
$user1 = new User('Vinay Kumar', 'vk1121@mailinator.com', '*******');

//output:
echo 'output <br> name of user:'. $user1->$name;
echo "<hr>";

//vardump($user1);
$user1->$email = "vinay@mailinator.com";
$user1->$password = "############";
var_dump($user1);
echo "<hr>";


//using method from the class, to give name to the user
$user1->set_email('vinay1');


//method: output
$user1->print_User();




//Inheritance
class Employee extends User {
    public $title;
     public function __construct($name, $email, $password, $title){

        //similar to super
        parent::__construct($name, $email, $password);
        $this->title = $title;
     }

     public function get_title() {
        return $this->title;
     }
}


//3.instantiate an Employee object
$employee1 = new Employee('Vinay', 'vk2212@mailinator.com', '######', 'Team Lead');

//method: output
echo '<br><hr><br>'.$employee1->get_title();



?>