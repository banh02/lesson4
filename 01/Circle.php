<?php
require_once 'Resizeable.php';

class Circle implements Resizeable
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function resize($percent)
    {
        $this->radius += $this->radius * $percent / 100;
    }
}
