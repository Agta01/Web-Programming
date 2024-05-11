<?php

// Pembuatan class dengan nama "Car"
class Car 
{
    private $brand; //Properti dengan access private

    // Pembuatan konstruktor berparameter brand untuk menciptakan objek mobil dengan brand
    public function __construct($brand)
    {
        echo "A new car is created.<br>";
        $this->brand = $brand;
    }

    // Fungsi mendapatkan brand
    public function getBrand() 
    {
        return $this->brand;
    }

    // Destruktor untuk mencetak apabila objek dihancurkan
    public function __destruct()
    {
        echo "The car is destroyed.<br>";
    }
}

// Membuat objek car dengan brand "Toyota"
$car = new Car("Toyota");

// Mencetak merek mobil
echo "Brand: ". $car->getBrand() . "<br>"

?>