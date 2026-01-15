<?php
    class person {
        private $id;
        private $name;
        private $gender;
        public function __construct($id,$name,$gender) {
            $this->id=$id;
            $this->name=$name;
            $this->gender=$gender;
        }
        public function show(){
            echo $this->id. '<br>';
            echo $this->name. '<br>';
            echo $this->gender;
        }
    }
    class Student extends Person {

    }
    $student = new Student(1,"Pha","Male");
    $student->show();
?>