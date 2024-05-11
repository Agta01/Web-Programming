<?php

// Pembuatan class abstrak dengan nama Shape
abstract class Shape
{
    abstract public function calculateArea(); //Pembuatan fungsi abstrak calculateArea   
}

// Pembuatan child class "Circle" karena ada syntaks extends
class Circle extends Shape
{
    private $radius;
    // Pembuatan Konstruksi berparameter radius
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Pembuatan child class "Rectangle" karena ada syntaks extends
class Rectangle extends Shape 
{
    private $width;
    private $height;

    // Pembuatan Konstruksi berparameter widht dan height
    public function __construct($width, $height) 
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Pembuatan Objek circle dan rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Untuk mencetak
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";

// Fungsi yang ada di abstrak class merupakan suatu standarisasi untuk child class
// Jadi harus terdapat di semua child class, jika tidak ada maka akan terjadi error
?>