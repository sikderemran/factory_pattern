<?php 
    include 'BeefBiriyani.php';
    // include 'FishCurry.php';
    class FoodFactory{
        public $foodType;
        public function __construct($foodType){
            $this->foodType=$foodType;
        }
        public function FoodType(){
            if($this->foodType=='FishCurry'){
                return new FishCurry();
            }elseif($this->foodType=='BeefBiriyani'){
                return new BeefBiriyani();
            }
            
        }
    }
?>