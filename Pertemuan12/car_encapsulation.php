<?php

// Membuat class dengan nama Car
class Car
{
    // Properti dengan private access 
    private $model;
    private $color;

    //Pembuatan Konstruktor berparameter
    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    // Pembuatan fungsi get dan set untuk model dan color
    public function getModel()
    {
        return $this->model;
    }
    
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

// Pembuatan objek Car dengan isi toyota dan blue
$car = new Car("Toyota", "Blue");

// Untuk mencetak model dan warna
echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";

// Perubahan warna
$car->setColor("Red");

//Mencetak updated warna 
echo "Updated Color: " . $car->getColor() . "<br>";
?>
