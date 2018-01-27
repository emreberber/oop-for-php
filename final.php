<?php

// final ile tanımlanan sınıflar extend edilemezs
final class NoExtend
{

}


class ParentClass
{

    public function func1(){
        return 'Parent func1';
    }

    final public function func2(){
        return 'Parent func2';
    }

}


class ChildClass extends ParentClass
{

    public function func1(){
        return 'Child func1';
    }

    /*  
    Parent class'da bu metod final ile tanımlandıgı icin override edilemez

    public function func2(){
        return 'Child func2';
    } 
    
    */
}

$obj = new ChildClass();
echo $obj->func1();


