<?php
class User {
    protected $name;
    protected $age;


    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }



}

class Customer extends User{

    private $balance;
    public function __construct($name, $age, $balance){
        parent::__construct($name, $age);
        $this->balance = $balance;
    }



    public function pay($amount){
        return $this->name.'paid $'. $amount;
    }


    public function getBalance(){
        return $this->balance;
    }
}

$cunstomer1 = new Customer('John', 30,500);
// echo $cunstomer1->pay(100);

echo $cunstomer1->getBalance();