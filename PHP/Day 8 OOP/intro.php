<?php
class Person{
    private $id;
    private $name;
    private $gender;

    public function data($id, $name, $gender){
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender; 
}
    public function getID(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getGender(){
        return $this->gender;   
    }
}
$person1 = new Person();
$person1->data(1, 'Wukong', 'Male');
echo "ID: " . $person1->getID() . "<br>";
echo "Name: " . $person1->getName() . "<br>";
echo "Gender: " . $person1->getGender();
?>