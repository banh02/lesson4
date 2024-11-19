<?php
require_once 'Circle.php';
require_once 'Rectangle.php';
require_once 'Square.php';

$shapes = [
    new Circle(10),
    new Rectangle(4, 5),
    new Square(6)
];

foreach ($shapes as $shape) {
    echo "Diện tích: " . $shape->getArea() . "\n";
    if ($shape instanceof Colorable) {
        $shape->howToColor();
    }
    echo "-------------------------------\n";
}
