<?php


class Person {

    public $name;
    protected $id;
    private $phone;
    // public    : dısarıdan erisim saglanabilir
    // protected : kendi ve alt sınıflar erisebilir
    // private   : sadece kendi sınıfı

    public function __construct($n) {
        // echo 'Yapıcı Fonksiyon calıstı';
        $this->name = $n ;
    }

    public function GetName() {
        return $this->name;
    }

    // protected for override
    protected function SetName($n) {
        $this->name = $n;
    }
}

// Student sınıfı Person sınıfından miras alıyor : extends
// Student bir Person dır iliskisi mevcuttur
class Student extends Person{

    public function __construct($n) {
        $this->SetName($n);
    }

    // Miras alınan sınıfta bulunan setName fonksiyonu override edilmistir
    // protected tanımlı fonksiyon yeniden tanımlanarak diger fonksiyonu gecersiz kılar
    protected function SetName($n) {
    //   $this->name = strtolower($n);
        $this->name = Person::SetName($n);
    }
}