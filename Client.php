<?php 
    include 'FoodFactory.php';
    class Client {
        public $food;
        public function __construct(){
           $this->food= new FoodFactory('BeefBiriyani');
        }
    }
    $client =new Client();
    echo $client->food->FoodType()->getFood();
?>