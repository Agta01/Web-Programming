<?php

// Mendefinisikan interface shape dan color yang masing" classnya terdapat fungsi
interface Shape 
{
    public function calculateArea();
}

interface color 
{
    public function getColor();
}

// Pembuatan class "Circle" yang mengimplemtasikan interface shape dan color
class Circle implements Shape, color
{
    private $radius;
    private $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getColor()
    {
        return $this->color;
    }
}

// Pembuatan objek circle dengan radius 5 dan color "Blue"
$circle = new Circle(5, "Blue");

// Untuk mencetak hasilnya
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Color of Circle: " . $circle->getColor() . "<br>";
?>
