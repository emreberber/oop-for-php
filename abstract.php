<?php

// abstract metoda sahip class'lar da abstract tanımlanmalıdır
// abstract class'ı extend eden sınıflar abstract sınıfın tüm abstract fonksiyonlarını icermek zorunda
// bu abstract metodları override etmek yerine kendilerini de cagırabiliriz
abstract class Animal
{
    protected $name;

    public function getName(){
        return $this->name;
    }

    abstract function getSound();   
}


class Cat extends Animal
{
    public function __construct($name){
        $this->name=$name;
    }

    public function getName(){
        return parent::getName();
    }

    public function getSound(){
        return 'Miyav';
    }
}


class Dog extends Animal
{
    public function getSound(){
        return 'Hav Hav';
    }
}


$cat = new Cat('Duman');
echo $cat->getSound();
echo $cat->getName();
echo PHP_EOL;

$dog = new Dog();
echo $dog->getSound();

echo PHP_EOL;