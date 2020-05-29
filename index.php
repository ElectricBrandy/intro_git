<?php

class Human{
    //プロパティの宣言
    protected $name = "名前<br>";             //publicだと他者が名前などを書き換えれてしまう            
    protected $age ="年齢<br>";
    protected $address ="居住地<br>";

    //メソッド
    public function __construct($name,$age,$address){
        $this->name = $name."<br>";
        $this->age = $age."<br>";
        $this->address = $address."<br>";
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getAddress(){
        return $this->address;
    }
}

$kishi = new Human("kishiYoshitaka",22,"ehime");
echo $kishi->getName();
echo $kishi->getAge();
echo $kishi->getAddress();

$kawabata = new Human("kawabata yasunari",72,"oosaka");
echo $kawabata->getName();
echo $kawabata->getAge();
echo $kawabata->getAddress();
// echo $kishi->name; 
// echo $kishi->age; 
// echo $kishi->address; 
?>