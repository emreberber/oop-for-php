<?php


class Cat 
{
    private $name  = "Duman";
    private $color = "Gray";
    private $sound = "Miyav";

    public function getSound(){
        echo $this->sound;  // NEW LINE FOR TERMINAL
    }

    public function setName(String $newName){
        $this->name = $newName;
    }

    public function getName(){
        echo $this->name;
    }
}

$obj = new Cat();  // CREATE A NEW OBJECT
// echo $obj->name; CANNOT ACCESS PRIVATE PROPERTY

$obj->getSound();
echo PHP_EOL;
$obj->setName('Boncuk');
$obj->getName();



echo PHP_EOL; 