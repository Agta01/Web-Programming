<?php
//Pembuatan Class 
class Car
{
    public $brand;

    // Pembuatan function
    public function startEngine()
    {
        echo "Engine started!";
    }
}

// Pembuatan objek baru dengan nama car1 dan car2
$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda";

// Menjalankan function untuk car1 startEngine  car2 brand Honda
$car1->startEngine();
echo $car2->brand;
?>