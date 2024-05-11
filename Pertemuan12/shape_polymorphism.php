<?php
// Mendefinisikan interface dengan nama Shape
interface Shape
{
    public function calculateArea();
}

// Membuat class dengan nama Circle (child class) dengan orangtua Shape
class Circle  implements Shape 
{
    private $radius; //properti dengan access private

    public function __construct($radius) // Membuat konstruktor berparameter radius
    {
        $this->radius = $radius;
    }

    public function calculateArea() //Membuat fungsi untuk menghitung luas lingkaran
    {
        return pi() * pow($this->radius, 2);
    }
}

// Membuat class dengan nama Rectangle (child class) dengan orangtua Shape
class Rectangle implements Shape

{
    private $width;
    private $height;

    public function __contruct($width, $height) // Membuat konstruktor berparameter width dan height
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() //Membuat fungsi untuk menghitung luas persegi panjang
    {
        return $this->width * $this->height;
    }
}

//Membuat fungsi print area
function printArea(Shape $shape)
{
    echo "Area: " . $shape->calculateArea() . "<br>"; 
}

// Pembuatan objek baru.
$circle = new Circle(5); //Objek lingkaran dengan radius 5
$rectangle = new Rectangle(4, 6); // Objek rectangle dengan isi 4 x 6

// Untuk mencetak luas circle dan rectangle
printArea($circle);
printArea($rectangle);
?>