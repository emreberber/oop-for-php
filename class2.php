<?php

// DRY -- DON'T REPEAT YOURSELF
// self:: 
// parent::

class Animal
{
    protected $name;    // ACCESS FROM CHILD CLASSES
    private $color;
    private $sound;

    const LIVE = true;

    public function getSound(){
        return $this->sound;    // NEW LINE FOR TERMINAL
    }

    public function getName(){
        return $this->name;
    }

}


class Cat extends Animal
{
    const age = 10;

    public function __construct($name, $color, $sound){
        $this->name  = $name;
        $this->color = $color;
        $this->sound = $sound; 
    }

    public function __destruct(){
        //
    }

    public function getAge(){
        return self::age;   // ACCESS TO THIS CLASS'S CONST
    }

    public function getLive(){
        return parent::LIVE;   //  ACCESS TO PARENT CLASS'S CONST
    }

}


$obj = new Cat('Sweetcat', 'White', 'Miyav');
echo $obj->getLive();
echo PHP_EOL;
echo $obj->getAge();


echo PHP_EOL; 


// 02-12