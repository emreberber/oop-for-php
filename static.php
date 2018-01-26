<?php

// static ile yeni obje olusturmadan erisim

class Numbers
{
    public static $pi = 3.14;
}


class Math extends Numbers
{
    public static function getPi(){
        return parent::$pi;
    }
}

echo Math::getPi();

echo PHP_EOL;