<?php

class Shape
{
    public function rectangle($length, $width)
    {
        $area = $length * $width;
        echo "Area of the rectangle is:" . $area;
    }

    public function circle($radius, $pi)
    {
        $area = ($radius*$radius) * $pi;
        echo "Area of the rectangle is:" . $area;
    }
}

$area = new Shape();
$area->rectangle(12,15);
$area->circle(4,pi());