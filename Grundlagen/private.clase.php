<?php
class User{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }


    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    //__get Magic Method

    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }

    // Set Magic Method
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
    }
}


$user1 = new User('John', 30);

// echo $user1->setName('Josef');
// echo $user1->getName();
 $user1 -> __set('age', 31);
echo $user1 -> __get('age');