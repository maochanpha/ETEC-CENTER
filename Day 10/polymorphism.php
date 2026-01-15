<?php
    // class person {
    //     protected $id;
    //     protected $name;
    //     public function __construct($id, $name) {
    //         $this->id = $id;
    //         $this->name = $name;
    //     }
    //     public function show(){
    //         echo $this ->id. '<br>';
    //         echo $this ->name. '<br>';
    //     }

    // } 
    //     class Teacher extends Person {
    //         private $gender;
    //         public function __construct($id, $name, $gender)
    //         {
    //             parent:: __construct($id, $name);
    //             $this->gender=$gender;
    //         }    
    //         public function show(){
    //             parent:: show();
    //             echo $this -> gender;
    //         }
    //     }
    //     $teacher = new teacher(1, 'Pu Jork' , 'male');
    //     $teacher ->show()

    abstract class Animal{
        protected $name;
        protected $gender;
        public function __construct($name, $gender)
        {
            $this -> name=$name. '<br>';
            $this -> gender=$gender;
        }
        abstract public function show();
    }

    class Dog extends Animal{
        public function show(){
            echo $this -> name;
            echo $this -> gender;
        }
    }
    $dog = new Dog('Ah Thai', 'Gay');
    $dog->show()
?>