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
    $percent = rand(1, 100);
    echo "Diện tích trước khi thay đổi: " . $shape->getArea() . "\n";
    echo "Tăng kích thước lên $percent%...\n";
    $shape->resize($percent);
    echo "Diện tích sau khi thay đổi: " . $shape->getArea() . "\n";
    echo "-------------------------------\n";
}
