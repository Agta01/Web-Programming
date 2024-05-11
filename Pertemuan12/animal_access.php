<?php
// Pembuatan class dengan nama Animal
class Animal
{
    public $name; // Properti dengan nama "name" hak aksesnya public
    protected $age; // Properti dengan nama "age" hak aksesnya protected
    private $color; // Properti dengan nama "color" hak aksesnya private

    // Pembuatan konstruktor untuk menginisialisai name, age, color
    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    // Metode mendapatkan "name" hewan
    public function getName()
    {
        return $this->name;
    }
    // Metode mendapatkan "age" hewan
    protected function getAge() 
    {
        return $this->age;
    }
    // Metode mendapatkan "color" hewan
    private function getColor()
    {
        return $this->color;
    }
}

// Pembuatan objek baru dengan isi "Dog", 3, "Brown"
$animal = new Animal("Dog", 3, "Brown");

// Pencetakan isi (ada yang error ini terjadi karena pengaruh hak akses yang diberikan)
echo "Name: " . $animal->name . "<br>";
echo "Age: " . $animal->getAge() . "<br>";
echo "Color: ". $animal->getColor(). "<br>";
?>