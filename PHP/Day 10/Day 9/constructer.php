<?php
    class Animal {
        private $id;
        private $name;
        public function __construct($id,$name) {
            $this->id=$id;
            $this->name=$name;
        }
        public function show(){
            echo $this->id. '<br>';
            echo $this->name;
        }
    }
    $animal = new Animal(1,"Dragon");
    $animal->show();
    
?>