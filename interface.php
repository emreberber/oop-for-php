<?php


// interface icinde sadece soyut metod bulunur.Abstract class'dan farkı budur
interface Logger
{
    public function logSave();
    public function logRead();
    // interface metodu herhangi bir body iceremez
    // aynı zamanda property de tanımlanamaz

    const VERSION = 6.1;    
    // const tanımlamaya izin verir
}


interface Email
{
    public function send();
    public function writeText();
    public function addFile();
    public function addClient();
}


// implement edilen interface'deki metodları icermek zorunda
class Email1 implements Email
{
    public function send(){
        // ...
        return $this;
    }        

    public function writeText(){
        // ...
        return $this;
    }

    public function addFile(){
        // ...
        return $this;
    }

    public function addClient(){
        // ...
        return $this;
    }
}


class User extends Email1
{
    private $email;

    public function __construct(){
        $this->email = new Email1;
    }

    public function sendEmailConfirm(){
        $this
        ->email
        ->addClient()
        ->writeText()
        ->addFile()
        ->send();
    }
}


$user = new User();
$user->sendEmailConfirm();

var_dump(Logger::VERSION);