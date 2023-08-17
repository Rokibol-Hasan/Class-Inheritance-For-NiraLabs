<?php
class Shape
{
    public function calculateArea()
    {
        echo "Calculatfing area of a generic shape.";
    }
}

class Rectangle extends Shape
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        $area = $this->length * $this->width;
        echo "Area of the rectangle: " . $area;
    }
}

class Circle extends Shape
{
    private $radius;
    private $pi;
    public function __construct($radius, $pi)
    {
        $this->radius = $radius;
        $this->pi = $pi;
    }

    public function calculateArea()
    {
        $area = ($this->radius * $this->radius) * $this->pi;
        echo "Area of the circle: " . $area;
    }
}





$rectangle = new Rectangle(12, 15);
$rectangle->calculateArea();

$circle = new Circle(4, pi());
$circle->calculateArea();
