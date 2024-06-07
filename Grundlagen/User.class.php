<?php

// classe User
class User{
    public $name;
    public $age;


    // Runs when an object is created instizialized
  public function __construct($name, $age){
    echo __CLASS__.'instizialized<br>';
    // echo 'User created';
    $this -> name = $name;
    $this -> age = $age;
  }
    public function sayHello(){
        return $this->name . 'says hello!';
   
        
    }

    
    // clalled when no other reference to a certain object
    // Used for cleanup, closing connections, etc.
    public function __destruct(){
        echo 'destructed';
    }

}
$user2 = new User('John', 30);

// echo $user2->name. 'is'. $user2->age. 'years old';
// echo '<br>';
// echo $user2->sayHello();
// echo '<br>';
// echo $user2->age. 'years old';