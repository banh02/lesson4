<?php
require_once 'Resizeable.php';

class Rectangle implements Resizeable
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function resize($percent)
    {
        $this->width += $this->width * $percent / 100;
        $this->height += $this->height * $percent / 100;
    }
}
