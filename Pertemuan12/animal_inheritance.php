<?php
// Pembuatan parent class (animal)
class Animal 

// Deklarasi name dan pembuatan function
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }

    public function sleep()
    {
       echo $this->name . " is sleeping.<br>";
    }
}

// Pewarisan parent class (Animal) kepada child class (Cat dan Dog) ditandai dengan syntaks extends
class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " says meow!<br>";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " says woof!<br>";
    }
}

// Pembuatan objek baru yang nantinya digunakan untuk mengambil fungsi dari kelas yang sesuai.
$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat->eat();
$dog->sleep();

$cat->meow();
$dog->bark();
?>