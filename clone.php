<?php

class Dog 
{
    public $name;

    public function getName(){
        return $this->name;
    }
}

$obj = new Dog;
$obj->name = 'Karabas';

$obj2 = clone $obj;
echo $obj2->name;

$obj->name = 'Lucky';
echo $obj->getName();

echo PHP_EOL;